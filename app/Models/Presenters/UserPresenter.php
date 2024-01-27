<?php

namespace App\Models\Presenters;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Facades\Cache;

/**
 * Presenter Class for Book Module.
 */
trait UserPresenter
{
    /**
     * Get Status Label.
     */
    public function getStatusLabelAttribute()
    {
        $return_string = '';
        switch ($this->status) {
            case '1':
                $return_string = '<span class="badge bg-success">Active</span>';
                break;

            case '2':
                $return_string = '<span class="badge bg-warning text-dark">Blocked</span>';
                break;

            default:
                $return_string = '<span class="badge bg-primary">Status:'.$this->status.'</span>';
                break;
        }

        return $return_string;
    }

    /**
     * Retrieves the label for the "confirmed" attribute.
     *
     * @return string The HTML label for the "confirmed" attribute.
     */
    public function getConfirmedLabelAttribute()
    {
        if ($this->email_verified_at !== null) {
            return '<span class="badge bg-success">Confirmed</span>';
        }

        return '<span class="badge bg-danger">Not Confirmed</span>';
    }

    /**
     * Cache Permissions Query.
     */
    public function getPermissionsAttribute()
    {
        $permissions = Cache::rememberForever('permissions_cache', function () {
            return Permission::select('permissions.*', 'model_has_permissions.*')
                ->join('model_has_permissions', 'permissions.id', '=', 'model_has_permissions.permission_id')
                ->get();
        });

        return $permissions->where('model_id', $this->id);
    }

    /**
     * Cache Roles Query.
     */
    public function getRolesAttribute()
    {
        $roles = Cache::rememberForever('roles_cache', function () {
            return Role::select('roles.*', 'model_has_roles.*')
                ->join('model_has_roles', 'roles.id', '=', 'model_has_roles.role_id')
                ->get();
        });

        return $roles->where('model_id', $this->id);
    }
}
