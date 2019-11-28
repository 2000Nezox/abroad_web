
//require_once('C:\xampp\htdocs\abroad_web\class\Model\account\operation\UserListAcquisitionDB.php');
namespace myapp\Controll\account\operation;

use myapp\Model\account\operation\UserListAcquisitionDB;

class UserListAcquisition
{
    public function allLearned()
    {
        $db = new UserListAcquisitionDB();
        $ans = $db->normalList();
        return $ans;
    }

}