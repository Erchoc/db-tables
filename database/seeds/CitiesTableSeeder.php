<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => '110100',
                'name' => '北京市',
                'provincecode' => '110000',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => '120100',
                'name' => '天津市',
                'provincecode' => '120000',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => '130100',
                'name' => '石家庄市',
                'provincecode' => '130000',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => '130200',
                'name' => '唐山市',
                'provincecode' => '130000',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => '130300',
                'name' => '秦皇岛市',
                'provincecode' => '130000',
            ),
            5 => 
            array (
                'id' => 6,
                'code' => '130400',
                'name' => '邯郸市',
                'provincecode' => '130000',
            ),
            6 => 
            array (
                'id' => 7,
                'code' => '130500',
                'name' => '邢台市',
                'provincecode' => '130000',
            ),
            7 => 
            array (
                'id' => 8,
                'code' => '130600',
                'name' => '保定市',
                'provincecode' => '130000',
            ),
            8 => 
            array (
                'id' => 9,
                'code' => '130700',
                'name' => '张家口市',
                'provincecode' => '130000',
            ),
            9 => 
            array (
                'id' => 10,
                'code' => '130800',
                'name' => '承德市',
                'provincecode' => '130000',
            ),
            10 => 
            array (
                'id' => 11,
                'code' => '130900',
                'name' => '沧州市',
                'provincecode' => '130000',
            ),
            11 => 
            array (
                'id' => 12,
                'code' => '131000',
                'name' => '廊坊市',
                'provincecode' => '130000',
            ),
            12 => 
            array (
                'id' => 13,
                'code' => '131100',
                'name' => '衡水市',
                'provincecode' => '130000',
            ),
            13 => 
            array (
                'id' => 14,
                'code' => '140100',
                'name' => '太原市',
                'provincecode' => '140000',
            ),
            14 => 
            array (
                'id' => 15,
                'code' => '140200',
                'name' => '大同市',
                'provincecode' => '140000',
            ),
            15 => 
            array (
                'id' => 16,
                'code' => '140300',
                'name' => '阳泉市',
                'provincecode' => '140000',
            ),
            16 => 
            array (
                'id' => 17,
                'code' => '140400',
                'name' => '长治市',
                'provincecode' => '140000',
            ),
            17 => 
            array (
                'id' => 18,
                'code' => '140500',
                'name' => '晋城市',
                'provincecode' => '140000',
            ),
            18 => 
            array (
                'id' => 19,
                'code' => '140600',
                'name' => '朔州市',
                'provincecode' => '140000',
            ),
            19 => 
            array (
                'id' => 20,
                'code' => '140700',
                'name' => '晋中市',
                'provincecode' => '140000',
            ),
            20 => 
            array (
                'id' => 21,
                'code' => '140800',
                'name' => '运城市',
                'provincecode' => '140000',
            ),
            21 => 
            array (
                'id' => 22,
                'code' => '140900',
                'name' => '忻州市',
                'provincecode' => '140000',
            ),
            22 => 
            array (
                'id' => 23,
                'code' => '141000',
                'name' => '临汾市',
                'provincecode' => '140000',
            ),
            23 => 
            array (
                'id' => 24,
                'code' => '141100',
                'name' => '吕梁市',
                'provincecode' => '140000',
            ),
            24 => 
            array (
                'id' => 25,
                'code' => '150100',
                'name' => '呼和浩特市',
                'provincecode' => '150000',
            ),
            25 => 
            array (
                'id' => 26,
                'code' => '150200',
                'name' => '包头市',
                'provincecode' => '150000',
            ),
            26 => 
            array (
                'id' => 27,
                'code' => '150300',
                'name' => '乌海市',
                'provincecode' => '150000',
            ),
            27 => 
            array (
                'id' => 28,
                'code' => '150400',
                'name' => '赤峰市',
                'provincecode' => '150000',
            ),
            28 => 
            array (
                'id' => 29,
                'code' => '150500',
                'name' => '通辽市',
                'provincecode' => '150000',
            ),
            29 => 
            array (
                'id' => 30,
                'code' => '150600',
                'name' => '鄂尔多斯市',
                'provincecode' => '150000',
            ),
            30 => 
            array (
                'id' => 31,
                'code' => '150700',
                'name' => '呼伦贝尔市',
                'provincecode' => '150000',
            ),
            31 => 
            array (
                'id' => 32,
                'code' => '150800',
                'name' => '巴彦淖尔市',
                'provincecode' => '150000',
            ),
            32 => 
            array (
                'id' => 33,
                'code' => '150900',
                'name' => '乌兰察布市',
                'provincecode' => '150000',
            ),
            33 => 
            array (
                'id' => 34,
                'code' => '152200',
                'name' => '兴安盟',
                'provincecode' => '150000',
            ),
            34 => 
            array (
                'id' => 35,
                'code' => '152500',
                'name' => '锡林郭勒盟',
                'provincecode' => '150000',
            ),
            35 => 
            array (
                'id' => 36,
                'code' => '152900',
                'name' => '阿拉善盟',
                'provincecode' => '150000',
            ),
            36 => 
            array (
                'id' => 38,
                'code' => '110200',
                'name' => '大连市',
                'provincecode' => '210000',
            ),
            37 => 
            array (
                'id' => 39,
                'code' => '110300',
                'name' => '鞍山市',
                'provincecode' => '210000',
            ),
            38 => 
            array (
                'id' => 40,
                'code' => '110400',
                'name' => '抚顺市',
                'provincecode' => '210000',
            ),
            39 => 
            array (
                'id' => 41,
                'code' => '110500',
                'name' => '本溪市',
                'provincecode' => '210000',
            ),
            40 => 
            array (
                'id' => 42,
                'code' => '110600',
                'name' => '丹东市',
                'provincecode' => '210000',
            ),
            41 => 
            array (
                'id' => 43,
                'code' => '110700',
                'name' => '锦州市',
                'provincecode' => '210000',
            ),
            42 => 
            array (
                'id' => 44,
                'code' => '110800',
                'name' => '营口市',
                'provincecode' => '210000',
            ),
            43 => 
            array (
                'id' => 45,
                'code' => '110900',
                'name' => '阜新市',
                'provincecode' => '210000',
            ),
            44 => 
            array (
                'id' => 46,
                'code' => '111000',
                'name' => '辽阳市',
                'provincecode' => '210000',
            ),
            45 => 
            array (
                'id' => 47,
                'code' => '111100',
                'name' => '盘锦市',
                'provincecode' => '210000',
            ),
            46 => 
            array (
                'id' => 48,
                'code' => '111200',
                'name' => '铁岭市',
                'provincecode' => '210000',
            ),
            47 => 
            array (
                'id' => 49,
                'code' => '111300',
                'name' => '朝阳市',
                'provincecode' => '210000',
            ),
            48 => 
            array (
                'id' => 50,
                'code' => '111400',
                'name' => '葫芦岛市',
                'provincecode' => '210000',
            ),
            49 => 
            array (
                'id' => 51,
                'code' => '111500',
                'name' => '金普新区',
                'provincecode' => '210000',
            ),
            50 => 
            array (
                'id' => 53,
                'code' => '120200',
                'name' => '吉林市',
                'provincecode' => '220000',
            ),
            51 => 
            array (
                'id' => 54,
                'code' => '120300',
                'name' => '四平市',
                'provincecode' => '220000',
            ),
            52 => 
            array (
                'id' => 55,
                'code' => '120400',
                'name' => '辽源市',
                'provincecode' => '220000',
            ),
            53 => 
            array (
                'id' => 56,
                'code' => '120500',
                'name' => '通化市',
                'provincecode' => '220000',
            ),
            54 => 
            array (
                'id' => 57,
                'code' => '120600',
                'name' => '白山市',
                'provincecode' => '220000',
            ),
            55 => 
            array (
                'id' => 58,
                'code' => '120700',
                'name' => '松原市',
                'provincecode' => '220000',
            ),
            56 => 
            array (
                'id' => 59,
                'code' => '120800',
                'name' => '白城市',
                'provincecode' => '220000',
            ),
            57 => 
            array (
                'id' => 60,
                'code' => '122400',
                'name' => '延边朝鲜族自治州',
                'provincecode' => '220000',
            ),
            58 => 
            array (
                'id' => 72,
                'code' => '131200',
                'name' => '绥化市',
                'provincecode' => '230000',
            ),
            59 => 
            array (
                'id' => 73,
                'code' => '132700',
                'name' => '大兴安岭地区',
                'provincecode' => '230000',
            ),
            60 => 
            array (
                'id' => 83,
                'code' => '120900',
                'name' => '盐城市',
                'provincecode' => '320000',
            ),
            61 => 
            array (
                'id' => 84,
                'code' => '121000',
                'name' => '扬州市',
                'provincecode' => '320000',
            ),
            62 => 
            array (
                'id' => 85,
                'code' => '121100',
                'name' => '镇江市',
                'provincecode' => '320000',
            ),
            63 => 
            array (
                'id' => 86,
                'code' => '121200',
                'name' => '泰州市',
                'provincecode' => '320000',
            ),
            64 => 
            array (
                'id' => 87,
                'code' => '121300',
                'name' => '宿迁市',
                'provincecode' => '320000',
            ),
            65 => 
            array (
                'id' => 94,
                'code' => '330700',
                'name' => '金华市',
                'provincecode' => '330000',
            ),
            66 => 
            array (
                'id' => 95,
                'code' => '330800',
                'name' => '衢州市',
                'provincecode' => '330000',
            ),
            67 => 
            array (
                'id' => 96,
                'code' => '330900',
                'name' => '舟山市',
                'provincecode' => '330000',
            ),
            68 => 
            array (
                'id' => 97,
                'code' => '331000',
                'name' => '台州市',
                'provincecode' => '330000',
            ),
            69 => 
            array (
                'id' => 98,
                'code' => '331100',
                'name' => '丽水市',
                'provincecode' => '330000',
            ),
            70 => 
            array (
                'id' => 99,
                'code' => '331200',
                'name' => '舟山群岛新区',
                'provincecode' => '330000',
            ),
            71 => 
            array (
                'id' => 100,
                'code' => '340100',
                'name' => '合肥市',
                'provincecode' => '340000',
            ),
            72 => 
            array (
                'id' => 101,
                'code' => '340200',
                'name' => '芜湖市',
                'provincecode' => '340000',
            ),
            73 => 
            array (
                'id' => 102,
                'code' => '340300',
                'name' => '蚌埠市',
                'provincecode' => '340000',
            ),
            74 => 
            array (
                'id' => 103,
                'code' => '340400',
                'name' => '淮南市',
                'provincecode' => '340000',
            ),
            75 => 
            array (
                'id' => 104,
                'code' => '340500',
                'name' => '马鞍山市',
                'provincecode' => '340000',
            ),
            76 => 
            array (
                'id' => 105,
                'code' => '340600',
                'name' => '淮北市',
                'provincecode' => '340000',
            ),
            77 => 
            array (
                'id' => 106,
                'code' => '340700',
                'name' => '铜陵市',
                'provincecode' => '340000',
            ),
            78 => 
            array (
                'id' => 107,
                'code' => '340800',
                'name' => '安庆市',
                'provincecode' => '340000',
            ),
            79 => 
            array (
                'id' => 108,
                'code' => '341000',
                'name' => '黄山市',
                'provincecode' => '340000',
            ),
            80 => 
            array (
                'id' => 109,
                'code' => '341100',
                'name' => '滁州市',
                'provincecode' => '340000',
            ),
            81 => 
            array (
                'id' => 110,
                'code' => '341200',
                'name' => '阜阳市',
                'provincecode' => '340000',
            ),
            82 => 
            array (
                'id' => 111,
                'code' => '341300',
                'name' => '宿州市',
                'provincecode' => '340000',
            ),
            83 => 
            array (
                'id' => 112,
                'code' => '341500',
                'name' => '六安市',
                'provincecode' => '340000',
            ),
            84 => 
            array (
                'id' => 113,
                'code' => '341600',
                'name' => '亳州市',
                'provincecode' => '340000',
            ),
            85 => 
            array (
                'id' => 114,
                'code' => '341700',
                'name' => '池州市',
                'provincecode' => '340000',
            ),
            86 => 
            array (
                'id' => 115,
                'code' => '341800',
                'name' => '宣城市',
                'provincecode' => '340000',
            ),
            87 => 
            array (
                'id' => 116,
                'code' => '350100',
                'name' => '福州市',
                'provincecode' => '350000',
            ),
            88 => 
            array (
                'id' => 117,
                'code' => '350200',
                'name' => '厦门市',
                'provincecode' => '350000',
            ),
            89 => 
            array (
                'id' => 118,
                'code' => '350300',
                'name' => '莆田市',
                'provincecode' => '350000',
            ),
            90 => 
            array (
                'id' => 119,
                'code' => '350400',
                'name' => '三明市',
                'provincecode' => '350000',
            ),
            91 => 
            array (
                'id' => 120,
                'code' => '350500',
                'name' => '泉州市',
                'provincecode' => '350000',
            ),
            92 => 
            array (
                'id' => 121,
                'code' => '350600',
                'name' => '漳州市',
                'provincecode' => '350000',
            ),
            93 => 
            array (
                'id' => 122,
                'code' => '350700',
                'name' => '南平市',
                'provincecode' => '350000',
            ),
            94 => 
            array (
                'id' => 123,
                'code' => '350800',
                'name' => '龙岩市',
                'provincecode' => '350000',
            ),
            95 => 
            array (
                'id' => 124,
                'code' => '350900',
                'name' => '宁德市',
                'provincecode' => '350000',
            ),
            96 => 
            array (
                'id' => 125,
                'code' => '360100',
                'name' => '南昌市',
                'provincecode' => '360000',
            ),
            97 => 
            array (
                'id' => 126,
                'code' => '360200',
                'name' => '景德镇市',
                'provincecode' => '360000',
            ),
            98 => 
            array (
                'id' => 127,
                'code' => '360300',
                'name' => '萍乡市',
                'provincecode' => '360000',
            ),
            99 => 
            array (
                'id' => 128,
                'code' => '360400',
                'name' => '九江市',
                'provincecode' => '360000',
            ),
            100 => 
            array (
                'id' => 129,
                'code' => '360500',
                'name' => '新余市',
                'provincecode' => '360000',
            ),
            101 => 
            array (
                'id' => 130,
                'code' => '360600',
                'name' => '鹰潭市',
                'provincecode' => '360000',
            ),
            102 => 
            array (
                'id' => 131,
                'code' => '360700',
                'name' => '赣州市',
                'provincecode' => '360000',
            ),
            103 => 
            array (
                'id' => 132,
                'code' => '360800',
                'name' => '吉安市',
                'provincecode' => '360000',
            ),
            104 => 
            array (
                'id' => 133,
                'code' => '360900',
                'name' => '宜春市',
                'provincecode' => '360000',
            ),
            105 => 
            array (
                'id' => 134,
                'code' => '361000',
                'name' => '抚州市',
                'provincecode' => '360000',
            ),
            106 => 
            array (
                'id' => 135,
                'code' => '361100',
                'name' => '上饶市',
                'provincecode' => '360000',
            ),
            107 => 
            array (
                'id' => 136,
                'code' => '370100',
                'name' => '济南市',
                'provincecode' => '370000',
            ),
            108 => 
            array (
                'id' => 137,
                'code' => '370200',
                'name' => '青岛市',
                'provincecode' => '370000',
            ),
            109 => 
            array (
                'id' => 138,
                'code' => '370300',
                'name' => '淄博市',
                'provincecode' => '370000',
            ),
            110 => 
            array (
                'id' => 139,
                'code' => '370400',
                'name' => '枣庄市',
                'provincecode' => '370000',
            ),
            111 => 
            array (
                'id' => 140,
                'code' => '370500',
                'name' => '东营市',
                'provincecode' => '370000',
            ),
            112 => 
            array (
                'id' => 141,
                'code' => '370600',
                'name' => '烟台市',
                'provincecode' => '370000',
            ),
            113 => 
            array (
                'id' => 142,
                'code' => '370700',
                'name' => '潍坊市',
                'provincecode' => '370000',
            ),
            114 => 
            array (
                'id' => 143,
                'code' => '370800',
                'name' => '济宁市',
                'provincecode' => '370000',
            ),
            115 => 
            array (
                'id' => 144,
                'code' => '370900',
                'name' => '泰安市',
                'provincecode' => '370000',
            ),
            116 => 
            array (
                'id' => 145,
                'code' => '371000',
                'name' => '威海市',
                'provincecode' => '370000',
            ),
            117 => 
            array (
                'id' => 146,
                'code' => '371100',
                'name' => '日照市',
                'provincecode' => '370000',
            ),
            118 => 
            array (
                'id' => 147,
                'code' => '371200',
                'name' => '莱芜市',
                'provincecode' => '370000',
            ),
            119 => 
            array (
                'id' => 148,
                'code' => '371300',
                'name' => '临沂市',
                'provincecode' => '370000',
            ),
            120 => 
            array (
                'id' => 149,
                'code' => '371400',
                'name' => '德州市',
                'provincecode' => '370000',
            ),
            121 => 
            array (
                'id' => 150,
                'code' => '371500',
                'name' => '聊城市',
                'provincecode' => '370000',
            ),
            122 => 
            array (
                'id' => 151,
                'code' => '371600',
                'name' => '滨州市',
                'provincecode' => '370000',
            ),
            123 => 
            array (
                'id' => 152,
                'code' => '371700',
                'name' => '菏泽市',
                'provincecode' => '370000',
            ),
            124 => 
            array (
                'id' => 153,
                'code' => '410100',
                'name' => '郑州市',
                'provincecode' => '410000',
            ),
            125 => 
            array (
                'id' => 154,
                'code' => '410200',
                'name' => '开封市',
                'provincecode' => '410000',
            ),
            126 => 
            array (
                'id' => 155,
                'code' => '410300',
                'name' => '洛阳市',
                'provincecode' => '410000',
            ),
            127 => 
            array (
                'id' => 156,
                'code' => '410400',
                'name' => '平顶山市',
                'provincecode' => '410000',
            ),
            128 => 
            array (
                'id' => 157,
                'code' => '410500',
                'name' => '安阳市',
                'provincecode' => '410000',
            ),
            129 => 
            array (
                'id' => 158,
                'code' => '410600',
                'name' => '鹤壁市',
                'provincecode' => '410000',
            ),
            130 => 
            array (
                'id' => 159,
                'code' => '410700',
                'name' => '新乡市',
                'provincecode' => '410000',
            ),
            131 => 
            array (
                'id' => 160,
                'code' => '410800',
                'name' => '焦作市',
                'provincecode' => '410000',
            ),
            132 => 
            array (
                'id' => 161,
                'code' => '410900',
                'name' => '濮阳市',
                'provincecode' => '410000',
            ),
            133 => 
            array (
                'id' => 162,
                'code' => '411000',
                'name' => '许昌市',
                'provincecode' => '410000',
            ),
            134 => 
            array (
                'id' => 163,
                'code' => '411100',
                'name' => '漯河市',
                'provincecode' => '410000',
            ),
            135 => 
            array (
                'id' => 164,
                'code' => '411200',
                'name' => '三门峡市',
                'provincecode' => '410000',
            ),
            136 => 
            array (
                'id' => 165,
                'code' => '411300',
                'name' => '南阳市',
                'provincecode' => '410000',
            ),
            137 => 
            array (
                'id' => 166,
                'code' => '411400',
                'name' => '商丘市',
                'provincecode' => '410000',
            ),
            138 => 
            array (
                'id' => 167,
                'code' => '411500',
                'name' => '信阳市',
                'provincecode' => '410000',
            ),
            139 => 
            array (
                'id' => 168,
                'code' => '411600',
                'name' => '周口市',
                'provincecode' => '410000',
            ),
            140 => 
            array (
                'id' => 169,
                'code' => '411700',
                'name' => '驻马店市',
                'provincecode' => '410000',
            ),
            141 => 
            array (
                'id' => 170,
                'code' => '419000',
                'name' => '直辖县级',
                'provincecode' => '410000',
            ),
            142 => 
            array (
                'id' => 171,
                'code' => '420100',
                'name' => '武汉市',
                'provincecode' => '420000',
            ),
            143 => 
            array (
                'id' => 172,
                'code' => '420200',
                'name' => '黄石市',
                'provincecode' => '420000',
            ),
            144 => 
            array (
                'id' => 173,
                'code' => '420300',
                'name' => '十堰市',
                'provincecode' => '420000',
            ),
            145 => 
            array (
                'id' => 174,
                'code' => '420500',
                'name' => '宜昌市',
                'provincecode' => '420000',
            ),
            146 => 
            array (
                'id' => 175,
                'code' => '420600',
                'name' => '襄阳市',
                'provincecode' => '420000',
            ),
            147 => 
            array (
                'id' => 176,
                'code' => '420700',
                'name' => '鄂州市',
                'provincecode' => '420000',
            ),
            148 => 
            array (
                'id' => 177,
                'code' => '420800',
                'name' => '荆门市',
                'provincecode' => '420000',
            ),
            149 => 
            array (
                'id' => 178,
                'code' => '420900',
                'name' => '孝感市',
                'provincecode' => '420000',
            ),
            150 => 
            array (
                'id' => 179,
                'code' => '421000',
                'name' => '荆州市',
                'provincecode' => '420000',
            ),
            151 => 
            array (
                'id' => 180,
                'code' => '421100',
                'name' => '黄冈市',
                'provincecode' => '420000',
            ),
            152 => 
            array (
                'id' => 181,
                'code' => '421200',
                'name' => '咸宁市',
                'provincecode' => '420000',
            ),
            153 => 
            array (
                'id' => 182,
                'code' => '421300',
                'name' => '随州市',
                'provincecode' => '420000',
            ),
            154 => 
            array (
                'id' => 183,
                'code' => '422800',
                'name' => '恩施土家族苗族自治州',
                'provincecode' => '420000',
            ),
            155 => 
            array (
                'id' => 184,
                'code' => '429000',
                'name' => '直辖县级',
                'provincecode' => '420000',
            ),
            156 => 
            array (
                'id' => 185,
                'code' => '430100',
                'name' => '长沙市',
                'provincecode' => '430000',
            ),
            157 => 
            array (
                'id' => 186,
                'code' => '430200',
                'name' => '株洲市',
                'provincecode' => '430000',
            ),
            158 => 
            array (
                'id' => 187,
                'code' => '430300',
                'name' => '湘潭市',
                'provincecode' => '430000',
            ),
            159 => 
            array (
                'id' => 188,
                'code' => '430400',
                'name' => '衡阳市',
                'provincecode' => '430000',
            ),
            160 => 
            array (
                'id' => 189,
                'code' => '430500',
                'name' => '邵阳市',
                'provincecode' => '430000',
            ),
            161 => 
            array (
                'id' => 190,
                'code' => '430600',
                'name' => '岳阳市',
                'provincecode' => '430000',
            ),
            162 => 
            array (
                'id' => 191,
                'code' => '430700',
                'name' => '常德市',
                'provincecode' => '430000',
            ),
            163 => 
            array (
                'id' => 192,
                'code' => '430800',
                'name' => '张家界市',
                'provincecode' => '430000',
            ),
            164 => 
            array (
                'id' => 193,
                'code' => '430900',
                'name' => '益阳市',
                'provincecode' => '430000',
            ),
            165 => 
            array (
                'id' => 194,
                'code' => '431000',
                'name' => '郴州市',
                'provincecode' => '430000',
            ),
            166 => 
            array (
                'id' => 195,
                'code' => '431100',
                'name' => '永州市',
                'provincecode' => '430000',
            ),
            167 => 
            array (
                'id' => 196,
                'code' => '431200',
                'name' => '怀化市',
                'provincecode' => '430000',
            ),
            168 => 
            array (
                'id' => 197,
                'code' => '431300',
                'name' => '娄底市',
                'provincecode' => '430000',
            ),
            169 => 
            array (
                'id' => 198,
                'code' => '433100',
                'name' => '湘西土家族苗族自治州',
                'provincecode' => '430000',
            ),
            170 => 
            array (
                'id' => 199,
                'code' => '440100',
                'name' => '广州市',
                'provincecode' => '440000',
            ),
            171 => 
            array (
                'id' => 200,
                'code' => '440200',
                'name' => '韶关市',
                'provincecode' => '440000',
            ),
            172 => 
            array (
                'id' => 201,
                'code' => '440300',
                'name' => '深圳市',
                'provincecode' => '440000',
            ),
            173 => 
            array (
                'id' => 202,
                'code' => '440400',
                'name' => '珠海市',
                'provincecode' => '440000',
            ),
            174 => 
            array (
                'id' => 203,
                'code' => '440500',
                'name' => '汕头市',
                'provincecode' => '440000',
            ),
            175 => 
            array (
                'id' => 204,
                'code' => '440600',
                'name' => '佛山市',
                'provincecode' => '440000',
            ),
            176 => 
            array (
                'id' => 205,
                'code' => '440700',
                'name' => '江门市',
                'provincecode' => '440000',
            ),
            177 => 
            array (
                'id' => 206,
                'code' => '440800',
                'name' => '湛江市',
                'provincecode' => '440000',
            ),
            178 => 
            array (
                'id' => 207,
                'code' => '440900',
                'name' => '茂名市',
                'provincecode' => '440000',
            ),
            179 => 
            array (
                'id' => 208,
                'code' => '441200',
                'name' => '肇庆市',
                'provincecode' => '440000',
            ),
            180 => 
            array (
                'id' => 209,
                'code' => '441300',
                'name' => '惠州市',
                'provincecode' => '440000',
            ),
            181 => 
            array (
                'id' => 210,
                'code' => '441400',
                'name' => '梅州市',
                'provincecode' => '440000',
            ),
            182 => 
            array (
                'id' => 211,
                'code' => '441500',
                'name' => '汕尾市',
                'provincecode' => '440000',
            ),
            183 => 
            array (
                'id' => 212,
                'code' => '441600',
                'name' => '河源市',
                'provincecode' => '440000',
            ),
            184 => 
            array (
                'id' => 213,
                'code' => '441700',
                'name' => '阳江市',
                'provincecode' => '440000',
            ),
            185 => 
            array (
                'id' => 214,
                'code' => '441800',
                'name' => '清远市',
                'provincecode' => '440000',
            ),
            186 => 
            array (
                'id' => 215,
                'code' => '441900',
                'name' => '东莞市',
                'provincecode' => '440000',
            ),
            187 => 
            array (
                'id' => 216,
                'code' => '442000',
                'name' => '中山市',
                'provincecode' => '440000',
            ),
            188 => 
            array (
                'id' => 217,
                'code' => '445100',
                'name' => '潮州市',
                'provincecode' => '440000',
            ),
            189 => 
            array (
                'id' => 218,
                'code' => '445200',
                'name' => '揭阳市',
                'provincecode' => '440000',
            ),
            190 => 
            array (
                'id' => 219,
                'code' => '445300',
                'name' => '云浮市',
                'provincecode' => '440000',
            ),
            191 => 
            array (
                'id' => 220,
                'code' => '450100',
                'name' => '南宁市',
                'provincecode' => '450000',
            ),
            192 => 
            array (
                'id' => 221,
                'code' => '450200',
                'name' => '柳州市',
                'provincecode' => '450000',
            ),
            193 => 
            array (
                'id' => 222,
                'code' => '450300',
                'name' => '桂林市',
                'provincecode' => '450000',
            ),
            194 => 
            array (
                'id' => 223,
                'code' => '450400',
                'name' => '梧州市',
                'provincecode' => '450000',
            ),
            195 => 
            array (
                'id' => 224,
                'code' => '450500',
                'name' => '北海市',
                'provincecode' => '450000',
            ),
            196 => 
            array (
                'id' => 225,
                'code' => '450600',
                'name' => '防城港市',
                'provincecode' => '450000',
            ),
            197 => 
            array (
                'id' => 226,
                'code' => '450700',
                'name' => '钦州市',
                'provincecode' => '450000',
            ),
            198 => 
            array (
                'id' => 227,
                'code' => '450800',
                'name' => '贵港市',
                'provincecode' => '450000',
            ),
            199 => 
            array (
                'id' => 228,
                'code' => '450900',
                'name' => '玉林市',
                'provincecode' => '450000',
            ),
            200 => 
            array (
                'id' => 229,
                'code' => '451000',
                'name' => '百色市',
                'provincecode' => '450000',
            ),
            201 => 
            array (
                'id' => 230,
                'code' => '451100',
                'name' => '贺州市',
                'provincecode' => '450000',
            ),
            202 => 
            array (
                'id' => 231,
                'code' => '451200',
                'name' => '河池市',
                'provincecode' => '450000',
            ),
            203 => 
            array (
                'id' => 232,
                'code' => '451300',
                'name' => '来宾市',
                'provincecode' => '450000',
            ),
            204 => 
            array (
                'id' => 233,
                'code' => '451400',
                'name' => '崇左市',
                'provincecode' => '450000',
            ),
            205 => 
            array (
                'id' => 234,
                'code' => '460100',
                'name' => '海口市',
                'provincecode' => '460000',
            ),
            206 => 
            array (
                'id' => 235,
                'code' => '460200',
                'name' => '三亚市',
                'provincecode' => '460000',
            ),
            207 => 
            array (
                'id' => 236,
                'code' => '460300',
                'name' => '三沙市',
                'provincecode' => '460000',
            ),
            208 => 
            array (
                'id' => 237,
                'code' => '460400',
                'name' => '儋州市',
                'provincecode' => '460000',
            ),
            209 => 
            array (
                'id' => 238,
                'code' => '469000',
                'name' => '直辖县级',
                'provincecode' => '460000',
            ),
            210 => 
            array (
                'id' => 239,
                'code' => '500100',
                'name' => '重庆市',
                'provincecode' => '500000',
            ),
            211 => 
            array (
                'id' => 240,
                'code' => '500300',
                'name' => '两江新区',
                'provincecode' => '500000',
            ),
            212 => 
            array (
                'id' => 241,
                'code' => '510100',
                'name' => '成都市',
                'provincecode' => '510000',
            ),
            213 => 
            array (
                'id' => 242,
                'code' => '510300',
                'name' => '自贡市',
                'provincecode' => '510000',
            ),
            214 => 
            array (
                'id' => 243,
                'code' => '510400',
                'name' => '攀枝花市',
                'provincecode' => '510000',
            ),
            215 => 
            array (
                'id' => 244,
                'code' => '510500',
                'name' => '泸州市',
                'provincecode' => '510000',
            ),
            216 => 
            array (
                'id' => 245,
                'code' => '510600',
                'name' => '德阳市',
                'provincecode' => '510000',
            ),
            217 => 
            array (
                'id' => 246,
                'code' => '510700',
                'name' => '绵阳市',
                'provincecode' => '510000',
            ),
            218 => 
            array (
                'id' => 247,
                'code' => '510800',
                'name' => '广元市',
                'provincecode' => '510000',
            ),
            219 => 
            array (
                'id' => 248,
                'code' => '510900',
                'name' => '遂宁市',
                'provincecode' => '510000',
            ),
            220 => 
            array (
                'id' => 249,
                'code' => '511000',
                'name' => '内江市',
                'provincecode' => '510000',
            ),
            221 => 
            array (
                'id' => 250,
                'code' => '511100',
                'name' => '乐山市',
                'provincecode' => '510000',
            ),
            222 => 
            array (
                'id' => 251,
                'code' => '511300',
                'name' => '南充市',
                'provincecode' => '510000',
            ),
            223 => 
            array (
                'id' => 252,
                'code' => '511400',
                'name' => '眉山市',
                'provincecode' => '510000',
            ),
            224 => 
            array (
                'id' => 253,
                'code' => '511500',
                'name' => '宜宾市',
                'provincecode' => '510000',
            ),
            225 => 
            array (
                'id' => 254,
                'code' => '511600',
                'name' => '广安市',
                'provincecode' => '510000',
            ),
            226 => 
            array (
                'id' => 255,
                'code' => '511700',
                'name' => '达州市',
                'provincecode' => '510000',
            ),
            227 => 
            array (
                'id' => 256,
                'code' => '511800',
                'name' => '雅安市',
                'provincecode' => '510000',
            ),
            228 => 
            array (
                'id' => 257,
                'code' => '511900',
                'name' => '巴中市',
                'provincecode' => '510000',
            ),
            229 => 
            array (
                'id' => 258,
                'code' => '512000',
                'name' => '资阳市',
                'provincecode' => '510000',
            ),
            230 => 
            array (
                'id' => 259,
                'code' => '513200',
                'name' => '阿坝藏族羌族自治州',
                'provincecode' => '510000',
            ),
            231 => 
            array (
                'id' => 260,
                'code' => '513300',
                'name' => '甘孜藏族自治州',
                'provincecode' => '510000',
            ),
            232 => 
            array (
                'id' => 261,
                'code' => '513400',
                'name' => '凉山彝族自治州',
                'provincecode' => '510000',
            ),
            233 => 
            array (
                'id' => 262,
                'code' => '520100',
                'name' => '贵阳市',
                'provincecode' => '520000',
            ),
            234 => 
            array (
                'id' => 263,
                'code' => '520200',
                'name' => '六盘水市',
                'provincecode' => '520000',
            ),
            235 => 
            array (
                'id' => 264,
                'code' => '520300',
                'name' => '遵义市',
                'provincecode' => '520000',
            ),
            236 => 
            array (
                'id' => 265,
                'code' => '520400',
                'name' => '安顺市',
                'provincecode' => '520000',
            ),
            237 => 
            array (
                'id' => 266,
                'code' => '520500',
                'name' => '毕节市',
                'provincecode' => '520000',
            ),
            238 => 
            array (
                'id' => 267,
                'code' => '520600',
                'name' => '铜仁市',
                'provincecode' => '520000',
            ),
            239 => 
            array (
                'id' => 268,
                'code' => '522300',
                'name' => '黔西南布依族苗族自治州',
                'provincecode' => '520000',
            ),
            240 => 
            array (
                'id' => 269,
                'code' => '522600',
                'name' => '黔东南苗族侗族自治州',
                'provincecode' => '520000',
            ),
            241 => 
            array (
                'id' => 270,
                'code' => '522700',
                'name' => '黔南布依族苗族自治州',
                'provincecode' => '520000',
            ),
            242 => 
            array (
                'id' => 271,
                'code' => '530100',
                'name' => '昆明市',
                'provincecode' => '530000',
            ),
            243 => 
            array (
                'id' => 272,
                'code' => '530300',
                'name' => '曲靖市',
                'provincecode' => '530000',
            ),
            244 => 
            array (
                'id' => 273,
                'code' => '530400',
                'name' => '玉溪市',
                'provincecode' => '530000',
            ),
            245 => 
            array (
                'id' => 274,
                'code' => '530500',
                'name' => '保山市',
                'provincecode' => '530000',
            ),
            246 => 
            array (
                'id' => 275,
                'code' => '530600',
                'name' => '昭通市',
                'provincecode' => '530000',
            ),
            247 => 
            array (
                'id' => 276,
                'code' => '530700',
                'name' => '丽江市',
                'provincecode' => '530000',
            ),
            248 => 
            array (
                'id' => 277,
                'code' => '530800',
                'name' => '普洱市',
                'provincecode' => '530000',
            ),
            249 => 
            array (
                'id' => 278,
                'code' => '530900',
                'name' => '临沧市',
                'provincecode' => '530000',
            ),
            250 => 
            array (
                'id' => 279,
                'code' => '532300',
                'name' => '楚雄彝族自治州',
                'provincecode' => '530000',
            ),
            251 => 
            array (
                'id' => 280,
                'code' => '532500',
                'name' => '红河哈尼族彝族自治州',
                'provincecode' => '530000',
            ),
            252 => 
            array (
                'id' => 281,
                'code' => '532600',
                'name' => '文山壮族苗族自治州',
                'provincecode' => '530000',
            ),
            253 => 
            array (
                'id' => 282,
                'code' => '532800',
                'name' => '西双版纳傣族自治州',
                'provincecode' => '530000',
            ),
            254 => 
            array (
                'id' => 283,
                'code' => '532900',
                'name' => '大理白族自治州',
                'provincecode' => '530000',
            ),
            255 => 
            array (
                'id' => 284,
                'code' => '533100',
                'name' => '德宏傣族景颇族自治州',
                'provincecode' => '530000',
            ),
            256 => 
            array (
                'id' => 285,
                'code' => '533300',
                'name' => '怒江傈僳族自治州',
                'provincecode' => '530000',
            ),
            257 => 
            array (
                'id' => 286,
                'code' => '533400',
                'name' => '迪庆藏族自治州',
                'provincecode' => '530000',
            ),
            258 => 
            array (
                'id' => 287,
                'code' => '540100',
                'name' => '拉萨市',
                'provincecode' => '540000',
            ),
            259 => 
            array (
                'id' => 288,
                'code' => '540200',
                'name' => '日喀则市',
                'provincecode' => '540000',
            ),
            260 => 
            array (
                'id' => 289,
                'code' => '540300',
                'name' => '昌都市',
                'provincecode' => '540000',
            ),
            261 => 
            array (
                'id' => 290,
                'code' => '540400',
                'name' => '林芝市',
                'provincecode' => '540000',
            ),
            262 => 
            array (
                'id' => 291,
                'code' => '542200',
                'name' => '山南地区',
                'provincecode' => '540000',
            ),
            263 => 
            array (
                'id' => 292,
                'code' => '542400',
                'name' => '那曲地区',
                'provincecode' => '540000',
            ),
            264 => 
            array (
                'id' => 293,
                'code' => '542500',
                'name' => '阿里地区',
                'provincecode' => '540000',
            ),
            265 => 
            array (
                'id' => 294,
                'code' => '610100',
                'name' => '西安市',
                'provincecode' => '610000',
            ),
            266 => 
            array (
                'id' => 295,
                'code' => '610200',
                'name' => '铜川市',
                'provincecode' => '610000',
            ),
            267 => 
            array (
                'id' => 296,
                'code' => '610300',
                'name' => '宝鸡市',
                'provincecode' => '610000',
            ),
            268 => 
            array (
                'id' => 297,
                'code' => '610400',
                'name' => '咸阳市',
                'provincecode' => '610000',
            ),
            269 => 
            array (
                'id' => 298,
                'code' => '610500',
                'name' => '渭南市',
                'provincecode' => '610000',
            ),
            270 => 
            array (
                'id' => 299,
                'code' => '610600',
                'name' => '延安市',
                'provincecode' => '610000',
            ),
            271 => 
            array (
                'id' => 300,
                'code' => '610700',
                'name' => '汉中市',
                'provincecode' => '610000',
            ),
            272 => 
            array (
                'id' => 301,
                'code' => '610800',
                'name' => '榆林市',
                'provincecode' => '610000',
            ),
            273 => 
            array (
                'id' => 302,
                'code' => '610900',
                'name' => '安康市',
                'provincecode' => '610000',
            ),
            274 => 
            array (
                'id' => 303,
                'code' => '611000',
                'name' => '商洛市',
                'provincecode' => '610000',
            ),
            275 => 
            array (
                'id' => 304,
                'code' => '611100',
                'name' => '西咸新区',
                'provincecode' => '610000',
            ),
            276 => 
            array (
                'id' => 305,
                'code' => '620100',
                'name' => '兰州市',
                'provincecode' => '620000',
            ),
            277 => 
            array (
                'id' => 306,
                'code' => '620200',
                'name' => '嘉峪关市',
                'provincecode' => '620000',
            ),
            278 => 
            array (
                'id' => 307,
                'code' => '620300',
                'name' => '金昌市',
                'provincecode' => '620000',
            ),
            279 => 
            array (
                'id' => 308,
                'code' => '620400',
                'name' => '白银市',
                'provincecode' => '620000',
            ),
            280 => 
            array (
                'id' => 309,
                'code' => '620500',
                'name' => '天水市',
                'provincecode' => '620000',
            ),
            281 => 
            array (
                'id' => 310,
                'code' => '620600',
                'name' => '武威市',
                'provincecode' => '620000',
            ),
            282 => 
            array (
                'id' => 311,
                'code' => '620700',
                'name' => '张掖市',
                'provincecode' => '620000',
            ),
            283 => 
            array (
                'id' => 312,
                'code' => '620800',
                'name' => '平凉市',
                'provincecode' => '620000',
            ),
            284 => 
            array (
                'id' => 313,
                'code' => '620900',
                'name' => '酒泉市',
                'provincecode' => '620000',
            ),
            285 => 
            array (
                'id' => 314,
                'code' => '621000',
                'name' => '庆阳市',
                'provincecode' => '620000',
            ),
            286 => 
            array (
                'id' => 315,
                'code' => '621100',
                'name' => '定西市',
                'provincecode' => '620000',
            ),
            287 => 
            array (
                'id' => 316,
                'code' => '621200',
                'name' => '陇南市',
                'provincecode' => '620000',
            ),
            288 => 
            array (
                'id' => 317,
                'code' => '622900',
                'name' => '临夏回族自治州',
                'provincecode' => '620000',
            ),
            289 => 
            array (
                'id' => 318,
                'code' => '623000',
                'name' => '甘南藏族自治州',
                'provincecode' => '620000',
            ),
            290 => 
            array (
                'id' => 319,
                'code' => '630100',
                'name' => '西宁市',
                'provincecode' => '630000',
            ),
            291 => 
            array (
                'id' => 320,
                'code' => '630200',
                'name' => '海东市',
                'provincecode' => '630000',
            ),
            292 => 
            array (
                'id' => 321,
                'code' => '632200',
                'name' => '海北藏族自治州',
                'provincecode' => '630000',
            ),
            293 => 
            array (
                'id' => 322,
                'code' => '632300',
                'name' => '黄南藏族自治州',
                'provincecode' => '630000',
            ),
            294 => 
            array (
                'id' => 323,
                'code' => '632500',
                'name' => '海南藏族自治州',
                'provincecode' => '630000',
            ),
            295 => 
            array (
                'id' => 324,
                'code' => '632600',
                'name' => '果洛藏族自治州',
                'provincecode' => '630000',
            ),
            296 => 
            array (
                'id' => 325,
                'code' => '632700',
                'name' => '玉树藏族自治州',
                'provincecode' => '630000',
            ),
            297 => 
            array (
                'id' => 326,
                'code' => '632800',
                'name' => '海西蒙古族藏族自治州',
                'provincecode' => '630000',
            ),
            298 => 
            array (
                'id' => 327,
                'code' => '640100',
                'name' => '银川市',
                'provincecode' => '640000',
            ),
            299 => 
            array (
                'id' => 328,
                'code' => '640200',
                'name' => '石嘴山市',
                'provincecode' => '640000',
            ),
            300 => 
            array (
                'id' => 329,
                'code' => '640300',
                'name' => '吴忠市',
                'provincecode' => '640000',
            ),
            301 => 
            array (
                'id' => 330,
                'code' => '640400',
                'name' => '固原市',
                'provincecode' => '640000',
            ),
            302 => 
            array (
                'id' => 331,
                'code' => '640500',
                'name' => '中卫市',
                'provincecode' => '640000',
            ),
            303 => 
            array (
                'id' => 332,
                'code' => '650100',
                'name' => '乌鲁木齐市',
                'provincecode' => '650000',
            ),
            304 => 
            array (
                'id' => 333,
                'code' => '650200',
                'name' => '克拉玛依市',
                'provincecode' => '650000',
            ),
            305 => 
            array (
                'id' => 334,
                'code' => '650400',
                'name' => '吐鲁番市',
                'provincecode' => '650000',
            ),
            306 => 
            array (
                'id' => 335,
                'code' => '652200',
                'name' => '哈密地区',
                'provincecode' => '650000',
            ),
            307 => 
            array (
                'id' => 336,
                'code' => '652300',
                'name' => '昌吉回族自治州',
                'provincecode' => '650000',
            ),
            308 => 
            array (
                'id' => 337,
                'code' => '652700',
                'name' => '博尔塔拉蒙古自治州',
                'provincecode' => '650000',
            ),
            309 => 
            array (
                'id' => 338,
                'code' => '652800',
                'name' => '巴音郭楞蒙古自治州',
                'provincecode' => '650000',
            ),
            310 => 
            array (
                'id' => 339,
                'code' => '652900',
                'name' => '阿克苏地区',
                'provincecode' => '650000',
            ),
            311 => 
            array (
                'id' => 340,
                'code' => '653000',
                'name' => '克孜勒苏柯尔克孜自治州',
                'provincecode' => '650000',
            ),
            312 => 
            array (
                'id' => 341,
                'code' => '653100',
                'name' => '喀什地区',
                'provincecode' => '650000',
            ),
            313 => 
            array (
                'id' => 342,
                'code' => '653200',
                'name' => '和田地区',
                'provincecode' => '650000',
            ),
            314 => 
            array (
                'id' => 343,
                'code' => '654000',
                'name' => '伊犁哈萨克自治州',
                'provincecode' => '650000',
            ),
            315 => 
            array (
                'id' => 344,
                'code' => '654200',
                'name' => '塔城地区',
                'provincecode' => '650000',
            ),
            316 => 
            array (
                'id' => 345,
                'code' => '654300',
                'name' => '阿勒泰地区',
                'provincecode' => '650000',
            ),
            317 => 
            array (
                'id' => 346,
                'code' => '659000',
                'name' => '直辖县级',
                'provincecode' => '650000',
            ),
            318 => 
            array (
                'id' => 347,
                'code' => '710100',
                'name' => '台北市',
                'provincecode' => '710000',
            ),
            319 => 
            array (
                'id' => 348,
                'code' => '710200',
                'name' => '高雄市',
                'provincecode' => '710000',
            ),
            320 => 
            array (
                'id' => 349,
                'code' => '710300',
                'name' => '基隆市',
                'provincecode' => '710000',
            ),
            321 => 
            array (
                'id' => 350,
                'code' => '710400',
                'name' => '台中市',
                'provincecode' => '710000',
            ),
            322 => 
            array (
                'id' => 351,
                'code' => '710500',
                'name' => '台南市',
                'provincecode' => '710000',
            ),
            323 => 
            array (
                'id' => 352,
                'code' => '710600',
                'name' => '新竹市',
                'provincecode' => '710000',
            ),
            324 => 
            array (
                'id' => 353,
                'code' => '710700',
                'name' => '嘉义市',
                'provincecode' => '710000',
            ),
            325 => 
            array (
                'id' => 354,
                'code' => '710800',
                'name' => '新北市',
                'provincecode' => '710000',
            ),
            326 => 
            array (
                'id' => 355,
                'code' => '712200',
                'name' => '宜兰县',
                'provincecode' => '710000',
            ),
            327 => 
            array (
                'id' => 356,
                'code' => '712300',
                'name' => '桃园县',
                'provincecode' => '710000',
            ),
            328 => 
            array (
                'id' => 357,
                'code' => '712400',
                'name' => '新竹县',
                'provincecode' => '710000',
            ),
            329 => 
            array (
                'id' => 358,
                'code' => '712500',
                'name' => '苗栗县',
                'provincecode' => '710000',
            ),
            330 => 
            array (
                'id' => 359,
                'code' => '712700',
                'name' => '彰化县',
                'provincecode' => '710000',
            ),
            331 => 
            array (
                'id' => 360,
                'code' => '712800',
                'name' => '南投县',
                'provincecode' => '710000',
            ),
            332 => 
            array (
                'id' => 361,
                'code' => '712900',
                'name' => '云林县',
                'provincecode' => '710000',
            ),
            333 => 
            array (
                'id' => 362,
                'code' => '713000',
                'name' => '嘉义县',
                'provincecode' => '710000',
            ),
            334 => 
            array (
                'id' => 363,
                'code' => '713300',
                'name' => '屏东县',
                'provincecode' => '710000',
            ),
            335 => 
            array (
                'id' => 364,
                'code' => '713400',
                'name' => '台东县',
                'provincecode' => '710000',
            ),
            336 => 
            array (
                'id' => 365,
                'code' => '713500',
                'name' => '花莲县',
                'provincecode' => '710000',
            ),
            337 => 
            array (
                'id' => 366,
                'code' => '713600',
                'name' => '澎湖县',
                'provincecode' => '710000',
            ),
            338 => 
            array (
                'id' => 367,
                'code' => '713700',
                'name' => '金门县',
                'provincecode' => '710000',
            ),
            339 => 
            array (
                'id' => 368,
                'code' => '713800',
                'name' => '连江县',
                'provincecode' => '710000',
            ),
            340 => 
            array (
                'id' => 369,
                'code' => '810100',
                'name' => '香港岛',
                'provincecode' => '810000',
            ),
            341 => 
            array (
                'id' => 370,
                'code' => '810200',
                'name' => '九龙',
                'provincecode' => '810000',
            ),
            342 => 
            array (
                'id' => 371,
                'code' => '810300',
                'name' => '新界',
                'provincecode' => '810000',
            ),
            343 => 
            array (
                'id' => 372,
                'code' => '820100',
                'name' => '澳门半岛',
                'provincecode' => '820000',
            ),
            344 => 
            array (
                'id' => 373,
                'code' => '820200',
                'name' => '氹仔岛',
                'provincecode' => '820000',
            ),
            345 => 
            array (
                'id' => 374,
                'code' => '820300',
                'name' => '路环岛',
                'provincecode' => '820000',
            ),
        ));
        
        
    }
}