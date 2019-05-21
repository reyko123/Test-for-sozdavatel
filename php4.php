<?php



class php4
{
    private $file_name; // название файла
    private $file_tmp; // путь до временного хранилища
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
    private function Validate() {
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

        if ($this->file_type != image/jpeg || $this->file_type != image/png) {
            echo 'Загрузите файл нужного формата (jpg,png)';
            exit();
        }

        return true;
    }
    // папка, в которую отправлять картинки
    private function getPath(){
       return $path =     'Images/' . $this->file_name;
    }


}
