<?php
/**
 * Created by PhpStorm.
 * User: punk
 * Date: 18.12.17
 * Time: 17:34
 */

namespace app\Models;

use DataBase\DB;
use app\classes\Pagination;
use app\classes\Search;
use app\classes\Upload;
use vendor\core\Model;

class Product extends Model
{
    private $table = 'product';
    public $id;
    public $name;
    public $category;
    public $price;
    public $description;
    public $discount;
    public $amount;
    public $row;


    public function index($sample, $table, $start = null, $end = null)
    {
        if ($start == null && $end == null) {
            $start = 0;
            $end = 10;
        }
        $sql = "SELECT $sample FROM $table LIMIT $start, $end ";

        $result = DB::getInstance()->custom_query($sql);

//        //$result[] = DB::getInstance()->custom_query ("SELECT  img.path FROM product  INNER JOIN img ON product.img_id = img.id  WHERE product.img_id=68");
//        foreach ($result as $key => $value) {
//            if ($value['img_id']!=null){
//
//                $result['img'][$key] = DB::getInstance()->custom_query ("SELECT img.path FROM img INNER JOIN product ON img.id =product.img_id");
//            }
//            //$result[] = DB::getInstance()->custom_query ("SELECT  img.path FROM product  INNER JOIN img ON product.img_id = img.id  WHERE product.img_id=68");
//
//        }
//        //Dbug($result);
        return $result;
    }


     public function create($row,  $img = null)
     {
         if ($img) {
             $upload = new Upload($img);
             $id_img = $upload->save ();


             $row['img_id'] = $id_img;
             Dbug($row);
             $_POST['product']['img_id'] = $id_img;
         }
         
         parent::save($this->table, $row); // TODO: Change the autogenerated stub
     }


    public function read($id)
    {

        $result = DB::getInstance()->select('*', $this->table, 'id =' . $id);

        return $result;
    }


    public function updateOne($id, $str)
    {
        DB::getInstance()->update($this->table, $str, 'id = ' . $id);

    }


    public function deleteOne($id)
    {
        DB::getInstance()->delete($this->table, 'id = ' . $id);

    }
}