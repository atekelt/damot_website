<?php
namespace App\Policies;

use App\Models\User;
use App\Models\Blog;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the blog.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Blog  $blog
     * @return bool
     */
    public function update(User $user, Blog $blog)
    {
        return $user->id === $blog->user_id; // User can update the blog if they own it
    }
}
