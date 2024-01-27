<?php

namespace App\Http\Middleware;

use Closure;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \Menu::make('admin_sidebar', function ($menu) {
            $this->addDashboardMenuItem($menu);
            $this->addNotificationsMenuItem($menu);
            $this->addManagementSeparator($menu);
            $this->addSettingsMenuItem($menu);
            $this->addBackupsMenuItem($menu);
            $this->addAccessControlDropdown($menu);
            $this->addLogViewerDropdown($menu);

            // Access Permission Check
            $menu->filter(function ($item) {
                if ($item->data('permission')) {
                    // ... (existing permission logic)
                }

                return true;
            });

            // Set Active Menu
            $menu->filter(function ($item) {
                if ($item->activematches) {
                    // ... (existing activematches logic)
                }

                return true;
            });
        })->sortBy('order');

        return $next($request);
    }

    private function addDashboardMenuItem($menu)
    {
        $menu->add('<i class="nav-icon fa-solid fa-cubes"></i> ' . __('Dashboard'), [
            'route' => 'backend.dashboard',
            'class' => 'nav-item',
        ])->data([
            'order' => 1,
            'activematches' => 'admin/dashboard*',
        ])->link->attr([
            'class' => 'nav-link',
        ]);
    }

    private function addNotificationsMenuItem($menu)
    {
        $menu->add('<i class="nav-icon fas fa-bell"></i> Notifications', [
            'route' => 'backend.notifications.index',
            'class' => 'nav-item',
        ])->data([
            'order' => 99,
            'activematches' => 'admin/notifications*',
            'permission' => [],
        ])->link->attr([
            'class' => 'nav-link',
        ]);
    }

    private function addManagementSeparator($menu)
    {
        $menu->add('Management', [
            'class' => 'nav-title',
        ])->data([
            'order' => 101,
            'permission' => ['edit_settings', 'view_backups', 'view_users', 'view_roles', 'view_logs'],
        ]);
    }

    private function addSettingsMenuItem($menu)
    {
        $menu->add('<i class="nav-icon fas fa-cogs"></i> Settings', [
            'route' => 'backend.settings',
            'class' => 'nav-item',
        ])->data([
            'order' => 102,
            'activematches' => 'admin/settings*',
            'permission' => ['edit_settings'],
        ])->link->attr([
            'class' => 'nav-link',
        ]);
    }

    private function addBackupsMenuItem($menu)
    {
        $menu->add('<i class="nav-icon fas fa-archive"></i> Backups', [
            'route' => 'backend.backups.index',
            'class' => 'nav-item',
        ])->data([
            'order' => 103,
            'activematches' => 'admin/backups*',
            'permission' => ['view_backups'],
        ])->link->attr([
            'class' => 'nav-link',
        ]);
    }

    private function addAccessControlDropdown($menu)
    {
        $accessControl = $menu->add('<i class="nav-icon fa-solid fa-user-gear"></i> Access Control', [
            'class' => 'nav-group',
        ])->data([
            'order' => 104,
            'activematches' => ['admin/users*', 'admin/roles*'],
            'permission' => ['view_users', 'view_roles'],
        ]);

        $accessControl->link->attr([
            'class' => 'nav-link nav-group-toggle',
            'href' => '#',
        ]);

        $this->addUsersSubmenu($accessControl);
        $this->addRolesSubmenu($accessControl);
    }

    private function addUsersSubmenu($accessControl)
    {
        $accessControl->add('<i class="nav-icon fa-solid fa-user-group"></i> Users', [
            'route' => 'backend.users.index',
            'class' => 'nav-item',
        ])->data([
            'order' => 105,
            'activematches' => 'admin/users*',
            'permission' => ['view_users'],
        ])->link->attr([
            'class' => 'nav-link',
        ]);
    }

    private function addRolesSubmenu($accessControl)
    {
        $accessControl->add('<i class="nav-icon fa-solid fa-user-shield"></i> Roles', [
            'route' => 'backend.roles.index',
            'class' => 'nav-item',
        ])->data([
            'order' => 106,
            'activematches' => 'admin/roles*',
            'permission' => ['view_roles'],
        ])->link->attr([
            'class' => 'nav-link',
        ]);
    }

    private function addLogViewerDropdown($menu)
    {
        $accessControl = $menu->add('<i class="nav-icon fa-solid fa-list-check"></i> Log Viewer', [
            'class' => 'nav-group',
        ])->data([
            'order' => 107,
            'activematches' => ['laravel-filemanager*', 'log-viewer*'],
            'permission' => ['view_logs'],
        ]);

        $accessControl->link->attr([
            'class' => 'nav-link nav-group-toggle',
            'href' => '#',
        ]);

        $this->addLogViewerDashboard($accessControl);
        $this->addLogsByDays($accessControl);

    }
    private function addLogViewerDashboard($accessControl)
    {
        $accessControl->add('<i class="nav-icon fa-solid fa-list"></i> Dashboard', [
            'route' => 'log-viewer::dashboard',
            'class' => 'nav-item',
        ])->data([
            'order' => 108,
            'activematches' => 'admin/log-viewer',
        ])->link->attr([
            'class' => 'nav-link',
        ]);
    }

    private function addLogsByDays($accessControl)
    {
        $accessControl->add('<i class="nav-icon fa-solid fa-list-ol"></i> Logs by Days', [
            'route' => 'log-viewer::logs.list',
            'class' => 'nav-item',
        ])->data([
            'order' => 109,
            'activematches' => 'admin/log-viewer/logs*',
        ])->link->attr([
            'class' => 'nav-link',
        ]);
    }
}
