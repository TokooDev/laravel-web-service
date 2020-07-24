<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use App\Tag;
use App\User;
use App\Comment;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class Article
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property string|null $updated_at
 * @property int $user_id
 *
 * @property User $user
 * @property Collection|Comment[] $comments
 * @property Collection|Tag[] $tags
 *
 * @package App
 */
class Article extends Model
{
	protected $table = 'article';
	protected $fillable = [
		'title',
		'description',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	public function tags()
	{
		return $this->belongsToMany(Tag::class, 'tag_article');
	}
}
