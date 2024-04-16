<?php

namespace App\Repositories;

use App\IRepositories\IGiayRepository;
use App\Models\Giay;

class GiayRepository implements IGiayRepository
{
    //override
    public function getAll()
    {
        Giay::all();
    }

    //override
    public function get($id)
    {
        $giay = Giay::find($id);
        if (!$giay) {
            return null;
        }
        return $giay;
    }

    //override
    public function create($request)
    {
        $ten_giay = $request->input('ten_giay');
        $ten_loai_giay = $request->input('ten_loai_giay');
        $ten_thuong_hieu = $request->input('ten_thuong_hieu');
        $mo_ta = $request->input('mo_ta');
        $don_gia = $request->input('don_gia');
        $so_luong = $request->input('so_luong');
        $hinh_anh_1 = $request->input('hinh_anh_1');
        $hinh_anh_2 = $request->input('hinh_anh_2');
        $hinh_anh_3 = $request->input('hinh_anh_3');
        $hinh_anh_4 = $request->input('hinh_anh_4');
        $ten_khuyen_mai = $request->input('ten_khuyen_mai');
        $so_luong_mua = $request->input('so_luong_mua');

        $data = [
            'ten_giay' => $ten_giay,
            'ten_loai_giay' => $ten_loai_giay,
            'ten_thuong_hieu' => $ten_thuong_hieu,
            'mo_ta' => $mo_ta,
            'don_gia' => $don_gia,
            'so_luong' => $so_luong,
            'hinh_anh_1' => $hinh_anh_1,
            'hinh_anh_2' => $hinh_anh_2,
            'hinh_anh_3' => $hinh_anh_3,
            'hinh_anh_4' => $hinh_anh_4,
            'ten_khuyen_mai' => $ten_khuyen_mai,
            'so_luong_mua' => $so_luong_mua
        ];

        $giay = Giay::create($data);
        return $giay;
    }

    //override
    public function update($id, $request)
    {
        $ten_giay = $request->input('ten_giay');
        $ten_loai_giay = $request->input('ten_loai_giay');
        $ten_thuong_hieu = $request->input('ten_thuong_hieu');
        $mo_ta = $request->input('mo_ta');
        $don_gia = $request->input('don_gia');
        $so_luong = $request->input('so_luong');
        $hinh_anh_1 = $request->input('hinh_anh_1');
        $hinh_anh_2 = $request->input('hinh_anh_2');
        $hinh_anh_3 = $request->input('hinh_anh_3');
        $hinh_anh_4 = $request->input('hinh_anh_4');
        $ten_khuyen_mai = $request->input('ten_khuyen_mai');
        $so_luong_mua = $request->input('so_luong_mua');

        $data = [
            'ten_giay' => $ten_giay,
            'ten_loai_giay' => $ten_loai_giay,
            'ten_thuong_hieu' => $ten_thuong_hieu,
            'mo_ta' => $mo_ta,
            'don_gia' => $don_gia,
            'so_luong' => $so_luong,
            'hinh_anh_1' => $hinh_anh_1,
            'hinh_anh_2' => $hinh_anh_2,
            'hinh_anh_3' => $hinh_anh_3,
            'hinh_anh_4' => $hinh_anh_4,
            'ten_khuyen_mai' => $ten_khuyen_mai,
            'so_luong_mua' => $so_luong_mua
        ];

        $giay = Giay::where('id', $id)->update($data);
        return $giay;
    }

    //override
    public function delete($id)
    {
        $result = Giay::where('id', $id)->delete();

        if ($result) {
            return 'Xóa thành công';
        } else {
            return 'Không thể xóa hoặc không tìm thấy bản ghi';
        }
    }

    //override
    public function findBy($condition, $value)
    {
        return Giay::where($condition, $value)->get();
    }

    //override
    public function orderBy($condition, $sort)
    {
        return Giay::orderBy($condition, $sort)->get();
    }
}
