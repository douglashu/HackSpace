<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Judge if has permission
     * @param $permission
     * @return bool
     */
    public function hasPermission($permission)
    {
        //解析json，角色数组
        $permissions = json_decode($this->role);
        //判断是否拥有对应权限
        return in_array($permission, $permissions);
    }

    /**
     * Add Permission
     * @param $permission
     */
    public function setPermission($permission)
    {
        //解析json,角色数组
        $permissions = json_decode($this->role);
        //判断是否已有该权限
        if(!$this->hasPermission($permission))
        {
            //添加权限
            array_push($permissions, $permission);
            //存储json
            $this->role = json_encode($permissions);
            //更新角色信息
            $this->save();
        }
    }

    /**
     * remove Permission
     * @param $permission
     */
    public function removePermission($permission)
    {
        //解析json,角色数组
        $permissions = json_decode($this->role);
        //判断是否已有该权限
        if(!$this->hasPermission($permission))
        {
            //删除权限
            $key = array_search($permission, $permissions);
            array_splice($permissions, $key, 1);
            //存储json
            $this->role = json_encode($permissions);
            //更新角色信息
            $this->save();
        }
    }

}
