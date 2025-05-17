<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $team = [
            [
                'name'        => 'Vũ Thị Khánh Ly',
                'image'       => asset('images/VKL.jpg'),
                'title'       => 'Leader',
                'description' => 'Mình chịu trách nhiệm phân công nhiệm vụ, thúc đẩy tiến độ làm việc và cùng cả nhóm xây dựng và mang đến cho các bạn một trang web thú vị nói về người học Boomer Bridge.',
                'socials'     => [
                    'facebook'  => 'https://www.facebook.com/nguyetly.hoang.16',
                    'instagram' => ''
                ],
            ],
            [
                'name'        => 'Vũ Minh Hằng',
                'image'       => asset('images/VMH.jpg'),
                'title'       => 'Designer',
                'description' => 'Mình đóng vai trò phối hợp cùng các thành viên lên kế hoạch thực hiện yêu cầu môn học, đóng góp ý tưởng để sản phẩm hoàn thiện nhất. Hi vọng cô và các bạn sẽ hứng thú với những sản phẩm độc đáo từ nhóm mình nhé!',
                'socials'     => [
                    'facebook'  => 'https://www.facebook.com/shynnsleepy',
                    'instagram' => ''
                ],
            ],
             [
                'name'        => 'Đõ Thu Hiền',
                'image'       => asset('images/DTH.jpg'),
                'title'       => 'Voice Talent',
                'description' => 'Mình đóng vai trò phối hợp cùng các thành viên lên kế hoạch thực hiện yêu cầu môn học, đóng góp ý tưởng để sản phẩm hoàn thiện nhất. Hi vọng cô và các bạn sẽ hứng thú với những sản phẩm độc đáo từ nhóm mình nhé!',
                'socials'     => [
                    'facebook'  => 'https://www.facebook.com/hiendo3011',
                    'instagram' => ''
                ],
            ],
             [
                'name'        => 'Huỳnh Thị Hiển',
                'image'       => asset('images/HTH.jpg'),
                'title'       => 'Content Creator',
                'description' => 'Mình đóng vai trò phối hợp cùng các thành viên lên kế hoạch thực hiện yêu cầu môn học, đóng góp ý tưởng để sản phẩm hoàn thiện nhất. Hi vọng cô và các bạn sẽ hứng thú với những sản phẩm độc đáo từ nhóm mình nhé!',
                'socials'     => [
                    'facebook'  => 'https://www.facebook.com/huynh.thi.hien.1203',
                    'instagram' => ''
                ],
            ],
             [
                'name'        => 'Nguyễn Ngọc Minh Thanh',
                'image'       => asset('images/NNMT.jpg'),
                'title'       => 'Content Creator',
                'description' => 'Mình đóng vai trò phối hợp cùng các thành viên lên kế hoạch thực hiện yêu cầu môn học, đóng góp ý tưởng để sản phẩm hoàn thiện nhất. Hi vọng cô và các bạn sẽ hứng thú với những sản phẩm độc đáo từ nhóm mình nhé!',
                'socials'     => [
                    'facebook'  => 'https://www.facebook.com/shynnsleepy',
                    'instagram' => ''
                ],
            ],
             [
                'name'        => 'Tôi tên Phát',
                'image'       => asset('images/Phat.jpg'),
                'title'       => 'Game Creator',
                'description' => 'Mình đóng vai trò phối hợp cùng các thành viên lên kế hoạch thực hiện yêu cầu môn học, đóng góp ý tưởng để sản phẩm hoàn thiện nhất. Hi vọng cô và các bạn sẽ hứng thú với những sản phẩm độc đáo từ nhóm mình nhé!',
                'socials'     => [
                    'facebook'  => 'https://www.facebook.com/tran.phong.558015',
                    'instagram' => ''
                ],
            ],
           
        ];
 
        return view('about', compact('team'));
    }
}
