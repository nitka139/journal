 <?php
class Model_Feedback extends Model
{
	public function send_data($data = null)
	{

		if (!empty($data)) {
			$result = $this->executeQuery("INSERT INTO feedback (user,
comment, email) VALUES ('".$data['user']."', '".$data['comment']."',
'".$data['email']."');");

		if (!$result) {
			$result = mysqli_error($this->mysqli);
		}

			} else {
		$result = 'Empty data!';
		}
		return $result;
		}
	}
?>