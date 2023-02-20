<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Reply extends Model
    {
        use HasFactory;

        /**
         * The attributes that are mass assignable.
         * @var array<int, string>
         */
        
        protected $fillable = [
                'title',
                'content',
                'user_id',
                'topic_id'
            ];

        public function topic(){
            return $this->belongsTo(Topic::class);
        }

        public function user() {
            return $this->belongsTo(User::class);
        }
    }
