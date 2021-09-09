<?php
declare(strict_types=1);
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
class Transaction extends Model
{
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $table = "transactions";

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
		'id','hash', 'time', 'tx_index', 'relayed_by', 'version','created_at','updated_at'
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [];

    public function getId(): ?int
    {
        return $this->getAttribute('id');
    }
    
	public function getHash(): ?string
    {
        return $this->getAttribute('hash');
    }

	public function getTime(): ?string
    {
        return $this->getAttribute('time');
    }

    public function getTxIndex(): ?string
    {
        return $this->getAttribute('tx_index');
    }

    public function getRelayedBy(): ?string
    {
        return $this->getAttribute('relayed_by');
    }

    public function getVersion(): ?int
    {
        return $this->getAttribute('version');
    }

     /**
     * Get the value of Created At
     *
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at->toDateTimeString();
    }
  
	/**
     * Get the value of Updated At
     *
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at->toDateTimeString();
    }

	/*Get date and time format*/
	public function getTimeAttribute($time)
	{  
		return	$datetime = date('Y/m/d , H:m:i a', intval($time));
	}
}
