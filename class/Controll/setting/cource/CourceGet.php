<?php
require_once 'C:\xampp\htdocs\abroad_web\class\Model\setting\cource\CourceGetDB.php';


class CourceGet
{
    private $db;

    public function __construct()
    {
        $this->db = new CourceGetDB();
    }

    public function get()
    {
        //countryの一覧を習得する
        //一覧のデータを習得する
        //習得したデータを連想配列に纏める
        //配列を返す

        $ans['country'] = $this->db->country_get();
        $country = $this->db->country_get();
        foreach ($country as $key=>$value){
            $country_lst[] = "<option value=".$value['country_number'].">".$value['country_name']."</option>";
        }

        $ans['country'] = implode('',$country_lst);
        $ans['data'] = $this->body_data_all_get();
        return $ans;
    }

    public function school_get($key){
        $ans = $this->db->school_get($key);
        foreach ($ans as $key=>$value){
            $lst[] = "<option value=".$value['target_school_number'].">".$value['school_name']."</option>";
        }
        return $lst;
    }

    public function restriction_get($key)
    {
        $data = $this->db->restriction_get($key);
        $data_lst = $this->shaping($data);
        return $data_lst;
    }

    private function shaping($data){
        foreach ($data as $key=>$value){
            $day1 = new DateTime($value["end_study_abroad"]);
            $day2 = new DateTime($value["start_study_abroad"]);
            $interval = $day1->diff($day2);
            $data_lst[] = "<tr>".
                "<td>".$value["school_name"]."</td>
                           <td>".'null'."</td>
                           <td>".$interval->format('%a日')."</td>
                           <td>".((int)$value["target_amount"]/10000)."</td>
                           <td>".'null'."</td>
                           </tr>";
        }
        return $data_lst;
    }

    public function body_data_all_get(){
        $data = $this->db->get();
        $data_lst = $this->shaping($data);
        return implode('',$data_lst);
    }
}



