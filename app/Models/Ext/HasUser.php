<?php
/**
 * HasUser.php
 *
 * @author    Bernd Engels
 * @created   12.03.19 17:27
 * @copyright engels@goldenacker.de
 */

namespace App\Models\Ext;

//use Auth;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Trait HasUser
 * see: https://www.php.net/manual/de/language.oop5.traits.php
 */
trait HasUser
{
	public static function bootHasUser()
	{
		/**
		 * @var $user User
		 */
		$user = auth()->user();
		if($user) {
            static::creating(function($table) use ($user)  {
				$table->created_by = $user->id;
			});
            static::updating(function($table) use ($user)  {
                $table->updated_by = $user->id;
            });
            static::saving(function($table) use ($user) {
				if( $table->id > 0 ) {
					$table->updated_by = $user->id;
				} else {
					$table->created_by = $user->id;
				}
			});
		}
	}

	/**
	 * @return HasOne
	 */
	public function createdBy()
	{
		return $this->hasOne(User::class, 'id', 'created_by');
	}

	/**
	 * @return HasOne
	 */
	public function updatedBy()
	{
		return $this->hasOne(User::class, 'id', 'updated_by');
	}
}
