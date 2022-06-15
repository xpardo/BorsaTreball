<?php
namespace App\Handlers;

class ImageUploadHandler
{
    // Solo carga archivos de imagen con las siguientes extensiones
    protected $allowed_ext = ["png", "jpg", "gif", 'jpeg'];

    public function save($file, $folder, $file_prefix)
    {
        // Cree las reglas de la carpeta almacenada, como: uploads / images / avatars / 201709/21 /
        // El corte de carpetas hace que la búsqueda sea más eficiente.
        $folder_name = "uploads/images/$folder/" . date("Ym/d", time());

        // La ruta física donde se almacena el archivo. `Public_path ()` obtiene la ruta física de la carpeta `public`.
        // valores como: / home / vagrant / Code / larabbs / public / uploads / images / avatars / 201709/21 /
        $upload_path = public_path() . '/' . $folder_name;

        // Obtenga el nombre del sufijo del archivo, porque el nombre del sufijo está vacío cuando la imagen se pega desde el portapapeles, así que asegúrese de que el sufijo siempre exista
        $extension = strtolower($file->getClientOriginalExtension()) ?: 'png';

        // nombres de archivo de empalme, prefijados para aumentar la resolución, el prefijo puede ser el ID del modelo de datos relevante
        // Valores como: 1_1493521050_7BVc9v9ujP.png
        $filename = $file_prefix . '_' . time() . '_' . str_random(10) . '.' . $extension;

        // Si la carga no es una imagen, la operación finalizará
        if ( ! in_array($extension, $this->allowed_ext)) {
            return false;
        }

        // mueve la imagen a nuestra ruta de almacenamiento de destino
        $file->move($upload_path, $filename);

        return [
            'path' => config('app.url') . "/$folder_name/$filename"
        ];
    }

}
