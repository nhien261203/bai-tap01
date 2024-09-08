<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    public function danh_sach() {
        // Tinh toan ...
        // return 'Có tổng cộng 3 bạn sinh viên';
        return view('danhsachsinhvien');
    }
    public function dang_ky_hoc(){
        // return 'đăng ký học tập';
        return response()->json([
            'sv_ma  ' => 'SV001',
            'sv_ten' => 'Đỗ Văn Nhiên'
        ]);
    }
}
