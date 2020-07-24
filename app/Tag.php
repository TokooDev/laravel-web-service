<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 * 
 * @property int $id
 * @property string $libelle
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Article[] $articles
 *
 * @package App
 */
class Tag extends Model
{
	protected $table = 'tag';

	protected $fillable = [
		'libelle'
	];

	public function articles()
	{
		return $this->belongsToMany(Article::class, 'tag_article');
	}
}
