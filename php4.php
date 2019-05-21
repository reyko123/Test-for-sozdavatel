<?php

/**
 * Загрузка файлов в папку на сервере
 */

class php4
{
    protected $file_name; // название файла
    protected $file_tmp; // путь до временного хранилища
    private $file_type; //тип файла
    private $file_errors; //ошибки

    function __construct()
    {
       $this->file_name = $_FILES ['image']['name'];
       $this->file_tmp = $_FILES ['image']['tmp_name'];
       $this->file_type = $_FILES ['image']['type'];
       $this->file_errors = $_FILES ['image']['error'];
    }

    //валидация файла
    private function Validate()
    {
    if ($this->file_errors >0) {

        switch ($this->file_errors) {
            case '1':
                echo "Ошибка: слишком большой размер файла";
                break;
            case '3':
                echo "Ошибка: файл не загружен полностью";
                break;
            case '4':
                echo "Ошибка: файл не загружен";
                break;
        }
        exit();
    }

    if ($this->file_type != 'image/png' xor $this->file_type != 'image/jpeg') {
    } else {
        echo 'Загрузите файл нужного формата (jpg,png)';
        exit();
    }

    return true;
    }

    // папка, в которую отправлять картинки
    protected function getPath()
    {
       return $path = 'images/'. $this->file_name;
    }
    // отправка файла
    public function moveUpload()
    {
        if ($_POST['send'] && $this->Validate())
            if  (move_uploaded_file($this->file_tmp, $this->getPath())) {
                echo "Файл". $this->file_name. "успешно загружен";
            } else {
                echo "Возможная атака с участием загрузки файла:";
                echo "файл '".  $this->file_name. "'.";
            }
    }
}
