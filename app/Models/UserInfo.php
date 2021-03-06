<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = "user_info";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    /**
     * 管理员新增账号
     * @author HuWeiChen <github.com/nathaniel-kk>
     * @param [int]$work_id,[String]$name,[int]$phone,[String]$email
     * @return array
     */
    Public static function adminNewAcc($work_id,$name,$phone,$email){
        try {
            $date = UserInfo::create([
                'user_id'=>$work_id,
                'name'=>$name,
                'phone'=>$phone,
                'email'=>$email,
            ]);
            return $date;
        } catch(\Exception $e){
            logError('新增用户信息错误',[$e->getMessage()]);
            return null;
        }
    }

    /**
     * 学生负责人新增账号
     * @author HuWeiChen <github.com/nathaniel-kk>
     * @param [int]$work_id,[String]$name,[int]$phone,[String]$email
     * @return array
     */
    Public static function studentNewAcc($work_id,$name,$phone,$email){
        try {
            $date = UserInfo::create([
                'user_id'=>$work_id,
                'name'=>$name,
                'phone'=>$phone,
                'email'=>$email,
            ]);
            return $date;
        } catch(\Exception $e){
            logError('新增用户信息错误',[$e->getMessage()]);
            return null;
        }
    }
    /**
     * 修改用户电话信息
     * @author HuWeiChen <github.com/nathaniel-kk>
     * @param [int] $work_id, $phone
     * @return array
     */
    Public static function updateUserPhone($work_id,$phone){
        try {
            $data = self::where('user_id',$work_id)
                ->update(['phone' => $phone]);
            return $data;
        } catch(\Exception $e){
            logError('修改用户信息错误',[$e->getMessage()]);
            return null;
        }
    }
}
