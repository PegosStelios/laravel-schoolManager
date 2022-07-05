<?php


    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Student extends Model {

        use HasFactory;

        /*public static function all(){
            return [
                [
                    'id' => 1,
                    'name' => 'John',
                    'lastName' => 'Doe'
                ],
                [
                    'id' => 2,
                    'name' => 'Stelios',
                    'lastName' => 'Pegos'
                ]
            ];
        }

        public static function find($id){
            $students = self::all();

            foreach($students as $student){
                if($student['id'] == $id){
                    return $student;
                }
            }
        }
        */
    }
?>
