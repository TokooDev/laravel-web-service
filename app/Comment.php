<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * 
 * @property int $id
 * @property string $content
 * @property int $user_id
 * @property int $article_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Article $article
 * @property User $user
 *
 * @package App
 */
class Comment extends Model
{
	protected $table = 'comment';

	protected $casts = [
		'user_id' => 'int',
		'article_id' => 'int'
	];

	protected $fillable = [
		'content',
		'user_id',
		'article_id'
	];

	public function article()
	{
		return $this->belongsTo(Article::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
