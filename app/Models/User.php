<? php 
    use CodeIgniter\Model;
class User extends Model {
    
	protected $data= [
	
	'1'     => ['name'=>'Jack Wong', 'id'=>'1', 'age'=>'27', 'gender'=>'Male','birthday'=>"07111992"],
    '2'     => ['name'=>'Doug Sam', 'id'=>'2', 'age'=>'21', 'gender'=>'Male','birthday'=>"05121998"],
    '3'     => ['name'=>'Louis Gazelt', 'id'=>'3', 'age'=>'28', 'gender'=>'Male','birthday'=>"02031991"],
    '4'     => ['name'=>'Mary Sue', 'id'=>'4', 'age'=>'45', 'gender'=>'Female','birthday'=>"09091974"],
    '5'     => ['name'=>'Carly Wong', 'id'=>'5', 'age'=>'18', 'gender'=>'Female','birthday'=>"07132001"],
    '6'     => ['name'=>'James Great', 'id'=>'6', 'age'=>'64', 'gender'=>'Male','birthday'=>"08231955"],
	
	];
	
	
	
	public function find($id = null) {
        return $this->data[$id];
	}
	
	public function findAll(int $limit = 0, int $offset = 0) {
		return $this->data;
	}
	
	
}