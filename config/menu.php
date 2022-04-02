<?php
    return[
        [
            'label'=>'Home',
            'route'=>'admin.index',
            'icon'=>'fa-home'
        ],
        // [
        //     'label'=>'Quản lý thông tin',
        //     'route'=>'admin.index',
        //     'icon'=>'fa-user-circle',
        //     'item'=>[
        //         [
        //             'label'=>'Đăng xuất',
        //             'route'=>'dangxuat'
        //         ],
        //         [
        //             'label'=>'Thông tin cá nhân',
        //             'route'=>'profile.index'
        //         ]
               
               
        //     ]
        // ],
        [
            'label'=>'Quản lý khách hàng',
            'route'=>'doanhnghiep.index',
            'icon'=>'fa-user-tie'

        ],
        [
            'label'=>'Quản lý đối tác',
            'route'=>'doitac.index',
            'icon'=>'fa-user-tie'

        ],
        [
            'label'=>' Quản lý công việc',
            'route'=>'admin.index',
            'icon'=>'fa-briefcase',
            'item' =>[
                [
                    'label'=>'Giao việc',
                    'route'=>'giaoviec.index'
                ],
                [
                    'label'=>'Quản lý file',
                    'route'=>'nop_file.index'
                ]
            ]

        ],
        [
            'label'=>' Chuyển đổi số',
            'route'=>'admin.index',
            'icon'=>'fa-briefcase',
            'item' =>[
                [
                    'label'=>'Danh mục chuyển đổi số',
                    'route'=>'danhmuc_chuyendoi.index'
                ],
                [
                    'label'=>'Dịch vụ chuyển đổi số',
                    'route'=>'dichvu_chuyendoi.index'
                ],
                [
                    'label'=>'Nhận xét của đối tác',
                    'route'=>'review.index'
                ],
                [
                    'label'=>'Liên hệ chuyển đổi số',
                    'route'=>'lienhe_chuyendoi.index'
                ]
            ]

        ],        

        [
            'label'=>'Quản lý thuộc tính',
            'route'=>'admin.index',
            'icon'=>'fa-tags',
            'item'=>[
                [
                    'label'=>'Danh mục sản phẩm',
                    'route'=>'danhmuc.index'
                ],
                [
                    'label'=>'Đặc điểm',
                    'route'=>'dacdiem.index'
                ],
                [
                    'label'=>'Tính năng',
                    'route'=>'tinhnang.index'
                ],
                [
                    'label'=>'Lợi ích',
                    'route'=>'loiich.index'
                ]
               
            ]
        ],
        [
            'label'=>'Quản lý sản phẩm',
            'route'=>'sanpham.index',
            'icon'=>'fa-microchip'

        ],
        [
            'label'=>'Quản lý thông tin',
            'route'=>'thongtin.index',
            'icon'=>'fa-phone-volume'

        ],
        [
            'label'=>'Quản lý câu hỏi',
            'route'=>'cauhoi.index',
            'icon'=>'fa-question'

        ],
        [
            'label'=>'Chỉ tiêu - Chương trình',
            'route'=>'admin.index',
            'icon'=>'fa-chart-line',
            'item'=>[
                [
                    'label'=>'Chỉ tiêu',
                    'route'=>'chitieu.index'
                ],
                [
                    'label'=>'Thực hiện chỉ tiêu',
                    'route'=>'thuchien_chitieu.index'
                ],
                [
                    'label'=>'Chương trình hành động',
                    'route'=>'chuongtrinh.index'
                ]
               
            ]
        ],   
        [
            'label'=>' Quản lý nhân viên',
            'route'=>'admin.index',
            'icon'=>'fa-users-cog',
            'item' =>[
                [
                    'label'=>'Nhân viên',
                    'route'=>'nhanvien.index'
                ],
                [
                    'label'=>'Chức vụ',
                    'route'=>'chucvu.index'
                ]
            ]

        ],
        [
            'label'=>' Cài đặt',
            'route'=>'admin.index',
            'icon'=>'fa-wrench',
            'item' =>[
                [
                    'label'=>'Quản lý thông tin',
                    'route'=>'lienhe.index'
                ],
                [
                    'label'=>'Quản lý slider',
                    'route'=>'slider.index'
                ]
            ]

        ],
        [
            'label'=>' Quản lý giới thiệu',
            'route'=>'admin.index',
            'icon'=>'fa-info',
            'item' =>[
                [
                    'label'=>'Giới thiệu',
                    'route'=>'gioithieu.index'
                ],
                [
                    'label'=>'Giải thưởng',
                    'route'=>'giaithuong.index',
        
                ],
                [
                    'label'=>'Mạng lưới',
                    'route'=>'mangluoi.index',
        
                ],
                [
                    'label'=>'Dấu ấn',
                    'route'=>'dauan.index',
        
                ],
                [
                    'label'=>'Tài liệu',
                    'route'=>'tailieu.index',
        
                ]
            ]

        ],
        [
            'label'=>' Quản lý tin tức',
            'route'=>'admin.index',
            'icon'=>'fa-newspaper',
            'item' =>[
                [
                    'label'=>'Video',
                    'route'=>'video.index'
                ],
                [
                    'label'=>'Bài viết',
                    'route'=>'baiviet.index'
                ],
                [
                    'label'=>'Bình luận bài viết',
                    'route'=>'binhluan.index'
                ]
            ]

        ]


    ]


?>