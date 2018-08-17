<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('areas')->delete();
        
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => '100000',
                'name' => '中国',
                'parentId' => '0',
                'level' => '0',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => '110000',
                'name' => '北京',
                'parentId' => '100000',
                'level' => '1',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => '110100',
                'name' => '北京市',
                'parentId' => '110000',
                'level' => '2',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => '110101',
                'name' => '东城区',
                'parentId' => '110100',
                'level' => '3',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => '110102',
                'name' => '西城区',
                'parentId' => '110100',
                'level' => '3',
            ),
            5 => 
            array (
                'id' => 6,
                'code' => '110105',
                'name' => '朝阳区',
                'parentId' => '110100',
                'level' => '3',
            ),
            6 => 
            array (
                'id' => 7,
                'code' => '110106',
                'name' => '丰台区',
                'parentId' => '110100',
                'level' => '3',
            ),
            7 => 
            array (
                'id' => 8,
                'code' => '110107',
                'name' => '石景山区',
                'parentId' => '110100',
                'level' => '3',
            ),
            8 => 
            array (
                'id' => 9,
                'code' => '110108',
                'name' => '海淀区',
                'parentId' => '110100',
                'level' => '3',
            ),
            9 => 
            array (
                'id' => 10,
                'code' => '110109',
                'name' => '门头沟区',
                'parentId' => '110100',
                'level' => '3',
            ),
            10 => 
            array (
                'id' => 11,
                'code' => '110111',
                'name' => '房山区',
                'parentId' => '110100',
                'level' => '3',
            ),
            11 => 
            array (
                'id' => 12,
                'code' => '110112',
                'name' => '通州区',
                'parentId' => '110100',
                'level' => '3',
            ),
            12 => 
            array (
                'id' => 13,
                'code' => '110113',
                'name' => '顺义区',
                'parentId' => '110100',
                'level' => '3',
            ),
            13 => 
            array (
                'id' => 14,
                'code' => '110114',
                'name' => '昌平区',
                'parentId' => '110100',
                'level' => '3',
            ),
            14 => 
            array (
                'id' => 15,
                'code' => '110115',
                'name' => '大兴区',
                'parentId' => '110100',
                'level' => '3',
            ),
            15 => 
            array (
                'id' => 16,
                'code' => '110116',
                'name' => '怀柔区',
                'parentId' => '110100',
                'level' => '3',
            ),
            16 => 
            array (
                'id' => 17,
                'code' => '110117',
                'name' => '平谷区',
                'parentId' => '110100',
                'level' => '3',
            ),
            17 => 
            array (
                'id' => 18,
                'code' => '110228',
                'name' => '密云县',
                'parentId' => '110100',
                'level' => '3',
            ),
            18 => 
            array (
                'id' => 19,
                'code' => '110229',
                'name' => '延庆县',
                'parentId' => '110100',
                'level' => '3',
            ),
            19 => 
            array (
                'id' => 20,
                'code' => '120000',
                'name' => '天津',
                'parentId' => '100000',
                'level' => '1',
            ),
            20 => 
            array (
                'id' => 21,
                'code' => '120100',
                'name' => '天津市',
                'parentId' => '120000',
                'level' => '2',
            ),
            21 => 
            array (
                'id' => 22,
                'code' => '120101',
                'name' => '和平区',
                'parentId' => '120100',
                'level' => '3',
            ),
            22 => 
            array (
                'id' => 23,
                'code' => '120102',
                'name' => '河东区',
                'parentId' => '120100',
                'level' => '3',
            ),
            23 => 
            array (
                'id' => 24,
                'code' => '120103',
                'name' => '河西区',
                'parentId' => '120100',
                'level' => '3',
            ),
            24 => 
            array (
                'id' => 25,
                'code' => '120104',
                'name' => '南开区',
                'parentId' => '120100',
                'level' => '3',
            ),
            25 => 
            array (
                'id' => 26,
                'code' => '120105',
                'name' => '河北区',
                'parentId' => '120100',
                'level' => '3',
            ),
            26 => 
            array (
                'id' => 27,
                'code' => '120106',
                'name' => '红桥区',
                'parentId' => '120100',
                'level' => '3',
            ),
            27 => 
            array (
                'id' => 28,
                'code' => '120110',
                'name' => '东丽区',
                'parentId' => '120100',
                'level' => '3',
            ),
            28 => 
            array (
                'id' => 29,
                'code' => '120111',
                'name' => '西青区',
                'parentId' => '120100',
                'level' => '3',
            ),
            29 => 
            array (
                'id' => 30,
                'code' => '120112',
                'name' => '津南区',
                'parentId' => '120100',
                'level' => '3',
            ),
            30 => 
            array (
                'id' => 31,
                'code' => '120113',
                'name' => '北辰区',
                'parentId' => '120100',
                'level' => '3',
            ),
            31 => 
            array (
                'id' => 32,
                'code' => '120114',
                'name' => '武清区',
                'parentId' => '120100',
                'level' => '3',
            ),
            32 => 
            array (
                'id' => 33,
                'code' => '120115',
                'name' => '宝坻区',
                'parentId' => '120100',
                'level' => '3',
            ),
            33 => 
            array (
                'id' => 34,
                'code' => '120116',
                'name' => '滨海新区',
                'parentId' => '120100',
                'level' => '3',
            ),
            34 => 
            array (
                'id' => 35,
                'code' => '120221',
                'name' => '宁河区',
                'parentId' => '120100',
                'level' => '3',
            ),
            35 => 
            array (
                'id' => 36,
                'code' => '120223',
                'name' => '静海区',
                'parentId' => '120100',
                'level' => '3',
            ),
            36 => 
            array (
                'id' => 37,
                'code' => '120225',
                'name' => '蓟县',
                'parentId' => '120100',
                'level' => '3',
            ),
            37 => 
            array (
                'id' => 38,
                'code' => '120226',
                'name' => '北部新区',
                'parentId' => '120100',
                'level' => '3',
            ),
            38 => 
            array (
                'id' => 39,
                'code' => '130000',
                'name' => '河北省',
                'parentId' => '100000',
                'level' => '1',
            ),
            39 => 
            array (
                'id' => 40,
                'code' => '130100',
                'name' => '石家庄市',
                'parentId' => '130000',
                'level' => '2',
            ),
            40 => 
            array (
                'id' => 41,
                'code' => '130102',
                'name' => '长安区',
                'parentId' => '130100',
                'level' => '3',
            ),
            41 => 
            array (
                'id' => 42,
                'code' => '130104',
                'name' => '桥西区',
                'parentId' => '130100',
                'level' => '3',
            ),
            42 => 
            array (
                'id' => 43,
                'code' => '130105',
                'name' => '新华区',
                'parentId' => '130100',
                'level' => '3',
            ),
            43 => 
            array (
                'id' => 44,
                'code' => '130107',
                'name' => '井陉矿区',
                'parentId' => '130100',
                'level' => '3',
            ),
            44 => 
            array (
                'id' => 45,
                'code' => '130108',
                'name' => '裕华区',
                'parentId' => '130100',
                'level' => '3',
            ),
            45 => 
            array (
                'id' => 46,
                'code' => '130109',
                'name' => '藁城区',
                'parentId' => '130100',
                'level' => '3',
            ),
            46 => 
            array (
                'id' => 47,
                'code' => '130110',
                'name' => '鹿泉区',
                'parentId' => '130100',
                'level' => '3',
            ),
            47 => 
            array (
                'id' => 48,
                'code' => '130111',
                'name' => '栾城区',
                'parentId' => '130100',
                'level' => '3',
            ),
            48 => 
            array (
                'id' => 49,
                'code' => '130121',
                'name' => '井陉县',
                'parentId' => '130100',
                'level' => '3',
            ),
            49 => 
            array (
                'id' => 50,
                'code' => '130123',
                'name' => '正定县',
                'parentId' => '130100',
                'level' => '3',
            ),
            50 => 
            array (
                'id' => 51,
                'code' => '130125',
                'name' => '行唐县',
                'parentId' => '130100',
                'level' => '3',
            ),
            51 => 
            array (
                'id' => 52,
                'code' => '130126',
                'name' => '灵寿县',
                'parentId' => '130100',
                'level' => '3',
            ),
            52 => 
            array (
                'id' => 53,
                'code' => '130127',
                'name' => '高邑县',
                'parentId' => '130100',
                'level' => '3',
            ),
            53 => 
            array (
                'id' => 54,
                'code' => '130128',
                'name' => '深泽县',
                'parentId' => '130100',
                'level' => '3',
            ),
            54 => 
            array (
                'id' => 55,
                'code' => '130129',
                'name' => '赞皇县',
                'parentId' => '130100',
                'level' => '3',
            ),
            55 => 
            array (
                'id' => 56,
                'code' => '130130',
                'name' => '无极县',
                'parentId' => '130100',
                'level' => '3',
            ),
            56 => 
            array (
                'id' => 57,
                'code' => '130131',
                'name' => '平山县',
                'parentId' => '130100',
                'level' => '3',
            ),
            57 => 
            array (
                'id' => 58,
                'code' => '130132',
                'name' => '元氏县',
                'parentId' => '130100',
                'level' => '3',
            ),
            58 => 
            array (
                'id' => 59,
                'code' => '130133',
                'name' => '赵县',
                'parentId' => '130100',
                'level' => '3',
            ),
            59 => 
            array (
                'id' => 60,
                'code' => '130181',
                'name' => '辛集市',
                'parentId' => '130100',
                'level' => '3',
            ),
            60 => 
            array (
                'id' => 61,
                'code' => '130183',
                'name' => '晋州市',
                'parentId' => '130100',
                'level' => '3',
            ),
            61 => 
            array (
                'id' => 62,
                'code' => '130184',
                'name' => '新乐市',
                'parentId' => '130100',
                'level' => '3',
            ),
            62 => 
            array (
                'id' => 63,
                'code' => '130200',
                'name' => '唐山市',
                'parentId' => '130000',
                'level' => '2',
            ),
            63 => 
            array (
                'id' => 64,
                'code' => '130202',
                'name' => '路南区',
                'parentId' => '130200',
                'level' => '3',
            ),
            64 => 
            array (
                'id' => 65,
                'code' => '130203',
                'name' => '路北区',
                'parentId' => '130200',
                'level' => '3',
            ),
            65 => 
            array (
                'id' => 66,
                'code' => '130204',
                'name' => '古冶区',
                'parentId' => '130200',
                'level' => '3',
            ),
            66 => 
            array (
                'id' => 67,
                'code' => '130205',
                'name' => '开平区',
                'parentId' => '130200',
                'level' => '3',
            ),
            67 => 
            array (
                'id' => 68,
                'code' => '130207',
                'name' => '丰南区',
                'parentId' => '130200',
                'level' => '3',
            ),
            68 => 
            array (
                'id' => 69,
                'code' => '130208',
                'name' => '丰润区',
                'parentId' => '130200',
                'level' => '3',
            ),
            69 => 
            array (
                'id' => 70,
                'code' => '130209',
                'name' => '曹妃甸区',
                'parentId' => '130200',
                'level' => '3',
            ),
            70 => 
            array (
                'id' => 71,
                'code' => '130223',
                'name' => '滦县',
                'parentId' => '130200',
                'level' => '3',
            ),
            71 => 
            array (
                'id' => 72,
                'code' => '130224',
                'name' => '滦南县',
                'parentId' => '130200',
                'level' => '3',
            ),
            72 => 
            array (
                'id' => 73,
                'code' => '130225',
                'name' => '乐亭县',
                'parentId' => '130200',
                'level' => '3',
            ),
            73 => 
            array (
                'id' => 74,
                'code' => '130227',
                'name' => '迁西县',
                'parentId' => '130200',
                'level' => '3',
            ),
            74 => 
            array (
                'id' => 75,
                'code' => '130229',
                'name' => '玉田县',
                'parentId' => '130200',
                'level' => '3',
            ),
            75 => 
            array (
                'id' => 76,
                'code' => '130281',
                'name' => '遵化市',
                'parentId' => '130200',
                'level' => '3',
            ),
            76 => 
            array (
                'id' => 77,
                'code' => '130283',
                'name' => '迁安市',
                'parentId' => '130200',
                'level' => '3',
            ),
            77 => 
            array (
                'id' => 78,
                'code' => '130300',
                'name' => '秦皇岛市',
                'parentId' => '130000',
                'level' => '2',
            ),
            78 => 
            array (
                'id' => 79,
                'code' => '130302',
                'name' => '海港区',
                'parentId' => '130300',
                'level' => '3',
            ),
            79 => 
            array (
                'id' => 80,
                'code' => '130303',
                'name' => '山海关区',
                'parentId' => '130300',
                'level' => '3',
            ),
            80 => 
            array (
                'id' => 81,
                'code' => '130304',
                'name' => '北戴河区',
                'parentId' => '130300',
                'level' => '3',
            ),
            81 => 
            array (
                'id' => 82,
                'code' => '130321',
                'name' => '青龙满族自治县',
                'parentId' => '130300',
                'level' => '3',
            ),
            82 => 
            array (
                'id' => 83,
                'code' => '130322',
                'name' => '昌黎县',
                'parentId' => '130300',
                'level' => '3',
            ),
            83 => 
            array (
                'id' => 84,
                'code' => '130323',
                'name' => '抚宁区',
                'parentId' => '130300',
                'level' => '3',
            ),
            84 => 
            array (
                'id' => 85,
                'code' => '130324',
                'name' => '卢龙县',
                'parentId' => '130300',
                'level' => '3',
            ),
            85 => 
            array (
                'id' => 86,
                'code' => '130325',
                'name' => '北戴河新区',
                'parentId' => '130300',
                'level' => '3',
            ),
            86 => 
            array (
                'id' => 87,
                'code' => '130400',
                'name' => '邯郸市',
                'parentId' => '130000',
                'level' => '2',
            ),
            87 => 
            array (
                'id' => 88,
                'code' => '130402',
                'name' => '邯山区',
                'parentId' => '130400',
                'level' => '3',
            ),
            88 => 
            array (
                'id' => 89,
                'code' => '130403',
                'name' => '丛台区',
                'parentId' => '130400',
                'level' => '3',
            ),
            89 => 
            array (
                'id' => 90,
                'code' => '130404',
                'name' => '复兴区',
                'parentId' => '130400',
                'level' => '3',
            ),
            90 => 
            array (
                'id' => 91,
                'code' => '130406',
                'name' => '峰峰矿区',
                'parentId' => '130400',
                'level' => '3',
            ),
            91 => 
            array (
                'id' => 92,
                'code' => '130421',
                'name' => '邯郸县',
                'parentId' => '130400',
                'level' => '3',
            ),
            92 => 
            array (
                'id' => 93,
                'code' => '130423',
                'name' => '临漳县',
                'parentId' => '130400',
                'level' => '3',
            ),
            93 => 
            array (
                'id' => 94,
                'code' => '130424',
                'name' => '成安县',
                'parentId' => '130400',
                'level' => '3',
            ),
            94 => 
            array (
                'id' => 95,
                'code' => '130425',
                'name' => '大名县',
                'parentId' => '130400',
                'level' => '3',
            ),
            95 => 
            array (
                'id' => 96,
                'code' => '130426',
                'name' => '涉县',
                'parentId' => '130400',
                'level' => '3',
            ),
            96 => 
            array (
                'id' => 97,
                'code' => '130427',
                'name' => '磁县',
                'parentId' => '130400',
                'level' => '3',
            ),
            97 => 
            array (
                'id' => 98,
                'code' => '130428',
                'name' => '肥乡县',
                'parentId' => '130400',
                'level' => '3',
            ),
            98 => 
            array (
                'id' => 99,
                'code' => '130429',
                'name' => '永年县',
                'parentId' => '130400',
                'level' => '3',
            ),
            99 => 
            array (
                'id' => 100,
                'code' => '130430',
                'name' => '邱县',
                'parentId' => '130400',
                'level' => '3',
            ),
            100 => 
            array (
                'id' => 101,
                'code' => '130431',
                'name' => '鸡泽县',
                'parentId' => '130400',
                'level' => '3',
            ),
            101 => 
            array (
                'id' => 102,
                'code' => '130432',
                'name' => '广平县',
                'parentId' => '130400',
                'level' => '3',
            ),
            102 => 
            array (
                'id' => 103,
                'code' => '130433',
                'name' => '馆陶县',
                'parentId' => '130400',
                'level' => '3',
            ),
            103 => 
            array (
                'id' => 104,
                'code' => '130434',
                'name' => '魏县',
                'parentId' => '130400',
                'level' => '3',
            ),
            104 => 
            array (
                'id' => 105,
                'code' => '130435',
                'name' => '曲周县',
                'parentId' => '130400',
                'level' => '3',
            ),
            105 => 
            array (
                'id' => 106,
                'code' => '130481',
                'name' => '武安市',
                'parentId' => '130400',
                'level' => '3',
            ),
            106 => 
            array (
                'id' => 107,
                'code' => '130500',
                'name' => '邢台市',
                'parentId' => '130000',
                'level' => '2',
            ),
            107 => 
            array (
                'id' => 108,
                'code' => '130502',
                'name' => '桥东区',
                'parentId' => '130500',
                'level' => '3',
            ),
            108 => 
            array (
                'id' => 109,
                'code' => '130503',
                'name' => '桥西区',
                'parentId' => '130500',
                'level' => '3',
            ),
            109 => 
            array (
                'id' => 110,
                'code' => '130521',
                'name' => '邢台县',
                'parentId' => '130500',
                'level' => '3',
            ),
            110 => 
            array (
                'id' => 111,
                'code' => '130522',
                'name' => '临城县',
                'parentId' => '130500',
                'level' => '3',
            ),
            111 => 
            array (
                'id' => 112,
                'code' => '130523',
                'name' => '内丘县',
                'parentId' => '130500',
                'level' => '3',
            ),
            112 => 
            array (
                'id' => 113,
                'code' => '130524',
                'name' => '柏乡县',
                'parentId' => '130500',
                'level' => '3',
            ),
            113 => 
            array (
                'id' => 114,
                'code' => '130525',
                'name' => '隆尧县',
                'parentId' => '130500',
                'level' => '3',
            ),
            114 => 
            array (
                'id' => 115,
                'code' => '130526',
                'name' => '任县',
                'parentId' => '130500',
                'level' => '3',
            ),
            115 => 
            array (
                'id' => 116,
                'code' => '130527',
                'name' => '南和县',
                'parentId' => '130500',
                'level' => '3',
            ),
            116 => 
            array (
                'id' => 117,
                'code' => '130528',
                'name' => '宁晋县',
                'parentId' => '130500',
                'level' => '3',
            ),
            117 => 
            array (
                'id' => 118,
                'code' => '130529',
                'name' => '巨鹿县',
                'parentId' => '130500',
                'level' => '3',
            ),
            118 => 
            array (
                'id' => 119,
                'code' => '130530',
                'name' => '新河县',
                'parentId' => '130500',
                'level' => '3',
            ),
            119 => 
            array (
                'id' => 120,
                'code' => '130531',
                'name' => '广宗县',
                'parentId' => '130500',
                'level' => '3',
            ),
            120 => 
            array (
                'id' => 121,
                'code' => '130532',
                'name' => '平乡县',
                'parentId' => '130500',
                'level' => '3',
            ),
            121 => 
            array (
                'id' => 122,
                'code' => '130533',
                'name' => '威县',
                'parentId' => '130500',
                'level' => '3',
            ),
            122 => 
            array (
                'id' => 123,
                'code' => '130534',
                'name' => '清河县',
                'parentId' => '130500',
                'level' => '3',
            ),
            123 => 
            array (
                'id' => 124,
                'code' => '130535',
                'name' => '临西县',
                'parentId' => '130500',
                'level' => '3',
            ),
            124 => 
            array (
                'id' => 125,
                'code' => '130581',
                'name' => '南宫市',
                'parentId' => '130500',
                'level' => '3',
            ),
            125 => 
            array (
                'id' => 126,
                'code' => '130582',
                'name' => '沙河市',
                'parentId' => '130500',
                'level' => '3',
            ),
            126 => 
            array (
                'id' => 127,
                'code' => '130600',
                'name' => '保定市',
                'parentId' => '130000',
                'level' => '2',
            ),
            127 => 
            array (
                'id' => 128,
                'code' => '130602',
                'name' => '竞秀区',
                'parentId' => '130600',
                'level' => '3',
            ),
            128 => 
            array (
                'id' => 129,
                'code' => '130606',
                'name' => '莲池区',
                'parentId' => '130600',
                'level' => '3',
            ),
            129 => 
            array (
                'id' => 130,
                'code' => '130607',
                'name' => '满城区',
                'parentId' => '130600',
                'level' => '3',
            ),
            130 => 
            array (
                'id' => 131,
                'code' => '130608',
                'name' => '清苑区',
                'parentId' => '130600',
                'level' => '3',
            ),
            131 => 
            array (
                'id' => 132,
                'code' => '130609',
                'name' => '徐水区',
                'parentId' => '130600',
                'level' => '3',
            ),
            132 => 
            array (
                'id' => 133,
                'code' => '130623',
                'name' => '涞水县',
                'parentId' => '130600',
                'level' => '3',
            ),
            133 => 
            array (
                'id' => 134,
                'code' => '130624',
                'name' => '阜平县',
                'parentId' => '130600',
                'level' => '3',
            ),
            134 => 
            array (
                'id' => 135,
                'code' => '130626',
                'name' => '定兴县',
                'parentId' => '130600',
                'level' => '3',
            ),
            135 => 
            array (
                'id' => 136,
                'code' => '130627',
                'name' => '唐县',
                'parentId' => '130600',
                'level' => '3',
            ),
            136 => 
            array (
                'id' => 137,
                'code' => '130628',
                'name' => '高阳县',
                'parentId' => '130600',
                'level' => '3',
            ),
            137 => 
            array (
                'id' => 138,
                'code' => '130629',
                'name' => '容城县',
                'parentId' => '130600',
                'level' => '3',
            ),
            138 => 
            array (
                'id' => 139,
                'code' => '130630',
                'name' => '涞源县',
                'parentId' => '130600',
                'level' => '3',
            ),
            139 => 
            array (
                'id' => 140,
                'code' => '130631',
                'name' => '望都县',
                'parentId' => '130600',
                'level' => '3',
            ),
            140 => 
            array (
                'id' => 141,
                'code' => '130632',
                'name' => '安新县',
                'parentId' => '130600',
                'level' => '3',
            ),
            141 => 
            array (
                'id' => 142,
                'code' => '130633',
                'name' => '易县',
                'parentId' => '130600',
                'level' => '3',
            ),
            142 => 
            array (
                'id' => 143,
                'code' => '130634',
                'name' => '曲阳县',
                'parentId' => '130600',
                'level' => '3',
            ),
            143 => 
            array (
                'id' => 144,
                'code' => '130635',
                'name' => '蠡县',
                'parentId' => '130600',
                'level' => '3',
            ),
            144 => 
            array (
                'id' => 145,
                'code' => '130636',
                'name' => '顺平县',
                'parentId' => '130600',
                'level' => '3',
            ),
            145 => 
            array (
                'id' => 146,
                'code' => '130637',
                'name' => '博野县',
                'parentId' => '130600',
                'level' => '3',
            ),
            146 => 
            array (
                'id' => 147,
                'code' => '130638',
                'name' => '雄县',
                'parentId' => '130600',
                'level' => '3',
            ),
            147 => 
            array (
                'id' => 148,
                'code' => '130681',
                'name' => '涿州市',
                'parentId' => '130600',
                'level' => '3',
            ),
            148 => 
            array (
                'id' => 149,
                'code' => '130682',
                'name' => '定州市',
                'parentId' => '130600',
                'level' => '3',
            ),
            149 => 
            array (
                'id' => 150,
                'code' => '130683',
                'name' => '安国市',
                'parentId' => '130600',
                'level' => '3',
            ),
            150 => 
            array (
                'id' => 151,
                'code' => '130684',
                'name' => '高碑店市',
                'parentId' => '130600',
                'level' => '3',
            ),
            151 => 
            array (
                'id' => 152,
                'code' => '130700',
                'name' => '张家口市',
                'parentId' => '130000',
                'level' => '2',
            ),
            152 => 
            array (
                'id' => 153,
                'code' => '130702',
                'name' => '桥东区',
                'parentId' => '130700',
                'level' => '3',
            ),
            153 => 
            array (
                'id' => 154,
                'code' => '130703',
                'name' => '桥西区',
                'parentId' => '130700',
                'level' => '3',
            ),
            154 => 
            array (
                'id' => 155,
                'code' => '130705',
                'name' => '宣化区',
                'parentId' => '130700',
                'level' => '3',
            ),
            155 => 
            array (
                'id' => 156,
                'code' => '130706',
                'name' => '下花园区',
                'parentId' => '130700',
                'level' => '3',
            ),
            156 => 
            array (
                'id' => 157,
                'code' => '130721',
                'name' => '宣化县',
                'parentId' => '130700',
                'level' => '3',
            ),
            157 => 
            array (
                'id' => 158,
                'code' => '130722',
                'name' => '张北县',
                'parentId' => '130700',
                'level' => '3',
            ),
            158 => 
            array (
                'id' => 159,
                'code' => '130723',
                'name' => '康保县',
                'parentId' => '130700',
                'level' => '3',
            ),
            159 => 
            array (
                'id' => 160,
                'code' => '130724',
                'name' => '沽源县',
                'parentId' => '130700',
                'level' => '3',
            ),
            160 => 
            array (
                'id' => 161,
                'code' => '130725',
                'name' => '尚义县',
                'parentId' => '130700',
                'level' => '3',
            ),
            161 => 
            array (
                'id' => 162,
                'code' => '130726',
                'name' => '蔚县',
                'parentId' => '130700',
                'level' => '3',
            ),
            162 => 
            array (
                'id' => 163,
                'code' => '130727',
                'name' => '阳原县',
                'parentId' => '130700',
                'level' => '3',
            ),
            163 => 
            array (
                'id' => 164,
                'code' => '130728',
                'name' => '怀安县',
                'parentId' => '130700',
                'level' => '3',
            ),
            164 => 
            array (
                'id' => 165,
                'code' => '130729',
                'name' => '万全县',
                'parentId' => '130700',
                'level' => '3',
            ),
            165 => 
            array (
                'id' => 166,
                'code' => '130730',
                'name' => '怀来县',
                'parentId' => '130700',
                'level' => '3',
            ),
            166 => 
            array (
                'id' => 167,
                'code' => '130731',
                'name' => '涿鹿县',
                'parentId' => '130700',
                'level' => '3',
            ),
            167 => 
            array (
                'id' => 168,
                'code' => '130732',
                'name' => '赤城县',
                'parentId' => '130700',
                'level' => '3',
            ),
            168 => 
            array (
                'id' => 169,
                'code' => '130733',
                'name' => '崇礼县',
                'parentId' => '130700',
                'level' => '3',
            ),
            169 => 
            array (
                'id' => 170,
                'code' => '130800',
                'name' => '承德市',
                'parentId' => '130000',
                'level' => '2',
            ),
            170 => 
            array (
                'id' => 171,
                'code' => '130802',
                'name' => '双桥区',
                'parentId' => '130800',
                'level' => '3',
            ),
            171 => 
            array (
                'id' => 172,
                'code' => '130803',
                'name' => '双滦区',
                'parentId' => '130800',
                'level' => '3',
            ),
            172 => 
            array (
                'id' => 173,
                'code' => '130804',
                'name' => '鹰手营子矿区',
                'parentId' => '130800',
                'level' => '3',
            ),
            173 => 
            array (
                'id' => 174,
                'code' => '130821',
                'name' => '承德县',
                'parentId' => '130800',
                'level' => '3',
            ),
            174 => 
            array (
                'id' => 175,
                'code' => '130822',
                'name' => '兴隆县',
                'parentId' => '130800',
                'level' => '3',
            ),
            175 => 
            array (
                'id' => 176,
                'code' => '130823',
                'name' => '平泉县',
                'parentId' => '130800',
                'level' => '3',
            ),
            176 => 
            array (
                'id' => 177,
                'code' => '130824',
                'name' => '滦平县',
                'parentId' => '130800',
                'level' => '3',
            ),
            177 => 
            array (
                'id' => 178,
                'code' => '130825',
                'name' => '隆化县',
                'parentId' => '130800',
                'level' => '3',
            ),
            178 => 
            array (
                'id' => 179,
                'code' => '130826',
                'name' => '丰宁满族自治县',
                'parentId' => '130800',
                'level' => '3',
            ),
            179 => 
            array (
                'id' => 180,
                'code' => '130827',
                'name' => '宽城满族自治县',
                'parentId' => '130800',
                'level' => '3',
            ),
            180 => 
            array (
                'id' => 181,
                'code' => '130828',
                'name' => '围场满族蒙古族自治县',
                'parentId' => '130800',
                'level' => '3',
            ),
            181 => 
            array (
                'id' => 182,
                'code' => '130900',
                'name' => '沧州市',
                'parentId' => '130000',
                'level' => '2',
            ),
            182 => 
            array (
                'id' => 183,
                'code' => '130902',
                'name' => '新华区',
                'parentId' => '130900',
                'level' => '3',
            ),
            183 => 
            array (
                'id' => 184,
                'code' => '130903',
                'name' => '运河区',
                'parentId' => '130900',
                'level' => '3',
            ),
            184 => 
            array (
                'id' => 185,
                'code' => '130921',
                'name' => '沧县',
                'parentId' => '130900',
                'level' => '3',
            ),
            185 => 
            array (
                'id' => 186,
                'code' => '130922',
                'name' => '青县',
                'parentId' => '130900',
                'level' => '3',
            ),
            186 => 
            array (
                'id' => 187,
                'code' => '130923',
                'name' => '东光县',
                'parentId' => '130900',
                'level' => '3',
            ),
            187 => 
            array (
                'id' => 188,
                'code' => '130924',
                'name' => '海兴县',
                'parentId' => '130900',
                'level' => '3',
            ),
            188 => 
            array (
                'id' => 189,
                'code' => '130925',
                'name' => '盐山县',
                'parentId' => '130900',
                'level' => '3',
            ),
            189 => 
            array (
                'id' => 190,
                'code' => '130926',
                'name' => '肃宁县',
                'parentId' => '130900',
                'level' => '3',
            ),
            190 => 
            array (
                'id' => 191,
                'code' => '130927',
                'name' => '南皮县',
                'parentId' => '130900',
                'level' => '3',
            ),
            191 => 
            array (
                'id' => 192,
                'code' => '130928',
                'name' => '吴桥县',
                'parentId' => '130900',
                'level' => '3',
            ),
            192 => 
            array (
                'id' => 193,
                'code' => '130929',
                'name' => '献县',
                'parentId' => '130900',
                'level' => '3',
            ),
            193 => 
            array (
                'id' => 194,
                'code' => '130930',
                'name' => '孟村回族自治县',
                'parentId' => '130900',
                'level' => '3',
            ),
            194 => 
            array (
                'id' => 195,
                'code' => '130981',
                'name' => '泊头市',
                'parentId' => '130900',
                'level' => '3',
            ),
            195 => 
            array (
                'id' => 196,
                'code' => '130982',
                'name' => '任丘市',
                'parentId' => '130900',
                'level' => '3',
            ),
            196 => 
            array (
                'id' => 197,
                'code' => '130983',
                'name' => '黄骅市',
                'parentId' => '130900',
                'level' => '3',
            ),
            197 => 
            array (
                'id' => 198,
                'code' => '130984',
                'name' => '河间市',
                'parentId' => '130900',
                'level' => '3',
            ),
            198 => 
            array (
                'id' => 199,
                'code' => '130985',
                'name' => '渤海新区',
                'parentId' => '130900',
                'level' => '3',
            ),
            199 => 
            array (
                'id' => 200,
                'code' => '131000',
                'name' => '廊坊市',
                'parentId' => '130000',
                'level' => '2',
            ),
            200 => 
            array (
                'id' => 201,
                'code' => '131002',
                'name' => '安次区',
                'parentId' => '131000',
                'level' => '3',
            ),
            201 => 
            array (
                'id' => 202,
                'code' => '131003',
                'name' => '广阳区',
                'parentId' => '131000',
                'level' => '3',
            ),
            202 => 
            array (
                'id' => 203,
                'code' => '131022',
                'name' => '固安县',
                'parentId' => '131000',
                'level' => '3',
            ),
            203 => 
            array (
                'id' => 204,
                'code' => '131023',
                'name' => '永清县',
                'parentId' => '131000',
                'level' => '3',
            ),
            204 => 
            array (
                'id' => 205,
                'code' => '131024',
                'name' => '香河县',
                'parentId' => '131000',
                'level' => '3',
            ),
            205 => 
            array (
                'id' => 206,
                'code' => '131025',
                'name' => '大城县',
                'parentId' => '131000',
                'level' => '3',
            ),
            206 => 
            array (
                'id' => 207,
                'code' => '131026',
                'name' => '文安县',
                'parentId' => '131000',
                'level' => '3',
            ),
            207 => 
            array (
                'id' => 208,
                'code' => '131028',
                'name' => '大厂回族自治县',
                'parentId' => '131000',
                'level' => '3',
            ),
            208 => 
            array (
                'id' => 209,
                'code' => '131081',
                'name' => '霸州市',
                'parentId' => '131000',
                'level' => '3',
            ),
            209 => 
            array (
                'id' => 210,
                'code' => '131082',
                'name' => '三河市',
                'parentId' => '131000',
                'level' => '3',
            ),
            210 => 
            array (
                'id' => 211,
                'code' => '131100',
                'name' => '衡水市',
                'parentId' => '130000',
                'level' => '2',
            ),
            211 => 
            array (
                'id' => 212,
                'code' => '131102',
                'name' => '桃城区',
                'parentId' => '131100',
                'level' => '3',
            ),
            212 => 
            array (
                'id' => 213,
                'code' => '131121',
                'name' => '枣强县',
                'parentId' => '131100',
                'level' => '3',
            ),
            213 => 
            array (
                'id' => 214,
                'code' => '131122',
                'name' => '武邑县',
                'parentId' => '131100',
                'level' => '3',
            ),
            214 => 
            array (
                'id' => 215,
                'code' => '131123',
                'name' => '武强县',
                'parentId' => '131100',
                'level' => '3',
            ),
            215 => 
            array (
                'id' => 216,
                'code' => '131124',
                'name' => '饶阳县',
                'parentId' => '131100',
                'level' => '3',
            ),
            216 => 
            array (
                'id' => 217,
                'code' => '131125',
                'name' => '安平县',
                'parentId' => '131100',
                'level' => '3',
            ),
            217 => 
            array (
                'id' => 218,
                'code' => '131126',
                'name' => '故城县',
                'parentId' => '131100',
                'level' => '3',
            ),
            218 => 
            array (
                'id' => 219,
                'code' => '131127',
                'name' => '景县',
                'parentId' => '131100',
                'level' => '3',
            ),
            219 => 
            array (
                'id' => 220,
                'code' => '131128',
                'name' => '阜城县',
                'parentId' => '131100',
                'level' => '3',
            ),
            220 => 
            array (
                'id' => 221,
                'code' => '131181',
                'name' => '冀州市',
                'parentId' => '131100',
                'level' => '3',
            ),
            221 => 
            array (
                'id' => 222,
                'code' => '131182',
                'name' => '深州市',
                'parentId' => '131100',
                'level' => '3',
            ),
            222 => 
            array (
                'id' => 223,
                'code' => '140000',
                'name' => '山西省',
                'parentId' => '100000',
                'level' => '1',
            ),
            223 => 
            array (
                'id' => 224,
                'code' => '140100',
                'name' => '太原市',
                'parentId' => '140000',
                'level' => '2',
            ),
            224 => 
            array (
                'id' => 225,
                'code' => '140105',
                'name' => '小店区',
                'parentId' => '140100',
                'level' => '3',
            ),
            225 => 
            array (
                'id' => 226,
                'code' => '140106',
                'name' => '迎泽区',
                'parentId' => '140100',
                'level' => '3',
            ),
            226 => 
            array (
                'id' => 227,
                'code' => '140107',
                'name' => '杏花岭区',
                'parentId' => '140100',
                'level' => '3',
            ),
            227 => 
            array (
                'id' => 228,
                'code' => '140108',
                'name' => '尖草坪区',
                'parentId' => '140100',
                'level' => '3',
            ),
            228 => 
            array (
                'id' => 229,
                'code' => '140109',
                'name' => '万柏林区',
                'parentId' => '140100',
                'level' => '3',
            ),
            229 => 
            array (
                'id' => 230,
                'code' => '140110',
                'name' => '晋源区',
                'parentId' => '140100',
                'level' => '3',
            ),
            230 => 
            array (
                'id' => 231,
                'code' => '140121',
                'name' => '清徐县',
                'parentId' => '140100',
                'level' => '3',
            ),
            231 => 
            array (
                'id' => 232,
                'code' => '140122',
                'name' => '阳曲县',
                'parentId' => '140100',
                'level' => '3',
            ),
            232 => 
            array (
                'id' => 233,
                'code' => '140123',
                'name' => '娄烦县',
                'parentId' => '140100',
                'level' => '3',
            ),
            233 => 
            array (
                'id' => 234,
                'code' => '140181',
                'name' => '古交市',
                'parentId' => '140100',
                'level' => '3',
            ),
            234 => 
            array (
                'id' => 235,
                'code' => '140200',
                'name' => '大同市',
                'parentId' => '140000',
                'level' => '2',
            ),
            235 => 
            array (
                'id' => 236,
                'code' => '140202',
                'name' => '城区',
                'parentId' => '140200',
                'level' => '3',
            ),
            236 => 
            array (
                'id' => 237,
                'code' => '140203',
                'name' => '矿区',
                'parentId' => '140200',
                'level' => '3',
            ),
            237 => 
            array (
                'id' => 238,
                'code' => '140211',
                'name' => '南郊区',
                'parentId' => '140200',
                'level' => '3',
            ),
            238 => 
            array (
                'id' => 239,
                'code' => '140212',
                'name' => '新荣区',
                'parentId' => '140200',
                'level' => '3',
            ),
            239 => 
            array (
                'id' => 240,
                'code' => '140221',
                'name' => '阳高县',
                'parentId' => '140200',
                'level' => '3',
            ),
            240 => 
            array (
                'id' => 241,
                'code' => '140222',
                'name' => '天镇县',
                'parentId' => '140200',
                'level' => '3',
            ),
            241 => 
            array (
                'id' => 242,
                'code' => '140223',
                'name' => '广灵县',
                'parentId' => '140200',
                'level' => '3',
            ),
            242 => 
            array (
                'id' => 243,
                'code' => '140224',
                'name' => '灵丘县',
                'parentId' => '140200',
                'level' => '3',
            ),
            243 => 
            array (
                'id' => 244,
                'code' => '140225',
                'name' => '浑源县',
                'parentId' => '140200',
                'level' => '3',
            ),
            244 => 
            array (
                'id' => 245,
                'code' => '140226',
                'name' => '左云县',
                'parentId' => '140200',
                'level' => '3',
            ),
            245 => 
            array (
                'id' => 246,
                'code' => '140227',
                'name' => '大同县',
                'parentId' => '140200',
                'level' => '3',
            ),
            246 => 
            array (
                'id' => 247,
                'code' => '140300',
                'name' => '阳泉市',
                'parentId' => '140000',
                'level' => '2',
            ),
            247 => 
            array (
                'id' => 248,
                'code' => '140302',
                'name' => '城区',
                'parentId' => '140300',
                'level' => '3',
            ),
            248 => 
            array (
                'id' => 249,
                'code' => '140303',
                'name' => '矿区',
                'parentId' => '140300',
                'level' => '3',
            ),
            249 => 
            array (
                'id' => 250,
                'code' => '140311',
                'name' => '郊区',
                'parentId' => '140300',
                'level' => '3',
            ),
            250 => 
            array (
                'id' => 251,
                'code' => '140321',
                'name' => '平定县',
                'parentId' => '140300',
                'level' => '3',
            ),
            251 => 
            array (
                'id' => 252,
                'code' => '140322',
                'name' => '盂县',
                'parentId' => '140300',
                'level' => '3',
            ),
            252 => 
            array (
                'id' => 253,
                'code' => '140400',
                'name' => '长治市',
                'parentId' => '140000',
                'level' => '2',
            ),
            253 => 
            array (
                'id' => 254,
                'code' => '140402',
                'name' => '城区',
                'parentId' => '140400',
                'level' => '3',
            ),
            254 => 
            array (
                'id' => 255,
                'code' => '140411',
                'name' => '郊区',
                'parentId' => '140400',
                'level' => '3',
            ),
            255 => 
            array (
                'id' => 256,
                'code' => '140421',
                'name' => '长治县',
                'parentId' => '140400',
                'level' => '3',
            ),
            256 => 
            array (
                'id' => 257,
                'code' => '140423',
                'name' => '襄垣县',
                'parentId' => '140400',
                'level' => '3',
            ),
            257 => 
            array (
                'id' => 258,
                'code' => '140424',
                'name' => '屯留县',
                'parentId' => '140400',
                'level' => '3',
            ),
            258 => 
            array (
                'id' => 259,
                'code' => '140425',
                'name' => '平顺县',
                'parentId' => '140400',
                'level' => '3',
            ),
            259 => 
            array (
                'id' => 260,
                'code' => '140426',
                'name' => '黎城县',
                'parentId' => '140400',
                'level' => '3',
            ),
            260 => 
            array (
                'id' => 261,
                'code' => '140427',
                'name' => '壶关县',
                'parentId' => '140400',
                'level' => '3',
            ),
            261 => 
            array (
                'id' => 262,
                'code' => '140428',
                'name' => '长子县',
                'parentId' => '140400',
                'level' => '3',
            ),
            262 => 
            array (
                'id' => 263,
                'code' => '140429',
                'name' => '武乡县',
                'parentId' => '140400',
                'level' => '3',
            ),
            263 => 
            array (
                'id' => 264,
                'code' => '140430',
                'name' => '沁县',
                'parentId' => '140400',
                'level' => '3',
            ),
            264 => 
            array (
                'id' => 265,
                'code' => '140431',
                'name' => '沁源县',
                'parentId' => '140400',
                'level' => '3',
            ),
            265 => 
            array (
                'id' => 266,
                'code' => '140481',
                'name' => '潞城市',
                'parentId' => '140400',
                'level' => '3',
            ),
            266 => 
            array (
                'id' => 267,
                'code' => '140500',
                'name' => '晋城市',
                'parentId' => '140000',
                'level' => '2',
            ),
            267 => 
            array (
                'id' => 268,
                'code' => '140502',
                'name' => '城区',
                'parentId' => '140500',
                'level' => '3',
            ),
            268 => 
            array (
                'id' => 269,
                'code' => '140521',
                'name' => '沁水县',
                'parentId' => '140500',
                'level' => '3',
            ),
            269 => 
            array (
                'id' => 270,
                'code' => '140522',
                'name' => '阳城县',
                'parentId' => '140500',
                'level' => '3',
            ),
            270 => 
            array (
                'id' => 271,
                'code' => '140524',
                'name' => '陵川县',
                'parentId' => '140500',
                'level' => '3',
            ),
            271 => 
            array (
                'id' => 272,
                'code' => '140525',
                'name' => '泽州县',
                'parentId' => '140500',
                'level' => '3',
            ),
            272 => 
            array (
                'id' => 273,
                'code' => '140581',
                'name' => '高平市',
                'parentId' => '140500',
                'level' => '3',
            ),
            273 => 
            array (
                'id' => 274,
                'code' => '140600',
                'name' => '朔州市',
                'parentId' => '140000',
                'level' => '2',
            ),
            274 => 
            array (
                'id' => 275,
                'code' => '140602',
                'name' => '朔城区',
                'parentId' => '140600',
                'level' => '3',
            ),
            275 => 
            array (
                'id' => 276,
                'code' => '140603',
                'name' => '平鲁区',
                'parentId' => '140600',
                'level' => '3',
            ),
            276 => 
            array (
                'id' => 277,
                'code' => '140621',
                'name' => '山阴县',
                'parentId' => '140600',
                'level' => '3',
            ),
            277 => 
            array (
                'id' => 278,
                'code' => '140622',
                'name' => '应县',
                'parentId' => '140600',
                'level' => '3',
            ),
            278 => 
            array (
                'id' => 279,
                'code' => '140623',
                'name' => '右玉县',
                'parentId' => '140600',
                'level' => '3',
            ),
            279 => 
            array (
                'id' => 280,
                'code' => '140624',
                'name' => '怀仁县',
                'parentId' => '140600',
                'level' => '3',
            ),
            280 => 
            array (
                'id' => 281,
                'code' => '140700',
                'name' => '晋中市',
                'parentId' => '140000',
                'level' => '2',
            ),
            281 => 
            array (
                'id' => 282,
                'code' => '140702',
                'name' => '榆次区',
                'parentId' => '140700',
                'level' => '3',
            ),
            282 => 
            array (
                'id' => 283,
                'code' => '140721',
                'name' => '榆社县',
                'parentId' => '140700',
                'level' => '3',
            ),
            283 => 
            array (
                'id' => 284,
                'code' => '140722',
                'name' => '左权县',
                'parentId' => '140700',
                'level' => '3',
            ),
            284 => 
            array (
                'id' => 285,
                'code' => '140723',
                'name' => '和顺县',
                'parentId' => '140700',
                'level' => '3',
            ),
            285 => 
            array (
                'id' => 286,
                'code' => '140724',
                'name' => '昔阳县',
                'parentId' => '140700',
                'level' => '3',
            ),
            286 => 
            array (
                'id' => 287,
                'code' => '140725',
                'name' => '寿阳县',
                'parentId' => '140700',
                'level' => '3',
            ),
            287 => 
            array (
                'id' => 288,
                'code' => '140726',
                'name' => '太谷县',
                'parentId' => '140700',
                'level' => '3',
            ),
            288 => 
            array (
                'id' => 289,
                'code' => '140727',
                'name' => '祁县',
                'parentId' => '140700',
                'level' => '3',
            ),
            289 => 
            array (
                'id' => 290,
                'code' => '140728',
                'name' => '平遥县',
                'parentId' => '140700',
                'level' => '3',
            ),
            290 => 
            array (
                'id' => 291,
                'code' => '140729',
                'name' => '灵石县',
                'parentId' => '140700',
                'level' => '3',
            ),
            291 => 
            array (
                'id' => 292,
                'code' => '140781',
                'name' => '介休市',
                'parentId' => '140700',
                'level' => '3',
            ),
            292 => 
            array (
                'id' => 293,
                'code' => '140800',
                'name' => '运城市',
                'parentId' => '140000',
                'level' => '2',
            ),
            293 => 
            array (
                'id' => 294,
                'code' => '140802',
                'name' => '盐湖区',
                'parentId' => '140800',
                'level' => '3',
            ),
            294 => 
            array (
                'id' => 295,
                'code' => '140821',
                'name' => '临猗县',
                'parentId' => '140800',
                'level' => '3',
            ),
            295 => 
            array (
                'id' => 296,
                'code' => '140822',
                'name' => '万荣县',
                'parentId' => '140800',
                'level' => '3',
            ),
            296 => 
            array (
                'id' => 297,
                'code' => '140823',
                'name' => '闻喜县',
                'parentId' => '140800',
                'level' => '3',
            ),
            297 => 
            array (
                'id' => 298,
                'code' => '140824',
                'name' => '稷山县',
                'parentId' => '140800',
                'level' => '3',
            ),
            298 => 
            array (
                'id' => 299,
                'code' => '140825',
                'name' => '新绛县',
                'parentId' => '140800',
                'level' => '3',
            ),
            299 => 
            array (
                'id' => 300,
                'code' => '140826',
                'name' => '绛县',
                'parentId' => '140800',
                'level' => '3',
            ),
            300 => 
            array (
                'id' => 301,
                'code' => '140827',
                'name' => '垣曲县',
                'parentId' => '140800',
                'level' => '3',
            ),
            301 => 
            array (
                'id' => 302,
                'code' => '140828',
                'name' => '夏县',
                'parentId' => '140800',
                'level' => '3',
            ),
            302 => 
            array (
                'id' => 303,
                'code' => '140829',
                'name' => '平陆县',
                'parentId' => '140800',
                'level' => '3',
            ),
            303 => 
            array (
                'id' => 304,
                'code' => '140830',
                'name' => '芮城县',
                'parentId' => '140800',
                'level' => '3',
            ),
            304 => 
            array (
                'id' => 305,
                'code' => '140881',
                'name' => '永济市',
                'parentId' => '140800',
                'level' => '3',
            ),
            305 => 
            array (
                'id' => 306,
                'code' => '140882',
                'name' => '河津市',
                'parentId' => '140800',
                'level' => '3',
            ),
            306 => 
            array (
                'id' => 307,
                'code' => '140900',
                'name' => '忻州市',
                'parentId' => '140000',
                'level' => '2',
            ),
            307 => 
            array (
                'id' => 308,
                'code' => '140902',
                'name' => '忻府区',
                'parentId' => '140900',
                'level' => '3',
            ),
            308 => 
            array (
                'id' => 309,
                'code' => '140921',
                'name' => '定襄县',
                'parentId' => '140900',
                'level' => '3',
            ),
            309 => 
            array (
                'id' => 310,
                'code' => '140922',
                'name' => '五台县',
                'parentId' => '140900',
                'level' => '3',
            ),
            310 => 
            array (
                'id' => 311,
                'code' => '140923',
                'name' => '代县',
                'parentId' => '140900',
                'level' => '3',
            ),
            311 => 
            array (
                'id' => 312,
                'code' => '140924',
                'name' => '繁峙县',
                'parentId' => '140900',
                'level' => '3',
            ),
            312 => 
            array (
                'id' => 313,
                'code' => '140925',
                'name' => '宁武县',
                'parentId' => '140900',
                'level' => '3',
            ),
            313 => 
            array (
                'id' => 314,
                'code' => '140926',
                'name' => '静乐县',
                'parentId' => '140900',
                'level' => '3',
            ),
            314 => 
            array (
                'id' => 315,
                'code' => '140927',
                'name' => '神池县',
                'parentId' => '140900',
                'level' => '3',
            ),
            315 => 
            array (
                'id' => 316,
                'code' => '140928',
                'name' => '五寨县',
                'parentId' => '140900',
                'level' => '3',
            ),
            316 => 
            array (
                'id' => 317,
                'code' => '140929',
                'name' => '岢岚县',
                'parentId' => '140900',
                'level' => '3',
            ),
            317 => 
            array (
                'id' => 318,
                'code' => '140930',
                'name' => '河曲县',
                'parentId' => '140900',
                'level' => '3',
            ),
            318 => 
            array (
                'id' => 319,
                'code' => '140931',
                'name' => '保德县',
                'parentId' => '140900',
                'level' => '3',
            ),
            319 => 
            array (
                'id' => 320,
                'code' => '140932',
                'name' => '偏关县',
                'parentId' => '140900',
                'level' => '3',
            ),
            320 => 
            array (
                'id' => 321,
                'code' => '140981',
                'name' => '原平市',
                'parentId' => '140900',
                'level' => '3',
            ),
            321 => 
            array (
                'id' => 322,
                'code' => '141000',
                'name' => '临汾市',
                'parentId' => '140000',
                'level' => '2',
            ),
            322 => 
            array (
                'id' => 323,
                'code' => '141002',
                'name' => '尧都区',
                'parentId' => '141000',
                'level' => '3',
            ),
            323 => 
            array (
                'id' => 324,
                'code' => '141021',
                'name' => '曲沃县',
                'parentId' => '141000',
                'level' => '3',
            ),
            324 => 
            array (
                'id' => 325,
                'code' => '141022',
                'name' => '翼城县',
                'parentId' => '141000',
                'level' => '3',
            ),
            325 => 
            array (
                'id' => 326,
                'code' => '141023',
                'name' => '襄汾县',
                'parentId' => '141000',
                'level' => '3',
            ),
            326 => 
            array (
                'id' => 327,
                'code' => '141024',
                'name' => '洪洞县',
                'parentId' => '141000',
                'level' => '3',
            ),
            327 => 
            array (
                'id' => 328,
                'code' => '141025',
                'name' => '古县',
                'parentId' => '141000',
                'level' => '3',
            ),
            328 => 
            array (
                'id' => 329,
                'code' => '141026',
                'name' => '安泽县',
                'parentId' => '141000',
                'level' => '3',
            ),
            329 => 
            array (
                'id' => 330,
                'code' => '141027',
                'name' => '浮山县',
                'parentId' => '141000',
                'level' => '3',
            ),
            330 => 
            array (
                'id' => 331,
                'code' => '141028',
                'name' => '吉县',
                'parentId' => '141000',
                'level' => '3',
            ),
            331 => 
            array (
                'id' => 332,
                'code' => '141029',
                'name' => '乡宁县',
                'parentId' => '141000',
                'level' => '3',
            ),
            332 => 
            array (
                'id' => 333,
                'code' => '141030',
                'name' => '大宁县',
                'parentId' => '141000',
                'level' => '3',
            ),
            333 => 
            array (
                'id' => 334,
                'code' => '141031',
                'name' => '隰县',
                'parentId' => '141000',
                'level' => '3',
            ),
            334 => 
            array (
                'id' => 335,
                'code' => '141032',
                'name' => '永和县',
                'parentId' => '141000',
                'level' => '3',
            ),
            335 => 
            array (
                'id' => 336,
                'code' => '141033',
                'name' => '蒲县',
                'parentId' => '141000',
                'level' => '3',
            ),
            336 => 
            array (
                'id' => 337,
                'code' => '141034',
                'name' => '汾西县',
                'parentId' => '141000',
                'level' => '3',
            ),
            337 => 
            array (
                'id' => 338,
                'code' => '141081',
                'name' => '侯马市',
                'parentId' => '141000',
                'level' => '3',
            ),
            338 => 
            array (
                'id' => 339,
                'code' => '141082',
                'name' => '霍州市',
                'parentId' => '141000',
                'level' => '3',
            ),
            339 => 
            array (
                'id' => 340,
                'code' => '141100',
                'name' => '吕梁市',
                'parentId' => '140000',
                'level' => '2',
            ),
            340 => 
            array (
                'id' => 341,
                'code' => '141102',
                'name' => '离石区',
                'parentId' => '141100',
                'level' => '3',
            ),
            341 => 
            array (
                'id' => 342,
                'code' => '141121',
                'name' => '文水县',
                'parentId' => '141100',
                'level' => '3',
            ),
            342 => 
            array (
                'id' => 343,
                'code' => '141122',
                'name' => '交城县',
                'parentId' => '141100',
                'level' => '3',
            ),
            343 => 
            array (
                'id' => 344,
                'code' => '141123',
                'name' => '兴县',
                'parentId' => '141100',
                'level' => '3',
            ),
            344 => 
            array (
                'id' => 345,
                'code' => '141124',
                'name' => '临县',
                'parentId' => '141100',
                'level' => '3',
            ),
            345 => 
            array (
                'id' => 346,
                'code' => '141125',
                'name' => '柳林县',
                'parentId' => '141100',
                'level' => '3',
            ),
            346 => 
            array (
                'id' => 347,
                'code' => '141126',
                'name' => '石楼县',
                'parentId' => '141100',
                'level' => '3',
            ),
            347 => 
            array (
                'id' => 348,
                'code' => '141127',
                'name' => '岚县',
                'parentId' => '141100',
                'level' => '3',
            ),
            348 => 
            array (
                'id' => 349,
                'code' => '141128',
                'name' => '方山县',
                'parentId' => '141100',
                'level' => '3',
            ),
            349 => 
            array (
                'id' => 350,
                'code' => '141129',
                'name' => '中阳县',
                'parentId' => '141100',
                'level' => '3',
            ),
            350 => 
            array (
                'id' => 351,
                'code' => '141130',
                'name' => '交口县',
                'parentId' => '141100',
                'level' => '3',
            ),
            351 => 
            array (
                'id' => 352,
                'code' => '141181',
                'name' => '孝义市',
                'parentId' => '141100',
                'level' => '3',
            ),
            352 => 
            array (
                'id' => 353,
                'code' => '141182',
                'name' => '汾阳市',
                'parentId' => '141100',
                'level' => '3',
            ),
            353 => 
            array (
                'id' => 354,
                'code' => '150000',
                'name' => '内蒙古自治区',
                'parentId' => '100000',
                'level' => '1',
            ),
            354 => 
            array (
                'id' => 355,
                'code' => '150100',
                'name' => '呼和浩特市',
                'parentId' => '150000',
                'level' => '2',
            ),
            355 => 
            array (
                'id' => 356,
                'code' => '150102',
                'name' => '新城区',
                'parentId' => '150100',
                'level' => '3',
            ),
            356 => 
            array (
                'id' => 357,
                'code' => '150103',
                'name' => '回民区',
                'parentId' => '150100',
                'level' => '3',
            ),
            357 => 
            array (
                'id' => 358,
                'code' => '150104',
                'name' => '玉泉区',
                'parentId' => '150100',
                'level' => '3',
            ),
            358 => 
            array (
                'id' => 359,
                'code' => '150105',
                'name' => '赛罕区',
                'parentId' => '150100',
                'level' => '3',
            ),
            359 => 
            array (
                'id' => 360,
                'code' => '150121',
                'name' => '土默特左旗',
                'parentId' => '150100',
                'level' => '3',
            ),
            360 => 
            array (
                'id' => 361,
                'code' => '150122',
                'name' => '托克托县',
                'parentId' => '150100',
                'level' => '3',
            ),
            361 => 
            array (
                'id' => 362,
                'code' => '150123',
                'name' => '和林格尔县',
                'parentId' => '150100',
                'level' => '3',
            ),
            362 => 
            array (
                'id' => 363,
                'code' => '150124',
                'name' => '清水河县',
                'parentId' => '150100',
                'level' => '3',
            ),
            363 => 
            array (
                'id' => 364,
                'code' => '150125',
                'name' => '武川县',
                'parentId' => '150100',
                'level' => '3',
            ),
            364 => 
            array (
                'id' => 365,
                'code' => '150200',
                'name' => '包头市',
                'parentId' => '150000',
                'level' => '2',
            ),
            365 => 
            array (
                'id' => 366,
                'code' => '150202',
                'name' => '东河区',
                'parentId' => '150200',
                'level' => '3',
            ),
            366 => 
            array (
                'id' => 367,
                'code' => '150203',
                'name' => '昆都仑区',
                'parentId' => '150200',
                'level' => '3',
            ),
            367 => 
            array (
                'id' => 368,
                'code' => '150204',
                'name' => '青山区',
                'parentId' => '150200',
                'level' => '3',
            ),
            368 => 
            array (
                'id' => 369,
                'code' => '150205',
                'name' => '石拐区',
                'parentId' => '150200',
                'level' => '3',
            ),
            369 => 
            array (
                'id' => 370,
                'code' => '150206',
                'name' => '白云鄂博矿区',
                'parentId' => '150200',
                'level' => '3',
            ),
            370 => 
            array (
                'id' => 371,
                'code' => '150207',
                'name' => '九原区',
                'parentId' => '150200',
                'level' => '3',
            ),
            371 => 
            array (
                'id' => 372,
                'code' => '150221',
                'name' => '土默特右旗',
                'parentId' => '150200',
                'level' => '3',
            ),
            372 => 
            array (
                'id' => 373,
                'code' => '150222',
                'name' => '固阳县',
                'parentId' => '150200',
                'level' => '3',
            ),
            373 => 
            array (
                'id' => 374,
                'code' => '150223',
                'name' => '达尔罕茂明安联合旗',
                'parentId' => '150200',
                'level' => '3',
            ),
            374 => 
            array (
                'id' => 375,
                'code' => '150300',
                'name' => '乌海市',
                'parentId' => '150000',
                'level' => '2',
            ),
            375 => 
            array (
                'id' => 376,
                'code' => '150302',
                'name' => '海勃湾区',
                'parentId' => '150300',
                'level' => '3',
            ),
            376 => 
            array (
                'id' => 377,
                'code' => '150303',
                'name' => '海南区',
                'parentId' => '150300',
                'level' => '3',
            ),
            377 => 
            array (
                'id' => 378,
                'code' => '150304',
                'name' => '乌达区',
                'parentId' => '150300',
                'level' => '3',
            ),
            378 => 
            array (
                'id' => 379,
                'code' => '150400',
                'name' => '赤峰市',
                'parentId' => '150000',
                'level' => '2',
            ),
            379 => 
            array (
                'id' => 380,
                'code' => '150402',
                'name' => '红山区',
                'parentId' => '150400',
                'level' => '3',
            ),
            380 => 
            array (
                'id' => 381,
                'code' => '150403',
                'name' => '元宝山区',
                'parentId' => '150400',
                'level' => '3',
            ),
            381 => 
            array (
                'id' => 382,
                'code' => '150404',
                'name' => '松山区',
                'parentId' => '150400',
                'level' => '3',
            ),
            382 => 
            array (
                'id' => 383,
                'code' => '150421',
                'name' => '阿鲁科尔沁旗',
                'parentId' => '150400',
                'level' => '3',
            ),
            383 => 
            array (
                'id' => 384,
                'code' => '150422',
                'name' => '巴林左旗',
                'parentId' => '150400',
                'level' => '3',
            ),
            384 => 
            array (
                'id' => 385,
                'code' => '150423',
                'name' => '巴林右旗',
                'parentId' => '150400',
                'level' => '3',
            ),
            385 => 
            array (
                'id' => 386,
                'code' => '150424',
                'name' => '林西县',
                'parentId' => '150400',
                'level' => '3',
            ),
            386 => 
            array (
                'id' => 387,
                'code' => '150425',
                'name' => '克什克腾旗',
                'parentId' => '150400',
                'level' => '3',
            ),
            387 => 
            array (
                'id' => 388,
                'code' => '150426',
                'name' => '翁牛特旗',
                'parentId' => '150400',
                'level' => '3',
            ),
            388 => 
            array (
                'id' => 389,
                'code' => '150428',
                'name' => '喀喇沁旗',
                'parentId' => '150400',
                'level' => '3',
            ),
            389 => 
            array (
                'id' => 390,
                'code' => '150429',
                'name' => '宁城县',
                'parentId' => '150400',
                'level' => '3',
            ),
            390 => 
            array (
                'id' => 391,
                'code' => '150430',
                'name' => '敖汉旗',
                'parentId' => '150400',
                'level' => '3',
            ),
            391 => 
            array (
                'id' => 392,
                'code' => '150500',
                'name' => '通辽市',
                'parentId' => '150000',
                'level' => '2',
            ),
            392 => 
            array (
                'id' => 393,
                'code' => '150502',
                'name' => '科尔沁区',
                'parentId' => '150500',
                'level' => '3',
            ),
            393 => 
            array (
                'id' => 394,
                'code' => '150521',
                'name' => '科尔沁左翼中旗',
                'parentId' => '150500',
                'level' => '3',
            ),
            394 => 
            array (
                'id' => 395,
                'code' => '150522',
                'name' => '科尔沁左翼后旗',
                'parentId' => '150500',
                'level' => '3',
            ),
            395 => 
            array (
                'id' => 396,
                'code' => '150523',
                'name' => '开鲁县',
                'parentId' => '150500',
                'level' => '3',
            ),
            396 => 
            array (
                'id' => 397,
                'code' => '150524',
                'name' => '库伦旗',
                'parentId' => '150500',
                'level' => '3',
            ),
            397 => 
            array (
                'id' => 398,
                'code' => '150525',
                'name' => '奈曼旗',
                'parentId' => '150500',
                'level' => '3',
            ),
            398 => 
            array (
                'id' => 399,
                'code' => '150526',
                'name' => '扎鲁特旗',
                'parentId' => '150500',
                'level' => '3',
            ),
            399 => 
            array (
                'id' => 400,
                'code' => '150581',
                'name' => '霍林郭勒市',
                'parentId' => '150500',
                'level' => '3',
            ),
            400 => 
            array (
                'id' => 401,
                'code' => '150600',
                'name' => '鄂尔多斯市',
                'parentId' => '150000',
                'level' => '2',
            ),
            401 => 
            array (
                'id' => 402,
                'code' => '150602',
                'name' => '东胜区',
                'parentId' => '150600',
                'level' => '3',
            ),
            402 => 
            array (
                'id' => 403,
                'code' => '150621',
                'name' => '达拉特旗',
                'parentId' => '150600',
                'level' => '3',
            ),
            403 => 
            array (
                'id' => 404,
                'code' => '150622',
                'name' => '准格尔旗',
                'parentId' => '150600',
                'level' => '3',
            ),
            404 => 
            array (
                'id' => 405,
                'code' => '150623',
                'name' => '鄂托克前旗',
                'parentId' => '150600',
                'level' => '3',
            ),
            405 => 
            array (
                'id' => 406,
                'code' => '150624',
                'name' => '鄂托克旗',
                'parentId' => '150600',
                'level' => '3',
            ),
            406 => 
            array (
                'id' => 407,
                'code' => '150625',
                'name' => '杭锦旗',
                'parentId' => '150600',
                'level' => '3',
            ),
            407 => 
            array (
                'id' => 408,
                'code' => '150626',
                'name' => '乌审旗',
                'parentId' => '150600',
                'level' => '3',
            ),
            408 => 
            array (
                'id' => 409,
                'code' => '150627',
                'name' => '伊金霍洛旗',
                'parentId' => '150600',
                'level' => '3',
            ),
            409 => 
            array (
                'id' => 410,
                'code' => '150628',
                'name' => '康巴什新区',
                'parentId' => '150600',
                'level' => '3',
            ),
            410 => 
            array (
                'id' => 411,
                'code' => '150700',
                'name' => '呼伦贝尔市',
                'parentId' => '150000',
                'level' => '2',
            ),
            411 => 
            array (
                'id' => 412,
                'code' => '150702',
                'name' => '海拉尔区',
                'parentId' => '150700',
                'level' => '3',
            ),
            412 => 
            array (
                'id' => 413,
                'code' => '150703',
                'name' => '扎赉诺尔区',
                'parentId' => '150700',
                'level' => '3',
            ),
            413 => 
            array (
                'id' => 414,
                'code' => '150721',
                'name' => '阿荣旗',
                'parentId' => '150700',
                'level' => '3',
            ),
            414 => 
            array (
                'id' => 415,
                'code' => '150722',
                'name' => '莫力达瓦达斡尔族自治旗',
                'parentId' => '150700',
                'level' => '3',
            ),
            415 => 
            array (
                'id' => 416,
                'code' => '150723',
                'name' => '鄂伦春自治旗',
                'parentId' => '150700',
                'level' => '3',
            ),
            416 => 
            array (
                'id' => 417,
                'code' => '150724',
                'name' => '鄂温克族自治旗',
                'parentId' => '150700',
                'level' => '3',
            ),
            417 => 
            array (
                'id' => 418,
                'code' => '150725',
                'name' => '陈巴尔虎旗',
                'parentId' => '150700',
                'level' => '3',
            ),
            418 => 
            array (
                'id' => 419,
                'code' => '150726',
                'name' => '新巴尔虎左旗',
                'parentId' => '150700',
                'level' => '3',
            ),
            419 => 
            array (
                'id' => 420,
                'code' => '150727',
                'name' => '新巴尔虎右旗',
                'parentId' => '150700',
                'level' => '3',
            ),
            420 => 
            array (
                'id' => 421,
                'code' => '150781',
                'name' => '满洲里市',
                'parentId' => '150700',
                'level' => '3',
            ),
            421 => 
            array (
                'id' => 422,
                'code' => '150782',
                'name' => '牙克石市',
                'parentId' => '150700',
                'level' => '3',
            ),
            422 => 
            array (
                'id' => 423,
                'code' => '150783',
                'name' => '扎兰屯市',
                'parentId' => '150700',
                'level' => '3',
            ),
            423 => 
            array (
                'id' => 424,
                'code' => '150784',
                'name' => '额尔古纳市',
                'parentId' => '150700',
                'level' => '3',
            ),
            424 => 
            array (
                'id' => 425,
                'code' => '150785',
                'name' => '根河市',
                'parentId' => '150700',
                'level' => '3',
            ),
            425 => 
            array (
                'id' => 426,
                'code' => '150800',
                'name' => '巴彦淖尔市',
                'parentId' => '150000',
                'level' => '2',
            ),
            426 => 
            array (
                'id' => 427,
                'code' => '150802',
                'name' => '临河区',
                'parentId' => '150800',
                'level' => '3',
            ),
            427 => 
            array (
                'id' => 428,
                'code' => '150821',
                'name' => '五原县',
                'parentId' => '150800',
                'level' => '3',
            ),
            428 => 
            array (
                'id' => 429,
                'code' => '150822',
                'name' => '磴口县',
                'parentId' => '150800',
                'level' => '3',
            ),
            429 => 
            array (
                'id' => 430,
                'code' => '150823',
                'name' => '乌拉特前旗',
                'parentId' => '150800',
                'level' => '3',
            ),
            430 => 
            array (
                'id' => 431,
                'code' => '150824',
                'name' => '乌拉特中旗',
                'parentId' => '150800',
                'level' => '3',
            ),
            431 => 
            array (
                'id' => 432,
                'code' => '150825',
                'name' => '乌拉特后旗',
                'parentId' => '150800',
                'level' => '3',
            ),
            432 => 
            array (
                'id' => 433,
                'code' => '150826',
                'name' => '杭锦后旗',
                'parentId' => '150800',
                'level' => '3',
            ),
            433 => 
            array (
                'id' => 434,
                'code' => '150900',
                'name' => '乌兰察布市',
                'parentId' => '150000',
                'level' => '2',
            ),
            434 => 
            array (
                'id' => 435,
                'code' => '150902',
                'name' => '集宁区',
                'parentId' => '150900',
                'level' => '3',
            ),
            435 => 
            array (
                'id' => 436,
                'code' => '150921',
                'name' => '卓资县',
                'parentId' => '150900',
                'level' => '3',
            ),
            436 => 
            array (
                'id' => 437,
                'code' => '150922',
                'name' => '化德县',
                'parentId' => '150900',
                'level' => '3',
            ),
            437 => 
            array (
                'id' => 438,
                'code' => '150923',
                'name' => '商都县',
                'parentId' => '150900',
                'level' => '3',
            ),
            438 => 
            array (
                'id' => 439,
                'code' => '150924',
                'name' => '兴和县',
                'parentId' => '150900',
                'level' => '3',
            ),
            439 => 
            array (
                'id' => 440,
                'code' => '150925',
                'name' => '凉城县',
                'parentId' => '150900',
                'level' => '3',
            ),
            440 => 
            array (
                'id' => 441,
                'code' => '150926',
                'name' => '察哈尔右翼前旗',
                'parentId' => '150900',
                'level' => '3',
            ),
            441 => 
            array (
                'id' => 442,
                'code' => '150927',
                'name' => '察哈尔右翼中旗',
                'parentId' => '150900',
                'level' => '3',
            ),
            442 => 
            array (
                'id' => 443,
                'code' => '150928',
                'name' => '察哈尔右翼后旗',
                'parentId' => '150900',
                'level' => '3',
            ),
            443 => 
            array (
                'id' => 444,
                'code' => '150929',
                'name' => '四子王旗',
                'parentId' => '150900',
                'level' => '3',
            ),
            444 => 
            array (
                'id' => 445,
                'code' => '150981',
                'name' => '丰镇市',
                'parentId' => '150900',
                'level' => '3',
            ),
            445 => 
            array (
                'id' => 446,
                'code' => '152200',
                'name' => '兴安盟',
                'parentId' => '150000',
                'level' => '2',
            ),
            446 => 
            array (
                'id' => 447,
                'code' => '152201',
                'name' => '乌兰浩特市',
                'parentId' => '152200',
                'level' => '3',
            ),
            447 => 
            array (
                'id' => 448,
                'code' => '152202',
                'name' => '阿尔山市',
                'parentId' => '152200',
                'level' => '3',
            ),
            448 => 
            array (
                'id' => 449,
                'code' => '152221',
                'name' => '科尔沁右翼前旗',
                'parentId' => '152200',
                'level' => '3',
            ),
            449 => 
            array (
                'id' => 450,
                'code' => '152222',
                'name' => '科尔沁右翼中旗',
                'parentId' => '152200',
                'level' => '3',
            ),
            450 => 
            array (
                'id' => 451,
                'code' => '152223',
                'name' => '扎赉特旗',
                'parentId' => '152200',
                'level' => '3',
            ),
            451 => 
            array (
                'id' => 452,
                'code' => '152224',
                'name' => '突泉县',
                'parentId' => '152200',
                'level' => '3',
            ),
            452 => 
            array (
                'id' => 453,
                'code' => '152500',
                'name' => '锡林郭勒盟',
                'parentId' => '150000',
                'level' => '2',
            ),
            453 => 
            array (
                'id' => 454,
                'code' => '152501',
                'name' => '二连浩特市',
                'parentId' => '152500',
                'level' => '3',
            ),
            454 => 
            array (
                'id' => 455,
                'code' => '152502',
                'name' => '锡林浩特市',
                'parentId' => '152500',
                'level' => '3',
            ),
            455 => 
            array (
                'id' => 456,
                'code' => '152522',
                'name' => '阿巴嘎旗',
                'parentId' => '152500',
                'level' => '3',
            ),
            456 => 
            array (
                'id' => 457,
                'code' => '152523',
                'name' => '苏尼特左旗',
                'parentId' => '152500',
                'level' => '3',
            ),
            457 => 
            array (
                'id' => 458,
                'code' => '152524',
                'name' => '苏尼特右旗',
                'parentId' => '152500',
                'level' => '3',
            ),
            458 => 
            array (
                'id' => 459,
                'code' => '152525',
                'name' => '东乌珠穆沁旗',
                'parentId' => '152500',
                'level' => '3',
            ),
            459 => 
            array (
                'id' => 460,
                'code' => '152526',
                'name' => '西乌珠穆沁旗',
                'parentId' => '152500',
                'level' => '3',
            ),
            460 => 
            array (
                'id' => 461,
                'code' => '152527',
                'name' => '太仆寺旗',
                'parentId' => '152500',
                'level' => '3',
            ),
            461 => 
            array (
                'id' => 462,
                'code' => '152528',
                'name' => '镶黄旗',
                'parentId' => '152500',
                'level' => '3',
            ),
            462 => 
            array (
                'id' => 463,
                'code' => '152529',
                'name' => '正镶白旗',
                'parentId' => '152500',
                'level' => '3',
            ),
            463 => 
            array (
                'id' => 464,
                'code' => '152530',
                'name' => '正蓝旗',
                'parentId' => '152500',
                'level' => '3',
            ),
            464 => 
            array (
                'id' => 465,
                'code' => '152531',
                'name' => '多伦县',
                'parentId' => '152500',
                'level' => '3',
            ),
            465 => 
            array (
                'id' => 466,
                'code' => '152900',
                'name' => '阿拉善盟',
                'parentId' => '150000',
                'level' => '2',
            ),
            466 => 
            array (
                'id' => 467,
                'code' => '152921',
                'name' => '阿拉善左旗',
                'parentId' => '152900',
                'level' => '3',
            ),
            467 => 
            array (
                'id' => 468,
                'code' => '152922',
                'name' => '阿拉善右旗',
                'parentId' => '152900',
                'level' => '3',
            ),
            468 => 
            array (
                'id' => 469,
                'code' => '152923',
                'name' => '额济纳旗',
                'parentId' => '152900',
                'level' => '3',
            ),
            469 => 
            array (
                'id' => 470,
                'code' => '210000',
                'name' => '辽宁省',
                'parentId' => '100000',
                'level' => '1',
            ),
            470 => 
            array (
                'id' => 471,
                'code' => '210100',
                'name' => '沈阳市',
                'parentId' => '210000',
                'level' => '2',
            ),
            471 => 
            array (
                'id' => 472,
                'code' => '210102',
                'name' => '和平区',
                'parentId' => '210100',
                'level' => '3',
            ),
            472 => 
            array (
                'id' => 473,
                'code' => '210103',
                'name' => '沈河区',
                'parentId' => '210100',
                'level' => '3',
            ),
            473 => 
            array (
                'id' => 474,
                'code' => '210104',
                'name' => '大东区',
                'parentId' => '210100',
                'level' => '3',
            ),
            474 => 
            array (
                'id' => 475,
                'code' => '210105',
                'name' => '皇姑区',
                'parentId' => '210100',
                'level' => '3',
            ),
            475 => 
            array (
                'id' => 476,
                'code' => '210106',
                'name' => '铁西区',
                'parentId' => '210100',
                'level' => '3',
            ),
            476 => 
            array (
                'id' => 477,
                'code' => '210111',
                'name' => '苏家屯区',
                'parentId' => '210100',
                'level' => '3',
            ),
            477 => 
            array (
                'id' => 478,
                'code' => '210112',
                'name' => '浑南区',
                'parentId' => '210100',
                'level' => '3',
            ),
            478 => 
            array (
                'id' => 479,
                'code' => '210113',
                'name' => '沈北新区',
                'parentId' => '210100',
                'level' => '3',
            ),
            479 => 
            array (
                'id' => 480,
                'code' => '210114',
                'name' => '于洪区',
                'parentId' => '210100',
                'level' => '3',
            ),
            480 => 
            array (
                'id' => 481,
                'code' => '210122',
                'name' => '辽中县',
                'parentId' => '210100',
                'level' => '3',
            ),
            481 => 
            array (
                'id' => 482,
                'code' => '210123',
                'name' => '康平县',
                'parentId' => '210100',
                'level' => '3',
            ),
            482 => 
            array (
                'id' => 483,
                'code' => '210124',
                'name' => '法库县',
                'parentId' => '210100',
                'level' => '3',
            ),
            483 => 
            array (
                'id' => 484,
                'code' => '210181',
                'name' => '新民市',
                'parentId' => '210100',
                'level' => '3',
            ),
            484 => 
            array (
                'id' => 485,
                'code' => '210200',
                'name' => '大连市',
                'parentId' => '210000',
                'level' => '2',
            ),
            485 => 
            array (
                'id' => 486,
                'code' => '210202',
                'name' => '中山区',
                'parentId' => '210200',
                'level' => '3',
            ),
            486 => 
            array (
                'id' => 487,
                'code' => '210203',
                'name' => '西岗区',
                'parentId' => '210200',
                'level' => '3',
            ),
            487 => 
            array (
                'id' => 488,
                'code' => '210204',
                'name' => '沙河口区',
                'parentId' => '210200',
                'level' => '3',
            ),
            488 => 
            array (
                'id' => 489,
                'code' => '210211',
                'name' => '甘井子区',
                'parentId' => '210200',
                'level' => '3',
            ),
            489 => 
            array (
                'id' => 490,
                'code' => '210212',
                'name' => '旅顺口区',
                'parentId' => '210200',
                'level' => '3',
            ),
            490 => 
            array (
                'id' => 491,
                'code' => '210213',
                'name' => '金州区',
                'parentId' => '210200',
                'level' => '3',
            ),
            491 => 
            array (
                'id' => 492,
                'code' => '210224',
                'name' => '长海县',
                'parentId' => '210200',
                'level' => '3',
            ),
            492 => 
            array (
                'id' => 493,
                'code' => '210281',
                'name' => '瓦房店市',
                'parentId' => '210200',
                'level' => '3',
            ),
            493 => 
            array (
                'id' => 494,
                'code' => '210282',
                'name' => '普兰店市',
                'parentId' => '210200',
                'level' => '3',
            ),
            494 => 
            array (
                'id' => 495,
                'code' => '210283',
                'name' => '庄河市',
                'parentId' => '210200',
                'level' => '3',
            ),
            495 => 
            array (
                'id' => 496,
                'code' => '210284',
                'name' => '金普新区',
                'parentId' => '210200',
                'level' => '3',
            ),
            496 => 
            array (
                'id' => 497,
                'code' => '210300',
                'name' => '鞍山市',
                'parentId' => '210000',
                'level' => '2',
            ),
            497 => 
            array (
                'id' => 498,
                'code' => '210302',
                'name' => '铁东区',
                'parentId' => '210300',
                'level' => '3',
            ),
            498 => 
            array (
                'id' => 499,
                'code' => '210303',
                'name' => '铁西区',
                'parentId' => '210300',
                'level' => '3',
            ),
            499 => 
            array (
                'id' => 500,
                'code' => '210304',
                'name' => '立山区',
                'parentId' => '210300',
                'level' => '3',
            ),
        ));
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 501,
                'code' => '210311',
                'name' => '千山区',
                'parentId' => '210300',
                'level' => '3',
            ),
            1 => 
            array (
                'id' => 502,
                'code' => '210321',
                'name' => '台安县',
                'parentId' => '210300',
                'level' => '3',
            ),
            2 => 
            array (
                'id' => 503,
                'code' => '210323',
                'name' => '岫岩满族自治县',
                'parentId' => '210300',
                'level' => '3',
            ),
            3 => 
            array (
                'id' => 504,
                'code' => '210381',
                'name' => '海城市',
                'parentId' => '210300',
                'level' => '3',
            ),
            4 => 
            array (
                'id' => 505,
                'code' => '210400',
                'name' => '抚顺市',
                'parentId' => '210000',
                'level' => '2',
            ),
            5 => 
            array (
                'id' => 506,
                'code' => '210402',
                'name' => '新抚区',
                'parentId' => '210400',
                'level' => '3',
            ),
            6 => 
            array (
                'id' => 507,
                'code' => '210403',
                'name' => '东洲区',
                'parentId' => '210400',
                'level' => '3',
            ),
            7 => 
            array (
                'id' => 508,
                'code' => '210404',
                'name' => '望花区',
                'parentId' => '210400',
                'level' => '3',
            ),
            8 => 
            array (
                'id' => 509,
                'code' => '210411',
                'name' => '顺城区',
                'parentId' => '210400',
                'level' => '3',
            ),
            9 => 
            array (
                'id' => 510,
                'code' => '210421',
                'name' => '抚顺县',
                'parentId' => '210400',
                'level' => '3',
            ),
            10 => 
            array (
                'id' => 511,
                'code' => '210422',
                'name' => '新宾满族自治县',
                'parentId' => '210400',
                'level' => '3',
            ),
            11 => 
            array (
                'id' => 512,
                'code' => '210423',
                'name' => '清原满族自治县',
                'parentId' => '210400',
                'level' => '3',
            ),
            12 => 
            array (
                'id' => 513,
                'code' => '210500',
                'name' => '本溪市',
                'parentId' => '210000',
                'level' => '2',
            ),
            13 => 
            array (
                'id' => 514,
                'code' => '210502',
                'name' => '平山区',
                'parentId' => '210500',
                'level' => '3',
            ),
            14 => 
            array (
                'id' => 515,
                'code' => '210503',
                'name' => '溪湖区',
                'parentId' => '210500',
                'level' => '3',
            ),
            15 => 
            array (
                'id' => 516,
                'code' => '210504',
                'name' => '明山区',
                'parentId' => '210500',
                'level' => '3',
            ),
            16 => 
            array (
                'id' => 517,
                'code' => '210505',
                'name' => '南芬区',
                'parentId' => '210500',
                'level' => '3',
            ),
            17 => 
            array (
                'id' => 518,
                'code' => '210521',
                'name' => '本溪满族自治县',
                'parentId' => '210500',
                'level' => '3',
            ),
            18 => 
            array (
                'id' => 519,
                'code' => '210522',
                'name' => '桓仁满族自治县',
                'parentId' => '210500',
                'level' => '3',
            ),
            19 => 
            array (
                'id' => 520,
                'code' => '210600',
                'name' => '丹东市',
                'parentId' => '210000',
                'level' => '2',
            ),
            20 => 
            array (
                'id' => 521,
                'code' => '210602',
                'name' => '元宝区',
                'parentId' => '210600',
                'level' => '3',
            ),
            21 => 
            array (
                'id' => 522,
                'code' => '210603',
                'name' => '振兴区',
                'parentId' => '210600',
                'level' => '3',
            ),
            22 => 
            array (
                'id' => 523,
                'code' => '210604',
                'name' => '振安区',
                'parentId' => '210600',
                'level' => '3',
            ),
            23 => 
            array (
                'id' => 524,
                'code' => '210624',
                'name' => '宽甸满族自治县',
                'parentId' => '210600',
                'level' => '3',
            ),
            24 => 
            array (
                'id' => 525,
                'code' => '210681',
                'name' => '东港市',
                'parentId' => '210600',
                'level' => '3',
            ),
            25 => 
            array (
                'id' => 526,
                'code' => '210682',
                'name' => '凤城市',
                'parentId' => '210600',
                'level' => '3',
            ),
            26 => 
            array (
                'id' => 527,
                'code' => '210700',
                'name' => '锦州市',
                'parentId' => '210000',
                'level' => '2',
            ),
            27 => 
            array (
                'id' => 528,
                'code' => '210702',
                'name' => '古塔区',
                'parentId' => '210700',
                'level' => '3',
            ),
            28 => 
            array (
                'id' => 529,
                'code' => '210703',
                'name' => '凌河区',
                'parentId' => '210700',
                'level' => '3',
            ),
            29 => 
            array (
                'id' => 530,
                'code' => '210711',
                'name' => '太和区',
                'parentId' => '210700',
                'level' => '3',
            ),
            30 => 
            array (
                'id' => 531,
                'code' => '210726',
                'name' => '黑山县',
                'parentId' => '210700',
                'level' => '3',
            ),
            31 => 
            array (
                'id' => 532,
                'code' => '210727',
                'name' => '义县',
                'parentId' => '210700',
                'level' => '3',
            ),
            32 => 
            array (
                'id' => 533,
                'code' => '210781',
                'name' => '凌海市',
                'parentId' => '210700',
                'level' => '3',
            ),
            33 => 
            array (
                'id' => 534,
                'code' => '210782',
                'name' => '北镇市',
                'parentId' => '210700',
                'level' => '3',
            ),
            34 => 
            array (
                'id' => 535,
                'code' => '210800',
                'name' => '营口市',
                'parentId' => '210000',
                'level' => '2',
            ),
            35 => 
            array (
                'id' => 536,
                'code' => '210802',
                'name' => '站前区',
                'parentId' => '210800',
                'level' => '3',
            ),
            36 => 
            array (
                'id' => 537,
                'code' => '210803',
                'name' => '西市区',
                'parentId' => '210800',
                'level' => '3',
            ),
            37 => 
            array (
                'id' => 538,
                'code' => '210804',
                'name' => '鲅鱼圈区',
                'parentId' => '210800',
                'level' => '3',
            ),
            38 => 
            array (
                'id' => 539,
                'code' => '210811',
                'name' => '老边区',
                'parentId' => '210800',
                'level' => '3',
            ),
            39 => 
            array (
                'id' => 540,
                'code' => '210881',
                'name' => '盖州市',
                'parentId' => '210800',
                'level' => '3',
            ),
            40 => 
            array (
                'id' => 541,
                'code' => '210882',
                'name' => '大石桥市',
                'parentId' => '210800',
                'level' => '3',
            ),
            41 => 
            array (
                'id' => 542,
                'code' => '210900',
                'name' => '阜新市',
                'parentId' => '210000',
                'level' => '2',
            ),
            42 => 
            array (
                'id' => 543,
                'code' => '210902',
                'name' => '海州区',
                'parentId' => '210900',
                'level' => '3',
            ),
            43 => 
            array (
                'id' => 544,
                'code' => '210903',
                'name' => '新邱区',
                'parentId' => '210900',
                'level' => '3',
            ),
            44 => 
            array (
                'id' => 545,
                'code' => '210904',
                'name' => '太平区',
                'parentId' => '210900',
                'level' => '3',
            ),
            45 => 
            array (
                'id' => 546,
                'code' => '210905',
                'name' => '清河门区',
                'parentId' => '210900',
                'level' => '3',
            ),
            46 => 
            array (
                'id' => 547,
                'code' => '210911',
                'name' => '细河区',
                'parentId' => '210900',
                'level' => '3',
            ),
            47 => 
            array (
                'id' => 548,
                'code' => '210921',
                'name' => '阜新蒙古族自治县',
                'parentId' => '210900',
                'level' => '3',
            ),
            48 => 
            array (
                'id' => 549,
                'code' => '210922',
                'name' => '彰武县',
                'parentId' => '210900',
                'level' => '3',
            ),
            49 => 
            array (
                'id' => 550,
                'code' => '211000',
                'name' => '辽阳市',
                'parentId' => '210000',
                'level' => '2',
            ),
            50 => 
            array (
                'id' => 551,
                'code' => '211002',
                'name' => '白塔区',
                'parentId' => '211000',
                'level' => '3',
            ),
            51 => 
            array (
                'id' => 552,
                'code' => '211003',
                'name' => '文圣区',
                'parentId' => '211000',
                'level' => '3',
            ),
            52 => 
            array (
                'id' => 553,
                'code' => '211004',
                'name' => '宏伟区',
                'parentId' => '211000',
                'level' => '3',
            ),
            53 => 
            array (
                'id' => 554,
                'code' => '211005',
                'name' => '弓长岭区',
                'parentId' => '211000',
                'level' => '3',
            ),
            54 => 
            array (
                'id' => 555,
                'code' => '211011',
                'name' => '太子河区',
                'parentId' => '211000',
                'level' => '3',
            ),
            55 => 
            array (
                'id' => 556,
                'code' => '211021',
                'name' => '辽阳县',
                'parentId' => '211000',
                'level' => '3',
            ),
            56 => 
            array (
                'id' => 557,
                'code' => '211081',
                'name' => '灯塔市',
                'parentId' => '211000',
                'level' => '3',
            ),
            57 => 
            array (
                'id' => 558,
                'code' => '211100',
                'name' => '盘锦市',
                'parentId' => '210000',
                'level' => '2',
            ),
            58 => 
            array (
                'id' => 559,
                'code' => '211102',
                'name' => '双台子区',
                'parentId' => '211100',
                'level' => '3',
            ),
            59 => 
            array (
                'id' => 560,
                'code' => '211103',
                'name' => '兴隆台区',
                'parentId' => '211100',
                'level' => '3',
            ),
            60 => 
            array (
                'id' => 561,
                'code' => '211121',
                'name' => '大洼县',
                'parentId' => '211100',
                'level' => '3',
            ),
            61 => 
            array (
                'id' => 562,
                'code' => '211122',
                'name' => '盘山县',
                'parentId' => '211100',
                'level' => '3',
            ),
            62 => 
            array (
                'id' => 563,
                'code' => '211200',
                'name' => '铁岭市',
                'parentId' => '210000',
                'level' => '2',
            ),
            63 => 
            array (
                'id' => 564,
                'code' => '211202',
                'name' => '银州区',
                'parentId' => '211200',
                'level' => '3',
            ),
            64 => 
            array (
                'id' => 565,
                'code' => '211204',
                'name' => '清河区',
                'parentId' => '211200',
                'level' => '3',
            ),
            65 => 
            array (
                'id' => 566,
                'code' => '211221',
                'name' => '铁岭县',
                'parentId' => '211200',
                'level' => '3',
            ),
            66 => 
            array (
                'id' => 567,
                'code' => '211223',
                'name' => '西丰县',
                'parentId' => '211200',
                'level' => '3',
            ),
            67 => 
            array (
                'id' => 568,
                'code' => '211224',
                'name' => '昌图县',
                'parentId' => '211200',
                'level' => '3',
            ),
            68 => 
            array (
                'id' => 569,
                'code' => '211281',
                'name' => '调兵山市',
                'parentId' => '211200',
                'level' => '3',
            ),
            69 => 
            array (
                'id' => 570,
                'code' => '211282',
                'name' => '开原市',
                'parentId' => '211200',
                'level' => '3',
            ),
            70 => 
            array (
                'id' => 571,
                'code' => '211300',
                'name' => '朝阳市',
                'parentId' => '210000',
                'level' => '2',
            ),
            71 => 
            array (
                'id' => 572,
                'code' => '211302',
                'name' => '双塔区',
                'parentId' => '211300',
                'level' => '3',
            ),
            72 => 
            array (
                'id' => 573,
                'code' => '211303',
                'name' => '龙城区',
                'parentId' => '211300',
                'level' => '3',
            ),
            73 => 
            array (
                'id' => 574,
                'code' => '211321',
                'name' => '朝阳县',
                'parentId' => '211300',
                'level' => '3',
            ),
            74 => 
            array (
                'id' => 575,
                'code' => '211322',
                'name' => '建平县',
                'parentId' => '211300',
                'level' => '3',
            ),
            75 => 
            array (
                'id' => 576,
                'code' => '211324',
                'name' => '喀喇沁左翼蒙古族自治县',
                'parentId' => '211300',
                'level' => '3',
            ),
            76 => 
            array (
                'id' => 577,
                'code' => '211381',
                'name' => '北票市',
                'parentId' => '211300',
                'level' => '3',
            ),
            77 => 
            array (
                'id' => 578,
                'code' => '211382',
                'name' => '凌源市',
                'parentId' => '211300',
                'level' => '3',
            ),
            78 => 
            array (
                'id' => 579,
                'code' => '211400',
                'name' => '葫芦岛市',
                'parentId' => '210000',
                'level' => '2',
            ),
            79 => 
            array (
                'id' => 580,
                'code' => '211402',
                'name' => '连山区',
                'parentId' => '211400',
                'level' => '3',
            ),
            80 => 
            array (
                'id' => 581,
                'code' => '211403',
                'name' => '龙港区',
                'parentId' => '211400',
                'level' => '3',
            ),
            81 => 
            array (
                'id' => 582,
                'code' => '211404',
                'name' => '南票区',
                'parentId' => '211400',
                'level' => '3',
            ),
            82 => 
            array (
                'id' => 583,
                'code' => '211421',
                'name' => '绥中县',
                'parentId' => '211400',
                'level' => '3',
            ),
            83 => 
            array (
                'id' => 584,
                'code' => '211422',
                'name' => '建昌县',
                'parentId' => '211400',
                'level' => '3',
            ),
            84 => 
            array (
                'id' => 585,
                'code' => '211481',
                'name' => '兴城市',
                'parentId' => '211400',
                'level' => '3',
            ),
            85 => 
            array (
                'id' => 586,
                'code' => '211500',
                'name' => '金普新区',
                'parentId' => '210000',
                'level' => '2',
            ),
            86 => 
            array (
                'id' => 587,
                'code' => '211501',
                'name' => '金州新区',
                'parentId' => '211500',
                'level' => '3',
            ),
            87 => 
            array (
                'id' => 588,
                'code' => '211502',
                'name' => '普湾新区',
                'parentId' => '211500',
                'level' => '3',
            ),
            88 => 
            array (
                'id' => 589,
                'code' => '211503',
                'name' => '保税区',
                'parentId' => '211500',
                'level' => '3',
            ),
            89 => 
            array (
                'id' => 590,
                'code' => '220000',
                'name' => '吉林省',
                'parentId' => '100000',
                'level' => '1',
            ),
            90 => 
            array (
                'id' => 591,
                'code' => '220100',
                'name' => '长春市',
                'parentId' => '220000',
                'level' => '2',
            ),
            91 => 
            array (
                'id' => 592,
                'code' => '220102',
                'name' => '南关区',
                'parentId' => '220100',
                'level' => '3',
            ),
            92 => 
            array (
                'id' => 593,
                'code' => '220103',
                'name' => '宽城区',
                'parentId' => '220100',
                'level' => '3',
            ),
            93 => 
            array (
                'id' => 594,
                'code' => '220104',
                'name' => '朝阳区',
                'parentId' => '220100',
                'level' => '3',
            ),
            94 => 
            array (
                'id' => 595,
                'code' => '220105',
                'name' => '二道区',
                'parentId' => '220100',
                'level' => '3',
            ),
            95 => 
            array (
                'id' => 596,
                'code' => '220106',
                'name' => '绿园区',
                'parentId' => '220100',
                'level' => '3',
            ),
            96 => 
            array (
                'id' => 597,
                'code' => '220112',
                'name' => '双阳区',
                'parentId' => '220100',
                'level' => '3',
            ),
            97 => 
            array (
                'id' => 598,
                'code' => '220113',
                'name' => '九台区',
                'parentId' => '220100',
                'level' => '3',
            ),
            98 => 
            array (
                'id' => 599,
                'code' => '220122',
                'name' => '农安县',
                'parentId' => '220100',
                'level' => '3',
            ),
            99 => 
            array (
                'id' => 600,
                'code' => '220182',
                'name' => '榆树市',
                'parentId' => '220100',
                'level' => '3',
            ),
            100 => 
            array (
                'id' => 601,
                'code' => '220183',
                'name' => '德惠市',
                'parentId' => '220100',
                'level' => '3',
            ),
            101 => 
            array (
                'id' => 602,
                'code' => '220200',
                'name' => '吉林市',
                'parentId' => '220000',
                'level' => '2',
            ),
            102 => 
            array (
                'id' => 603,
                'code' => '220202',
                'name' => '昌邑区',
                'parentId' => '220200',
                'level' => '3',
            ),
            103 => 
            array (
                'id' => 604,
                'code' => '220203',
                'name' => '龙潭区',
                'parentId' => '220200',
                'level' => '3',
            ),
            104 => 
            array (
                'id' => 605,
                'code' => '220204',
                'name' => '船营区',
                'parentId' => '220200',
                'level' => '3',
            ),
            105 => 
            array (
                'id' => 606,
                'code' => '220211',
                'name' => '丰满区',
                'parentId' => '220200',
                'level' => '3',
            ),
            106 => 
            array (
                'id' => 607,
                'code' => '220221',
                'name' => '永吉县',
                'parentId' => '220200',
                'level' => '3',
            ),
            107 => 
            array (
                'id' => 608,
                'code' => '220281',
                'name' => '蛟河市',
                'parentId' => '220200',
                'level' => '3',
            ),
            108 => 
            array (
                'id' => 609,
                'code' => '220282',
                'name' => '桦甸市',
                'parentId' => '220200',
                'level' => '3',
            ),
            109 => 
            array (
                'id' => 610,
                'code' => '220283',
                'name' => '舒兰市',
                'parentId' => '220200',
                'level' => '3',
            ),
            110 => 
            array (
                'id' => 611,
                'code' => '220284',
                'name' => '磐石市',
                'parentId' => '220200',
                'level' => '3',
            ),
            111 => 
            array (
                'id' => 612,
                'code' => '220300',
                'name' => '四平市',
                'parentId' => '220000',
                'level' => '2',
            ),
            112 => 
            array (
                'id' => 613,
                'code' => '220302',
                'name' => '铁西区',
                'parentId' => '220300',
                'level' => '3',
            ),
            113 => 
            array (
                'id' => 614,
                'code' => '220303',
                'name' => '铁东区',
                'parentId' => '220300',
                'level' => '3',
            ),
            114 => 
            array (
                'id' => 615,
                'code' => '220322',
                'name' => '梨树县',
                'parentId' => '220300',
                'level' => '3',
            ),
            115 => 
            array (
                'id' => 616,
                'code' => '220323',
                'name' => '伊通满族自治县',
                'parentId' => '220300',
                'level' => '3',
            ),
            116 => 
            array (
                'id' => 617,
                'code' => '220381',
                'name' => '公主岭市',
                'parentId' => '220300',
                'level' => '3',
            ),
            117 => 
            array (
                'id' => 618,
                'code' => '220382',
                'name' => '双辽市',
                'parentId' => '220300',
                'level' => '3',
            ),
            118 => 
            array (
                'id' => 619,
                'code' => '220400',
                'name' => '辽源市',
                'parentId' => '220000',
                'level' => '2',
            ),
            119 => 
            array (
                'id' => 620,
                'code' => '220402',
                'name' => '龙山区',
                'parentId' => '220400',
                'level' => '3',
            ),
            120 => 
            array (
                'id' => 621,
                'code' => '220403',
                'name' => '西安区',
                'parentId' => '220400',
                'level' => '3',
            ),
            121 => 
            array (
                'id' => 622,
                'code' => '220421',
                'name' => '东丰县',
                'parentId' => '220400',
                'level' => '3',
            ),
            122 => 
            array (
                'id' => 623,
                'code' => '220422',
                'name' => '东辽县',
                'parentId' => '220400',
                'level' => '3',
            ),
            123 => 
            array (
                'id' => 624,
                'code' => '220500',
                'name' => '通化市',
                'parentId' => '220000',
                'level' => '2',
            ),
            124 => 
            array (
                'id' => 625,
                'code' => '220502',
                'name' => '东昌区',
                'parentId' => '220500',
                'level' => '3',
            ),
            125 => 
            array (
                'id' => 626,
                'code' => '220503',
                'name' => '二道江区',
                'parentId' => '220500',
                'level' => '3',
            ),
            126 => 
            array (
                'id' => 627,
                'code' => '220521',
                'name' => '通化县',
                'parentId' => '220500',
                'level' => '3',
            ),
            127 => 
            array (
                'id' => 628,
                'code' => '220523',
                'name' => '辉南县',
                'parentId' => '220500',
                'level' => '3',
            ),
            128 => 
            array (
                'id' => 629,
                'code' => '220524',
                'name' => '柳河县',
                'parentId' => '220500',
                'level' => '3',
            ),
            129 => 
            array (
                'id' => 630,
                'code' => '220581',
                'name' => '梅河口市',
                'parentId' => '220500',
                'level' => '3',
            ),
            130 => 
            array (
                'id' => 631,
                'code' => '220582',
                'name' => '集安市',
                'parentId' => '220500',
                'level' => '3',
            ),
            131 => 
            array (
                'id' => 632,
                'code' => '220600',
                'name' => '白山市',
                'parentId' => '220000',
                'level' => '2',
            ),
            132 => 
            array (
                'id' => 633,
                'code' => '220602',
                'name' => '浑江区',
                'parentId' => '220600',
                'level' => '3',
            ),
            133 => 
            array (
                'id' => 634,
                'code' => '220605',
                'name' => '江源区',
                'parentId' => '220600',
                'level' => '3',
            ),
            134 => 
            array (
                'id' => 635,
                'code' => '220621',
                'name' => '抚松县',
                'parentId' => '220600',
                'level' => '3',
            ),
            135 => 
            array (
                'id' => 636,
                'code' => '220622',
                'name' => '靖宇县',
                'parentId' => '220600',
                'level' => '3',
            ),
            136 => 
            array (
                'id' => 637,
                'code' => '220623',
                'name' => '长白朝鲜族自治县',
                'parentId' => '220600',
                'level' => '3',
            ),
            137 => 
            array (
                'id' => 638,
                'code' => '220681',
                'name' => '临江市',
                'parentId' => '220600',
                'level' => '3',
            ),
            138 => 
            array (
                'id' => 639,
                'code' => '220700',
                'name' => '松原市',
                'parentId' => '220000',
                'level' => '2',
            ),
            139 => 
            array (
                'id' => 640,
                'code' => '220702',
                'name' => '宁江区',
                'parentId' => '220700',
                'level' => '3',
            ),
            140 => 
            array (
                'id' => 641,
                'code' => '220721',
                'name' => '前郭尔罗斯蒙古族自治县',
                'parentId' => '220700',
                'level' => '3',
            ),
            141 => 
            array (
                'id' => 642,
                'code' => '220722',
                'name' => '长岭县',
                'parentId' => '220700',
                'level' => '3',
            ),
            142 => 
            array (
                'id' => 643,
                'code' => '220723',
                'name' => '乾安县',
                'parentId' => '220700',
                'level' => '3',
            ),
            143 => 
            array (
                'id' => 644,
                'code' => '220781',
                'name' => '扶余市',
                'parentId' => '220700',
                'level' => '3',
            ),
            144 => 
            array (
                'id' => 645,
                'code' => '220800',
                'name' => '白城市',
                'parentId' => '220000',
                'level' => '2',
            ),
            145 => 
            array (
                'id' => 646,
                'code' => '220802',
                'name' => '洮北区',
                'parentId' => '220800',
                'level' => '3',
            ),
            146 => 
            array (
                'id' => 647,
                'code' => '220821',
                'name' => '镇赉县',
                'parentId' => '220800',
                'level' => '3',
            ),
            147 => 
            array (
                'id' => 648,
                'code' => '220822',
                'name' => '通榆县',
                'parentId' => '220800',
                'level' => '3',
            ),
            148 => 
            array (
                'id' => 649,
                'code' => '220881',
                'name' => '洮南市',
                'parentId' => '220800',
                'level' => '3',
            ),
            149 => 
            array (
                'id' => 650,
                'code' => '220882',
                'name' => '大安市',
                'parentId' => '220800',
                'level' => '3',
            ),
            150 => 
            array (
                'id' => 651,
                'code' => '222400',
                'name' => '延边朝鲜族自治州',
                'parentId' => '220000',
                'level' => '2',
            ),
            151 => 
            array (
                'id' => 652,
                'code' => '222401',
                'name' => '延吉市',
                'parentId' => '222400',
                'level' => '3',
            ),
            152 => 
            array (
                'id' => 653,
                'code' => '222402',
                'name' => '图们市',
                'parentId' => '222400',
                'level' => '3',
            ),
            153 => 
            array (
                'id' => 654,
                'code' => '222403',
                'name' => '敦化市',
                'parentId' => '222400',
                'level' => '3',
            ),
            154 => 
            array (
                'id' => 655,
                'code' => '222404',
                'name' => '珲春市',
                'parentId' => '222400',
                'level' => '3',
            ),
            155 => 
            array (
                'id' => 656,
                'code' => '222405',
                'name' => '龙井市',
                'parentId' => '222400',
                'level' => '3',
            ),
            156 => 
            array (
                'id' => 657,
                'code' => '222406',
                'name' => '和龙市',
                'parentId' => '222400',
                'level' => '3',
            ),
            157 => 
            array (
                'id' => 658,
                'code' => '222424',
                'name' => '汪清县',
                'parentId' => '222400',
                'level' => '3',
            ),
            158 => 
            array (
                'id' => 659,
                'code' => '222426',
                'name' => '安图县',
                'parentId' => '222400',
                'level' => '3',
            ),
            159 => 
            array (
                'id' => 660,
                'code' => '230000',
                'name' => '黑龙江省',
                'parentId' => '100000',
                'level' => '1',
            ),
            160 => 
            array (
                'id' => 661,
                'code' => '230100',
                'name' => '哈尔滨市',
                'parentId' => '230000',
                'level' => '2',
            ),
            161 => 
            array (
                'id' => 662,
                'code' => '230102',
                'name' => '道里区',
                'parentId' => '230100',
                'level' => '3',
            ),
            162 => 
            array (
                'id' => 663,
                'code' => '230103',
                'name' => '南岗区',
                'parentId' => '230100',
                'level' => '3',
            ),
            163 => 
            array (
                'id' => 664,
                'code' => '230104',
                'name' => '道外区',
                'parentId' => '230100',
                'level' => '3',
            ),
            164 => 
            array (
                'id' => 665,
                'code' => '230108',
                'name' => '平房区',
                'parentId' => '230100',
                'level' => '3',
            ),
            165 => 
            array (
                'id' => 666,
                'code' => '230109',
                'name' => '松北区',
                'parentId' => '230100',
                'level' => '3',
            ),
            166 => 
            array (
                'id' => 667,
                'code' => '230110',
                'name' => '香坊区',
                'parentId' => '230100',
                'level' => '3',
            ),
            167 => 
            array (
                'id' => 668,
                'code' => '230111',
                'name' => '呼兰区',
                'parentId' => '230100',
                'level' => '3',
            ),
            168 => 
            array (
                'id' => 669,
                'code' => '230112',
                'name' => '阿城区',
                'parentId' => '230100',
                'level' => '3',
            ),
            169 => 
            array (
                'id' => 670,
                'code' => '230113',
                'name' => '双城区',
                'parentId' => '230100',
                'level' => '3',
            ),
            170 => 
            array (
                'id' => 671,
                'code' => '230123',
                'name' => '依兰县',
                'parentId' => '230100',
                'level' => '3',
            ),
            171 => 
            array (
                'id' => 672,
                'code' => '230124',
                'name' => '方正县',
                'parentId' => '230100',
                'level' => '3',
            ),
            172 => 
            array (
                'id' => 673,
                'code' => '230125',
                'name' => '宾县',
                'parentId' => '230100',
                'level' => '3',
            ),
            173 => 
            array (
                'id' => 674,
                'code' => '230126',
                'name' => '巴彦县',
                'parentId' => '230100',
                'level' => '3',
            ),
            174 => 
            array (
                'id' => 675,
                'code' => '230127',
                'name' => '木兰县',
                'parentId' => '230100',
                'level' => '3',
            ),
            175 => 
            array (
                'id' => 676,
                'code' => '230128',
                'name' => '通河县',
                'parentId' => '230100',
                'level' => '3',
            ),
            176 => 
            array (
                'id' => 677,
                'code' => '230129',
                'name' => '延寿县',
                'parentId' => '230100',
                'level' => '3',
            ),
            177 => 
            array (
                'id' => 678,
                'code' => '230183',
                'name' => '尚志市',
                'parentId' => '230100',
                'level' => '3',
            ),
            178 => 
            array (
                'id' => 679,
                'code' => '230184',
                'name' => '五常市',
                'parentId' => '230100',
                'level' => '3',
            ),
            179 => 
            array (
                'id' => 680,
                'code' => '230200',
                'name' => '齐齐哈尔市',
                'parentId' => '230000',
                'level' => '2',
            ),
            180 => 
            array (
                'id' => 681,
                'code' => '230202',
                'name' => '龙沙区',
                'parentId' => '230200',
                'level' => '3',
            ),
            181 => 
            array (
                'id' => 682,
                'code' => '230203',
                'name' => '建华区',
                'parentId' => '230200',
                'level' => '3',
            ),
            182 => 
            array (
                'id' => 683,
                'code' => '230204',
                'name' => '铁锋区',
                'parentId' => '230200',
                'level' => '3',
            ),
            183 => 
            array (
                'id' => 684,
                'code' => '230205',
                'name' => '昂昂溪区',
                'parentId' => '230200',
                'level' => '3',
            ),
            184 => 
            array (
                'id' => 685,
                'code' => '230206',
                'name' => '富拉尔基区',
                'parentId' => '230200',
                'level' => '3',
            ),
            185 => 
            array (
                'id' => 686,
                'code' => '230207',
                'name' => '碾子山区',
                'parentId' => '230200',
                'level' => '3',
            ),
            186 => 
            array (
                'id' => 687,
                'code' => '230208',
                'name' => '梅里斯达斡尔族区',
                'parentId' => '230200',
                'level' => '3',
            ),
            187 => 
            array (
                'id' => 688,
                'code' => '230221',
                'name' => '龙江县',
                'parentId' => '230200',
                'level' => '3',
            ),
            188 => 
            array (
                'id' => 689,
                'code' => '230223',
                'name' => '依安县',
                'parentId' => '230200',
                'level' => '3',
            ),
            189 => 
            array (
                'id' => 690,
                'code' => '230224',
                'name' => '泰来县',
                'parentId' => '230200',
                'level' => '3',
            ),
            190 => 
            array (
                'id' => 691,
                'code' => '230225',
                'name' => '甘南县',
                'parentId' => '230200',
                'level' => '3',
            ),
            191 => 
            array (
                'id' => 692,
                'code' => '230227',
                'name' => '富裕县',
                'parentId' => '230200',
                'level' => '3',
            ),
            192 => 
            array (
                'id' => 693,
                'code' => '230229',
                'name' => '克山县',
                'parentId' => '230200',
                'level' => '3',
            ),
            193 => 
            array (
                'id' => 694,
                'code' => '230230',
                'name' => '克东县',
                'parentId' => '230200',
                'level' => '3',
            ),
            194 => 
            array (
                'id' => 695,
                'code' => '230231',
                'name' => '拜泉县',
                'parentId' => '230200',
                'level' => '3',
            ),
            195 => 
            array (
                'id' => 696,
                'code' => '230281',
                'name' => '讷河市',
                'parentId' => '230200',
                'level' => '3',
            ),
            196 => 
            array (
                'id' => 697,
                'code' => '230300',
                'name' => '鸡西市',
                'parentId' => '230000',
                'level' => '2',
            ),
            197 => 
            array (
                'id' => 698,
                'code' => '230302',
                'name' => '鸡冠区',
                'parentId' => '230300',
                'level' => '3',
            ),
            198 => 
            array (
                'id' => 699,
                'code' => '230303',
                'name' => '恒山区',
                'parentId' => '230300',
                'level' => '3',
            ),
            199 => 
            array (
                'id' => 700,
                'code' => '230304',
                'name' => '滴道区',
                'parentId' => '230300',
                'level' => '3',
            ),
            200 => 
            array (
                'id' => 701,
                'code' => '230305',
                'name' => '梨树区',
                'parentId' => '230300',
                'level' => '3',
            ),
            201 => 
            array (
                'id' => 702,
                'code' => '230306',
                'name' => '城子河区',
                'parentId' => '230300',
                'level' => '3',
            ),
            202 => 
            array (
                'id' => 703,
                'code' => '230307',
                'name' => '麻山区',
                'parentId' => '230300',
                'level' => '3',
            ),
            203 => 
            array (
                'id' => 704,
                'code' => '230321',
                'name' => '鸡东县',
                'parentId' => '230300',
                'level' => '3',
            ),
            204 => 
            array (
                'id' => 705,
                'code' => '230381',
                'name' => '虎林市',
                'parentId' => '230300',
                'level' => '3',
            ),
            205 => 
            array (
                'id' => 706,
                'code' => '230382',
                'name' => '密山市',
                'parentId' => '230300',
                'level' => '3',
            ),
            206 => 
            array (
                'id' => 707,
                'code' => '230400',
                'name' => '鹤岗市',
                'parentId' => '230000',
                'level' => '2',
            ),
            207 => 
            array (
                'id' => 708,
                'code' => '230402',
                'name' => '向阳区',
                'parentId' => '230400',
                'level' => '3',
            ),
            208 => 
            array (
                'id' => 709,
                'code' => '230403',
                'name' => '工农区',
                'parentId' => '230400',
                'level' => '3',
            ),
            209 => 
            array (
                'id' => 710,
                'code' => '230404',
                'name' => '南山区',
                'parentId' => '230400',
                'level' => '3',
            ),
            210 => 
            array (
                'id' => 711,
                'code' => '230405',
                'name' => '兴安区',
                'parentId' => '230400',
                'level' => '3',
            ),
            211 => 
            array (
                'id' => 712,
                'code' => '230406',
                'name' => '东山区',
                'parentId' => '230400',
                'level' => '3',
            ),
            212 => 
            array (
                'id' => 713,
                'code' => '230407',
                'name' => '兴山区',
                'parentId' => '230400',
                'level' => '3',
            ),
            213 => 
            array (
                'id' => 714,
                'code' => '230421',
                'name' => '萝北县',
                'parentId' => '230400',
                'level' => '3',
            ),
            214 => 
            array (
                'id' => 715,
                'code' => '230422',
                'name' => '绥滨县',
                'parentId' => '230400',
                'level' => '3',
            ),
            215 => 
            array (
                'id' => 716,
                'code' => '230500',
                'name' => '双鸭山市',
                'parentId' => '230000',
                'level' => '2',
            ),
            216 => 
            array (
                'id' => 717,
                'code' => '230502',
                'name' => '尖山区',
                'parentId' => '230500',
                'level' => '3',
            ),
            217 => 
            array (
                'id' => 718,
                'code' => '230503',
                'name' => '岭东区',
                'parentId' => '230500',
                'level' => '3',
            ),
            218 => 
            array (
                'id' => 719,
                'code' => '230505',
                'name' => '四方台区',
                'parentId' => '230500',
                'level' => '3',
            ),
            219 => 
            array (
                'id' => 720,
                'code' => '230506',
                'name' => '宝山区',
                'parentId' => '230500',
                'level' => '3',
            ),
            220 => 
            array (
                'id' => 721,
                'code' => '230521',
                'name' => '集贤县',
                'parentId' => '230500',
                'level' => '3',
            ),
            221 => 
            array (
                'id' => 722,
                'code' => '230522',
                'name' => '友谊县',
                'parentId' => '230500',
                'level' => '3',
            ),
            222 => 
            array (
                'id' => 723,
                'code' => '230523',
                'name' => '宝清县',
                'parentId' => '230500',
                'level' => '3',
            ),
            223 => 
            array (
                'id' => 724,
                'code' => '230524',
                'name' => '饶河县',
                'parentId' => '230500',
                'level' => '3',
            ),
            224 => 
            array (
                'id' => 725,
                'code' => '230600',
                'name' => '大庆市',
                'parentId' => '230000',
                'level' => '2',
            ),
            225 => 
            array (
                'id' => 726,
                'code' => '230602',
                'name' => '萨尔图区',
                'parentId' => '230600',
                'level' => '3',
            ),
            226 => 
            array (
                'id' => 727,
                'code' => '230603',
                'name' => '龙凤区',
                'parentId' => '230600',
                'level' => '3',
            ),
            227 => 
            array (
                'id' => 728,
                'code' => '230604',
                'name' => '让胡路区',
                'parentId' => '230600',
                'level' => '3',
            ),
            228 => 
            array (
                'id' => 729,
                'code' => '230605',
                'name' => '红岗区',
                'parentId' => '230600',
                'level' => '3',
            ),
            229 => 
            array (
                'id' => 730,
                'code' => '230606',
                'name' => '大同区',
                'parentId' => '230600',
                'level' => '3',
            ),
            230 => 
            array (
                'id' => 731,
                'code' => '230621',
                'name' => '肇州县',
                'parentId' => '230600',
                'level' => '3',
            ),
            231 => 
            array (
                'id' => 732,
                'code' => '230622',
                'name' => '肇源县',
                'parentId' => '230600',
                'level' => '3',
            ),
            232 => 
            array (
                'id' => 733,
                'code' => '230623',
                'name' => '林甸县',
                'parentId' => '230600',
                'level' => '3',
            ),
            233 => 
            array (
                'id' => 734,
                'code' => '230624',
                'name' => '杜尔伯特蒙古族自治县',
                'parentId' => '230600',
                'level' => '3',
            ),
            234 => 
            array (
                'id' => 735,
                'code' => '230700',
                'name' => '伊春市',
                'parentId' => '230000',
                'level' => '2',
            ),
            235 => 
            array (
                'id' => 736,
                'code' => '230702',
                'name' => '伊春区',
                'parentId' => '230700',
                'level' => '3',
            ),
            236 => 
            array (
                'id' => 737,
                'code' => '230703',
                'name' => '南岔区',
                'parentId' => '230700',
                'level' => '3',
            ),
            237 => 
            array (
                'id' => 738,
                'code' => '230704',
                'name' => '友好区',
                'parentId' => '230700',
                'level' => '3',
            ),
            238 => 
            array (
                'id' => 739,
                'code' => '230705',
                'name' => '西林区',
                'parentId' => '230700',
                'level' => '3',
            ),
            239 => 
            array (
                'id' => 740,
                'code' => '230706',
                'name' => '翠峦区',
                'parentId' => '230700',
                'level' => '3',
            ),
            240 => 
            array (
                'id' => 741,
                'code' => '230707',
                'name' => '新青区',
                'parentId' => '230700',
                'level' => '3',
            ),
            241 => 
            array (
                'id' => 742,
                'code' => '230708',
                'name' => '美溪区',
                'parentId' => '230700',
                'level' => '3',
            ),
            242 => 
            array (
                'id' => 743,
                'code' => '230709',
                'name' => '金山屯区',
                'parentId' => '230700',
                'level' => '3',
            ),
            243 => 
            array (
                'id' => 744,
                'code' => '230710',
                'name' => '五营区',
                'parentId' => '230700',
                'level' => '3',
            ),
            244 => 
            array (
                'id' => 745,
                'code' => '230711',
                'name' => '乌马河区',
                'parentId' => '230700',
                'level' => '3',
            ),
            245 => 
            array (
                'id' => 746,
                'code' => '230712',
                'name' => '汤旺河区',
                'parentId' => '230700',
                'level' => '3',
            ),
            246 => 
            array (
                'id' => 747,
                'code' => '230713',
                'name' => '带岭区',
                'parentId' => '230700',
                'level' => '3',
            ),
            247 => 
            array (
                'id' => 748,
                'code' => '230714',
                'name' => '乌伊岭区',
                'parentId' => '230700',
                'level' => '3',
            ),
            248 => 
            array (
                'id' => 749,
                'code' => '230715',
                'name' => '红星区',
                'parentId' => '230700',
                'level' => '3',
            ),
            249 => 
            array (
                'id' => 750,
                'code' => '230716',
                'name' => '上甘岭区',
                'parentId' => '230700',
                'level' => '3',
            ),
            250 => 
            array (
                'id' => 751,
                'code' => '230722',
                'name' => '嘉荫县',
                'parentId' => '230700',
                'level' => '3',
            ),
            251 => 
            array (
                'id' => 752,
                'code' => '230781',
                'name' => '铁力市',
                'parentId' => '230700',
                'level' => '3',
            ),
            252 => 
            array (
                'id' => 753,
                'code' => '230800',
                'name' => '佳木斯市',
                'parentId' => '230000',
                'level' => '2',
            ),
            253 => 
            array (
                'id' => 754,
                'code' => '230803',
                'name' => '向阳区',
                'parentId' => '230800',
                'level' => '3',
            ),
            254 => 
            array (
                'id' => 755,
                'code' => '230804',
                'name' => '前进区',
                'parentId' => '230800',
                'level' => '3',
            ),
            255 => 
            array (
                'id' => 756,
                'code' => '230805',
                'name' => '东风区',
                'parentId' => '230800',
                'level' => '3',
            ),
            256 => 
            array (
                'id' => 757,
                'code' => '230811',
                'name' => '郊区',
                'parentId' => '230800',
                'level' => '3',
            ),
            257 => 
            array (
                'id' => 758,
                'code' => '230822',
                'name' => '桦南县',
                'parentId' => '230800',
                'level' => '3',
            ),
            258 => 
            array (
                'id' => 759,
                'code' => '230826',
                'name' => '桦川县',
                'parentId' => '230800',
                'level' => '3',
            ),
            259 => 
            array (
                'id' => 760,
                'code' => '230828',
                'name' => '汤原县',
                'parentId' => '230800',
                'level' => '3',
            ),
            260 => 
            array (
                'id' => 761,
                'code' => '230833',
                'name' => '抚远县',
                'parentId' => '230800',
                'level' => '3',
            ),
            261 => 
            array (
                'id' => 762,
                'code' => '230881',
                'name' => '同江市',
                'parentId' => '230800',
                'level' => '3',
            ),
            262 => 
            array (
                'id' => 763,
                'code' => '230882',
                'name' => '富锦市',
                'parentId' => '230800',
                'level' => '3',
            ),
            263 => 
            array (
                'id' => 764,
                'code' => '230900',
                'name' => '七台河市',
                'parentId' => '230000',
                'level' => '2',
            ),
            264 => 
            array (
                'id' => 765,
                'code' => '230902',
                'name' => '新兴区',
                'parentId' => '230900',
                'level' => '3',
            ),
            265 => 
            array (
                'id' => 766,
                'code' => '230903',
                'name' => '桃山区',
                'parentId' => '230900',
                'level' => '3',
            ),
            266 => 
            array (
                'id' => 767,
                'code' => '230904',
                'name' => '茄子河区',
                'parentId' => '230900',
                'level' => '3',
            ),
            267 => 
            array (
                'id' => 768,
                'code' => '230921',
                'name' => '勃利县',
                'parentId' => '230900',
                'level' => '3',
            ),
            268 => 
            array (
                'id' => 769,
                'code' => '231000',
                'name' => '牡丹江市',
                'parentId' => '230000',
                'level' => '2',
            ),
            269 => 
            array (
                'id' => 770,
                'code' => '231002',
                'name' => '东安区',
                'parentId' => '231000',
                'level' => '3',
            ),
            270 => 
            array (
                'id' => 771,
                'code' => '231003',
                'name' => '阳明区',
                'parentId' => '231000',
                'level' => '3',
            ),
            271 => 
            array (
                'id' => 772,
                'code' => '231004',
                'name' => '爱民区',
                'parentId' => '231000',
                'level' => '3',
            ),
            272 => 
            array (
                'id' => 773,
                'code' => '231005',
                'name' => '西安区',
                'parentId' => '231000',
                'level' => '3',
            ),
            273 => 
            array (
                'id' => 774,
                'code' => '231024',
                'name' => '东宁县',
                'parentId' => '231000',
                'level' => '3',
            ),
            274 => 
            array (
                'id' => 775,
                'code' => '231025',
                'name' => '林口县',
                'parentId' => '231000',
                'level' => '3',
            ),
            275 => 
            array (
                'id' => 776,
                'code' => '231081',
                'name' => '绥芬河市',
                'parentId' => '231000',
                'level' => '3',
            ),
            276 => 
            array (
                'id' => 777,
                'code' => '231083',
                'name' => '海林市',
                'parentId' => '231000',
                'level' => '3',
            ),
            277 => 
            array (
                'id' => 778,
                'code' => '231084',
                'name' => '宁安市',
                'parentId' => '231000',
                'level' => '3',
            ),
            278 => 
            array (
                'id' => 779,
                'code' => '231085',
                'name' => '穆棱市',
                'parentId' => '231000',
                'level' => '3',
            ),
            279 => 
            array (
                'id' => 780,
                'code' => '231100',
                'name' => '黑河市',
                'parentId' => '230000',
                'level' => '2',
            ),
            280 => 
            array (
                'id' => 781,
                'code' => '231102',
                'name' => '爱辉区',
                'parentId' => '231100',
                'level' => '3',
            ),
            281 => 
            array (
                'id' => 782,
                'code' => '231121',
                'name' => '嫩江县',
                'parentId' => '231100',
                'level' => '3',
            ),
            282 => 
            array (
                'id' => 783,
                'code' => '231123',
                'name' => '逊克县',
                'parentId' => '231100',
                'level' => '3',
            ),
            283 => 
            array (
                'id' => 784,
                'code' => '231124',
                'name' => '孙吴县',
                'parentId' => '231100',
                'level' => '3',
            ),
            284 => 
            array (
                'id' => 785,
                'code' => '231181',
                'name' => '北安市',
                'parentId' => '231100',
                'level' => '3',
            ),
            285 => 
            array (
                'id' => 786,
                'code' => '231182',
                'name' => '五大连池市',
                'parentId' => '231100',
                'level' => '3',
            ),
            286 => 
            array (
                'id' => 787,
                'code' => '231200',
                'name' => '绥化市',
                'parentId' => '230000',
                'level' => '2',
            ),
            287 => 
            array (
                'id' => 788,
                'code' => '231202',
                'name' => '北林区',
                'parentId' => '231200',
                'level' => '3',
            ),
            288 => 
            array (
                'id' => 789,
                'code' => '231221',
                'name' => '望奎县',
                'parentId' => '231200',
                'level' => '3',
            ),
            289 => 
            array (
                'id' => 790,
                'code' => '231222',
                'name' => '兰西县',
                'parentId' => '231200',
                'level' => '3',
            ),
            290 => 
            array (
                'id' => 791,
                'code' => '231223',
                'name' => '青冈县',
                'parentId' => '231200',
                'level' => '3',
            ),
            291 => 
            array (
                'id' => 792,
                'code' => '231224',
                'name' => '庆安县',
                'parentId' => '231200',
                'level' => '3',
            ),
            292 => 
            array (
                'id' => 793,
                'code' => '231225',
                'name' => '明水县',
                'parentId' => '231200',
                'level' => '3',
            ),
            293 => 
            array (
                'id' => 794,
                'code' => '231226',
                'name' => '绥棱县',
                'parentId' => '231200',
                'level' => '3',
            ),
            294 => 
            array (
                'id' => 795,
                'code' => '231281',
                'name' => '安达市',
                'parentId' => '231200',
                'level' => '3',
            ),
            295 => 
            array (
                'id' => 796,
                'code' => '231282',
                'name' => '肇东市',
                'parentId' => '231200',
                'level' => '3',
            ),
            296 => 
            array (
                'id' => 797,
                'code' => '231283',
                'name' => '海伦市',
                'parentId' => '231200',
                'level' => '3',
            ),
            297 => 
            array (
                'id' => 798,
                'code' => '232700',
                'name' => '大兴安岭地区',
                'parentId' => '230000',
                'level' => '2',
            ),
            298 => 
            array (
                'id' => 799,
                'code' => '232701',
                'name' => '加格达奇区',
                'parentId' => '232700',
                'level' => '3',
            ),
            299 => 
            array (
                'id' => 800,
                'code' => '232702',
                'name' => '新林区',
                'parentId' => '232700',
                'level' => '3',
            ),
            300 => 
            array (
                'id' => 801,
                'code' => '232703',
                'name' => '松岭区',
                'parentId' => '232700',
                'level' => '3',
            ),
            301 => 
            array (
                'id' => 802,
                'code' => '232704',
                'name' => '呼中区',
                'parentId' => '232700',
                'level' => '3',
            ),
            302 => 
            array (
                'id' => 803,
                'code' => '232721',
                'name' => '呼玛县',
                'parentId' => '232700',
                'level' => '3',
            ),
            303 => 
            array (
                'id' => 804,
                'code' => '232722',
                'name' => '塔河县',
                'parentId' => '232700',
                'level' => '3',
            ),
            304 => 
            array (
                'id' => 805,
                'code' => '232723',
                'name' => '漠河县',
                'parentId' => '232700',
                'level' => '3',
            ),
            305 => 
            array (
                'id' => 806,
                'code' => '310000',
                'name' => '上海',
                'parentId' => '100000',
                'level' => '1',
            ),
            306 => 
            array (
                'id' => 807,
                'code' => '310100',
                'name' => '上海市',
                'parentId' => '310000',
                'level' => '2',
            ),
            307 => 
            array (
                'id' => 808,
                'code' => '310101',
                'name' => '黄浦区',
                'parentId' => '310100',
                'level' => '3',
            ),
            308 => 
            array (
                'id' => 809,
                'code' => '310104',
                'name' => '徐汇区',
                'parentId' => '310100',
                'level' => '3',
            ),
            309 => 
            array (
                'id' => 810,
                'code' => '310105',
                'name' => '长宁区',
                'parentId' => '310100',
                'level' => '3',
            ),
            310 => 
            array (
                'id' => 811,
                'code' => '310106',
                'name' => '静安区',
                'parentId' => '310100',
                'level' => '3',
            ),
            311 => 
            array (
                'id' => 812,
                'code' => '310107',
                'name' => '普陀区',
                'parentId' => '310100',
                'level' => '3',
            ),
            312 => 
            array (
                'id' => 813,
                'code' => '310108',
                'name' => '闸北区',
                'parentId' => '310100',
                'level' => '3',
            ),
            313 => 
            array (
                'id' => 814,
                'code' => '310109',
                'name' => '虹口区',
                'parentId' => '310100',
                'level' => '3',
            ),
            314 => 
            array (
                'id' => 815,
                'code' => '310110',
                'name' => '杨浦区',
                'parentId' => '310100',
                'level' => '3',
            ),
            315 => 
            array (
                'id' => 816,
                'code' => '310112',
                'name' => '闵行区',
                'parentId' => '310100',
                'level' => '3',
            ),
            316 => 
            array (
                'id' => 817,
                'code' => '310113',
                'name' => '宝山区',
                'parentId' => '310100',
                'level' => '3',
            ),
            317 => 
            array (
                'id' => 818,
                'code' => '310114',
                'name' => '嘉定区',
                'parentId' => '310100',
                'level' => '3',
            ),
            318 => 
            array (
                'id' => 819,
                'code' => '310115',
                'name' => '浦东新区',
                'parentId' => '310100',
                'level' => '3',
            ),
            319 => 
            array (
                'id' => 820,
                'code' => '310116',
                'name' => '金山区',
                'parentId' => '310100',
                'level' => '3',
            ),
            320 => 
            array (
                'id' => 821,
                'code' => '310117',
                'name' => '松江区',
                'parentId' => '310100',
                'level' => '3',
            ),
            321 => 
            array (
                'id' => 822,
                'code' => '310118',
                'name' => '青浦区',
                'parentId' => '310100',
                'level' => '3',
            ),
            322 => 
            array (
                'id' => 823,
                'code' => '310120',
                'name' => '奉贤区',
                'parentId' => '310100',
                'level' => '3',
            ),
            323 => 
            array (
                'id' => 824,
                'code' => '310230',
                'name' => '崇明县',
                'parentId' => '310100',
                'level' => '3',
            ),
            324 => 
            array (
                'id' => 825,
                'code' => '310250',
                'name' => '菊园新区',
                'parentId' => '310100',
                'level' => '3',
            ),
            325 => 
            array (
                'id' => 826,
                'code' => '320000',
                'name' => '江苏省',
                'parentId' => '100000',
                'level' => '1',
            ),
            326 => 
            array (
                'id' => 827,
                'code' => '320100',
                'name' => '南京市',
                'parentId' => '320000',
                'level' => '2',
            ),
            327 => 
            array (
                'id' => 828,
                'code' => '320102',
                'name' => '玄武区',
                'parentId' => '320100',
                'level' => '3',
            ),
            328 => 
            array (
                'id' => 829,
                'code' => '320104',
                'name' => '秦淮区',
                'parentId' => '320100',
                'level' => '3',
            ),
            329 => 
            array (
                'id' => 830,
                'code' => '320105',
                'name' => '建邺区',
                'parentId' => '320100',
                'level' => '3',
            ),
            330 => 
            array (
                'id' => 831,
                'code' => '320106',
                'name' => '鼓楼区',
                'parentId' => '320100',
                'level' => '3',
            ),
            331 => 
            array (
                'id' => 832,
                'code' => '320111',
                'name' => '浦口区',
                'parentId' => '320100',
                'level' => '3',
            ),
            332 => 
            array (
                'id' => 833,
                'code' => '320113',
                'name' => '栖霞区',
                'parentId' => '320100',
                'level' => '3',
            ),
            333 => 
            array (
                'id' => 834,
                'code' => '320114',
                'name' => '雨花台区',
                'parentId' => '320100',
                'level' => '3',
            ),
            334 => 
            array (
                'id' => 835,
                'code' => '320115',
                'name' => '江宁区',
                'parentId' => '320100',
                'level' => '3',
            ),
            335 => 
            array (
                'id' => 836,
                'code' => '320116',
                'name' => '六合区',
                'parentId' => '320100',
                'level' => '3',
            ),
            336 => 
            array (
                'id' => 837,
                'code' => '320117',
                'name' => '溧水区',
                'parentId' => '320100',
                'level' => '3',
            ),
            337 => 
            array (
                'id' => 838,
                'code' => '320118',
                'name' => '高淳区',
                'parentId' => '320100',
                'level' => '3',
            ),
            338 => 
            array (
                'id' => 839,
                'code' => '320119',
                'name' => '江北新区',
                'parentId' => '320100',
                'level' => '3',
            ),
            339 => 
            array (
                'id' => 840,
                'code' => '320200',
                'name' => '无锡市',
                'parentId' => '320000',
                'level' => '2',
            ),
            340 => 
            array (
                'id' => 841,
                'code' => '320202',
                'name' => '崇安区',
                'parentId' => '320200',
                'level' => '3',
            ),
            341 => 
            array (
                'id' => 842,
                'code' => '320203',
                'name' => '南长区',
                'parentId' => '320200',
                'level' => '3',
            ),
            342 => 
            array (
                'id' => 843,
                'code' => '320204',
                'name' => '北塘区',
                'parentId' => '320200',
                'level' => '3',
            ),
            343 => 
            array (
                'id' => 844,
                'code' => '320205',
                'name' => '锡山区',
                'parentId' => '320200',
                'level' => '3',
            ),
            344 => 
            array (
                'id' => 845,
                'code' => '320206',
                'name' => '惠山区',
                'parentId' => '320200',
                'level' => '3',
            ),
            345 => 
            array (
                'id' => 846,
                'code' => '320211',
                'name' => '滨湖区',
                'parentId' => '320200',
                'level' => '3',
            ),
            346 => 
            array (
                'id' => 847,
                'code' => '320281',
                'name' => '江阴市',
                'parentId' => '320200',
                'level' => '3',
            ),
            347 => 
            array (
                'id' => 848,
                'code' => '320282',
                'name' => '宜兴市',
                'parentId' => '320200',
                'level' => '3',
            ),
            348 => 
            array (
                'id' => 849,
                'code' => '320283',
                'name' => '无锡新区',
                'parentId' => '320200',
                'level' => '3',
            ),
            349 => 
            array (
                'id' => 850,
                'code' => '320300',
                'name' => '徐州市',
                'parentId' => '320000',
                'level' => '2',
            ),
            350 => 
            array (
                'id' => 851,
                'code' => '320302',
                'name' => '鼓楼区',
                'parentId' => '320300',
                'level' => '3',
            ),
            351 => 
            array (
                'id' => 852,
                'code' => '320303',
                'name' => '云龙区',
                'parentId' => '320300',
                'level' => '3',
            ),
            352 => 
            array (
                'id' => 853,
                'code' => '320305',
                'name' => '贾汪区',
                'parentId' => '320300',
                'level' => '3',
            ),
            353 => 
            array (
                'id' => 854,
                'code' => '320311',
                'name' => '泉山区',
                'parentId' => '320300',
                'level' => '3',
            ),
            354 => 
            array (
                'id' => 855,
                'code' => '320312',
                'name' => '铜山区',
                'parentId' => '320300',
                'level' => '3',
            ),
            355 => 
            array (
                'id' => 856,
                'code' => '320321',
                'name' => '丰县',
                'parentId' => '320300',
                'level' => '3',
            ),
            356 => 
            array (
                'id' => 857,
                'code' => '320322',
                'name' => '沛县',
                'parentId' => '320300',
                'level' => '3',
            ),
            357 => 
            array (
                'id' => 858,
                'code' => '320324',
                'name' => '睢宁县',
                'parentId' => '320300',
                'level' => '3',
            ),
            358 => 
            array (
                'id' => 859,
                'code' => '320381',
                'name' => '新沂市',
                'parentId' => '320300',
                'level' => '3',
            ),
            359 => 
            array (
                'id' => 860,
                'code' => '320382',
                'name' => '邳州市',
                'parentId' => '320300',
                'level' => '3',
            ),
            360 => 
            array (
                'id' => 861,
                'code' => '320400',
                'name' => '常州市',
                'parentId' => '320000',
                'level' => '2',
            ),
            361 => 
            array (
                'id' => 862,
                'code' => '320402',
                'name' => '天宁区',
                'parentId' => '320400',
                'level' => '3',
            ),
            362 => 
            array (
                'id' => 863,
                'code' => '320404',
                'name' => '钟楼区',
                'parentId' => '320400',
                'level' => '3',
            ),
            363 => 
            array (
                'id' => 864,
                'code' => '320411',
                'name' => '新北区',
                'parentId' => '320400',
                'level' => '3',
            ),
            364 => 
            array (
                'id' => 865,
                'code' => '320412',
                'name' => '武进区',
                'parentId' => '320400',
                'level' => '3',
            ),
            365 => 
            array (
                'id' => 866,
                'code' => '320413',
                'name' => '金坛区',
                'parentId' => '320400',
                'level' => '3',
            ),
            366 => 
            array (
                'id' => 867,
                'code' => '320481',
                'name' => '溧阳市',
                'parentId' => '320400',
                'level' => '3',
            ),
            367 => 
            array (
                'id' => 868,
                'code' => '320500',
                'name' => '苏州市',
                'parentId' => '320000',
                'level' => '2',
            ),
            368 => 
            array (
                'id' => 869,
                'code' => '320505',
                'name' => '虎丘区',
                'parentId' => '320500',
                'level' => '3',
            ),
            369 => 
            array (
                'id' => 870,
                'code' => '320506',
                'name' => '吴中区',
                'parentId' => '320500',
                'level' => '3',
            ),
            370 => 
            array (
                'id' => 871,
                'code' => '320507',
                'name' => '相城区',
                'parentId' => '320500',
                'level' => '3',
            ),
            371 => 
            array (
                'id' => 872,
                'code' => '320508',
                'name' => '姑苏区',
                'parentId' => '320500',
                'level' => '3',
            ),
            372 => 
            array (
                'id' => 873,
                'code' => '320509',
                'name' => '吴江区',
                'parentId' => '320500',
                'level' => '3',
            ),
            373 => 
            array (
                'id' => 874,
                'code' => '320581',
                'name' => '常熟市',
                'parentId' => '320500',
                'level' => '3',
            ),
            374 => 
            array (
                'id' => 875,
                'code' => '320582',
                'name' => '张家港市',
                'parentId' => '320500',
                'level' => '3',
            ),
            375 => 
            array (
                'id' => 876,
                'code' => '320583',
                'name' => '昆山市',
                'parentId' => '320500',
                'level' => '3',
            ),
            376 => 
            array (
                'id' => 877,
                'code' => '320585',
                'name' => '太仓市',
                'parentId' => '320500',
                'level' => '3',
            ),
            377 => 
            array (
                'id' => 878,
                'code' => '320586',
                'name' => '苏州新区',
                'parentId' => '320500',
                'level' => '3',
            ),
            378 => 
            array (
                'id' => 879,
                'code' => '320600',
                'name' => '南通市',
                'parentId' => '320000',
                'level' => '2',
            ),
            379 => 
            array (
                'id' => 880,
                'code' => '320602',
                'name' => '崇川区',
                'parentId' => '320600',
                'level' => '3',
            ),
            380 => 
            array (
                'id' => 881,
                'code' => '320611',
                'name' => '港闸区',
                'parentId' => '320600',
                'level' => '3',
            ),
            381 => 
            array (
                'id' => 882,
                'code' => '320612',
                'name' => '通州区',
                'parentId' => '320600',
                'level' => '3',
            ),
            382 => 
            array (
                'id' => 883,
                'code' => '320621',
                'name' => '海安县',
                'parentId' => '320600',
                'level' => '3',
            ),
            383 => 
            array (
                'id' => 884,
                'code' => '320623',
                'name' => '如东县',
                'parentId' => '320600',
                'level' => '3',
            ),
            384 => 
            array (
                'id' => 885,
                'code' => '320681',
                'name' => '启东市',
                'parentId' => '320600',
                'level' => '3',
            ),
            385 => 
            array (
                'id' => 886,
                'code' => '320682',
                'name' => '如皋市',
                'parentId' => '320600',
                'level' => '3',
            ),
            386 => 
            array (
                'id' => 887,
                'code' => '320684',
                'name' => '海门市',
                'parentId' => '320600',
                'level' => '3',
            ),
            387 => 
            array (
                'id' => 888,
                'code' => '320700',
                'name' => '连云港市',
                'parentId' => '320000',
                'level' => '2',
            ),
            388 => 
            array (
                'id' => 889,
                'code' => '320703',
                'name' => '连云区',
                'parentId' => '320700',
                'level' => '3',
            ),
            389 => 
            array (
                'id' => 890,
                'code' => '320706',
                'name' => '海州区',
                'parentId' => '320700',
                'level' => '3',
            ),
            390 => 
            array (
                'id' => 891,
                'code' => '320707',
                'name' => '赣榆区',
                'parentId' => '320700',
                'level' => '3',
            ),
            391 => 
            array (
                'id' => 892,
                'code' => '320722',
                'name' => '东海县',
                'parentId' => '320700',
                'level' => '3',
            ),
            392 => 
            array (
                'id' => 893,
                'code' => '320723',
                'name' => '灌云县',
                'parentId' => '320700',
                'level' => '3',
            ),
            393 => 
            array (
                'id' => 894,
                'code' => '320724',
                'name' => '灌南县',
                'parentId' => '320700',
                'level' => '3',
            ),
            394 => 
            array (
                'id' => 895,
                'code' => '320800',
                'name' => '淮安市',
                'parentId' => '320000',
                'level' => '2',
            ),
            395 => 
            array (
                'id' => 896,
                'code' => '320802',
                'name' => '清河区',
                'parentId' => '320800',
                'level' => '3',
            ),
            396 => 
            array (
                'id' => 897,
                'code' => '320803',
                'name' => '淮安区',
                'parentId' => '320800',
                'level' => '3',
            ),
            397 => 
            array (
                'id' => 898,
                'code' => '320804',
                'name' => '淮阴区',
                'parentId' => '320800',
                'level' => '3',
            ),
            398 => 
            array (
                'id' => 899,
                'code' => '320811',
                'name' => '清浦区',
                'parentId' => '320800',
                'level' => '3',
            ),
            399 => 
            array (
                'id' => 900,
                'code' => '320826',
                'name' => '涟水县',
                'parentId' => '320800',
                'level' => '3',
            ),
            400 => 
            array (
                'id' => 901,
                'code' => '320829',
                'name' => '洪泽县',
                'parentId' => '320800',
                'level' => '3',
            ),
            401 => 
            array (
                'id' => 902,
                'code' => '320830',
                'name' => '盱眙县',
                'parentId' => '320800',
                'level' => '3',
            ),
            402 => 
            array (
                'id' => 903,
                'code' => '320831',
                'name' => '金湖县',
                'parentId' => '320800',
                'level' => '3',
            ),
            403 => 
            array (
                'id' => 904,
                'code' => '320900',
                'name' => '盐城市',
                'parentId' => '320000',
                'level' => '2',
            ),
            404 => 
            array (
                'id' => 905,
                'code' => '320902',
                'name' => '亭湖区',
                'parentId' => '320900',
                'level' => '3',
            ),
            405 => 
            array (
                'id' => 906,
                'code' => '320903',
                'name' => '盐都区',
                'parentId' => '320900',
                'level' => '3',
            ),
            406 => 
            array (
                'id' => 907,
                'code' => '320904',
                'name' => '大丰区',
                'parentId' => '320900',
                'level' => '3',
            ),
            407 => 
            array (
                'id' => 908,
                'code' => '320921',
                'name' => '响水县',
                'parentId' => '320900',
                'level' => '3',
            ),
            408 => 
            array (
                'id' => 909,
                'code' => '320922',
                'name' => '滨海县',
                'parentId' => '320900',
                'level' => '3',
            ),
            409 => 
            array (
                'id' => 910,
                'code' => '320923',
                'name' => '阜宁县',
                'parentId' => '320900',
                'level' => '3',
            ),
            410 => 
            array (
                'id' => 911,
                'code' => '320924',
                'name' => '射阳县',
                'parentId' => '320900',
                'level' => '3',
            ),
            411 => 
            array (
                'id' => 912,
                'code' => '320925',
                'name' => '建湖县',
                'parentId' => '320900',
                'level' => '3',
            ),
            412 => 
            array (
                'id' => 913,
                'code' => '320981',
                'name' => '东台市',
                'parentId' => '320900',
                'level' => '3',
            ),
            413 => 
            array (
                'id' => 914,
                'code' => '321000',
                'name' => '扬州市',
                'parentId' => '320000',
                'level' => '2',
            ),
            414 => 
            array (
                'id' => 915,
                'code' => '321002',
                'name' => '广陵区',
                'parentId' => '321000',
                'level' => '3',
            ),
            415 => 
            array (
                'id' => 916,
                'code' => '321003',
                'name' => '邗江区',
                'parentId' => '321000',
                'level' => '3',
            ),
            416 => 
            array (
                'id' => 917,
                'code' => '321012',
                'name' => '江都区',
                'parentId' => '321000',
                'level' => '3',
            ),
            417 => 
            array (
                'id' => 918,
                'code' => '321023',
                'name' => '宝应县',
                'parentId' => '321000',
                'level' => '3',
            ),
            418 => 
            array (
                'id' => 919,
                'code' => '321081',
                'name' => '仪征市',
                'parentId' => '321000',
                'level' => '3',
            ),
            419 => 
            array (
                'id' => 920,
                'code' => '321084',
                'name' => '高邮市',
                'parentId' => '321000',
                'level' => '3',
            ),
            420 => 
            array (
                'id' => 921,
                'code' => '321100',
                'name' => '镇江市',
                'parentId' => '320000',
                'level' => '2',
            ),
            421 => 
            array (
                'id' => 922,
                'code' => '321102',
                'name' => '京口区',
                'parentId' => '321100',
                'level' => '3',
            ),
            422 => 
            array (
                'id' => 923,
                'code' => '321111',
                'name' => '润州区',
                'parentId' => '321100',
                'level' => '3',
            ),
            423 => 
            array (
                'id' => 924,
                'code' => '321112',
                'name' => '丹徒区',
                'parentId' => '321100',
                'level' => '3',
            ),
            424 => 
            array (
                'id' => 925,
                'code' => '321181',
                'name' => '丹阳市',
                'parentId' => '321100',
                'level' => '3',
            ),
            425 => 
            array (
                'id' => 926,
                'code' => '321182',
                'name' => '扬中市',
                'parentId' => '321100',
                'level' => '3',
            ),
            426 => 
            array (
                'id' => 927,
                'code' => '321183',
                'name' => '句容市',
                'parentId' => '321100',
                'level' => '3',
            ),
            427 => 
            array (
                'id' => 928,
                'code' => '321184',
                'name' => '镇江新区',
                'parentId' => '321100',
                'level' => '3',
            ),
            428 => 
            array (
                'id' => 929,
                'code' => '321200',
                'name' => '泰州市',
                'parentId' => '320000',
                'level' => '2',
            ),
            429 => 
            array (
                'id' => 930,
                'code' => '321202',
                'name' => '海陵区',
                'parentId' => '321200',
                'level' => '3',
            ),
            430 => 
            array (
                'id' => 931,
                'code' => '321203',
                'name' => '高港区',
                'parentId' => '321200',
                'level' => '3',
            ),
            431 => 
            array (
                'id' => 932,
                'code' => '321204',
                'name' => '姜堰区',
                'parentId' => '321200',
                'level' => '3',
            ),
            432 => 
            array (
                'id' => 933,
                'code' => '321281',
                'name' => '兴化市',
                'parentId' => '321200',
                'level' => '3',
            ),
            433 => 
            array (
                'id' => 934,
                'code' => '321282',
                'name' => '靖江市',
                'parentId' => '321200',
                'level' => '3',
            ),
            434 => 
            array (
                'id' => 935,
                'code' => '321283',
                'name' => '泰兴市',
                'parentId' => '321200',
                'level' => '3',
            ),
            435 => 
            array (
                'id' => 936,
                'code' => '321300',
                'name' => '宿迁市',
                'parentId' => '320000',
                'level' => '2',
            ),
            436 => 
            array (
                'id' => 937,
                'code' => '321302',
                'name' => '宿城区',
                'parentId' => '321300',
                'level' => '3',
            ),
            437 => 
            array (
                'id' => 938,
                'code' => '321311',
                'name' => '宿豫区',
                'parentId' => '321300',
                'level' => '3',
            ),
            438 => 
            array (
                'id' => 939,
                'code' => '321322',
                'name' => '沭阳县',
                'parentId' => '321300',
                'level' => '3',
            ),
            439 => 
            array (
                'id' => 940,
                'code' => '321323',
                'name' => '泗阳县',
                'parentId' => '321300',
                'level' => '3',
            ),
            440 => 
            array (
                'id' => 941,
                'code' => '321324',
                'name' => '泗洪县',
                'parentId' => '321300',
                'level' => '3',
            ),
            441 => 
            array (
                'id' => 942,
                'code' => '330000',
                'name' => '浙江省',
                'parentId' => '100000',
                'level' => '1',
            ),
            442 => 
            array (
                'id' => 943,
                'code' => '330100',
                'name' => '杭州市',
                'parentId' => '330000',
                'level' => '2',
            ),
            443 => 
            array (
                'id' => 944,
                'code' => '330102',
                'name' => '上城区',
                'parentId' => '330100',
                'level' => '3',
            ),
            444 => 
            array (
                'id' => 945,
                'code' => '330103',
                'name' => '下城区',
                'parentId' => '330100',
                'level' => '3',
            ),
            445 => 
            array (
                'id' => 946,
                'code' => '330104',
                'name' => '江干区',
                'parentId' => '330100',
                'level' => '3',
            ),
            446 => 
            array (
                'id' => 947,
                'code' => '330105',
                'name' => '拱墅区',
                'parentId' => '330100',
                'level' => '3',
            ),
            447 => 
            array (
                'id' => 948,
                'code' => '330106',
                'name' => '西湖区',
                'parentId' => '330100',
                'level' => '3',
            ),
            448 => 
            array (
                'id' => 949,
                'code' => '330108',
                'name' => '滨江区',
                'parentId' => '330100',
                'level' => '3',
            ),
            449 => 
            array (
                'id' => 950,
                'code' => '330109',
                'name' => '萧山区',
                'parentId' => '330100',
                'level' => '3',
            ),
            450 => 
            array (
                'id' => 951,
                'code' => '330110',
                'name' => '余杭区',
                'parentId' => '330100',
                'level' => '3',
            ),
            451 => 
            array (
                'id' => 952,
                'code' => '330111',
                'name' => '富阳区',
                'parentId' => '330100',
                'level' => '3',
            ),
            452 => 
            array (
                'id' => 953,
                'code' => '330122',
                'name' => '桐庐县',
                'parentId' => '330100',
                'level' => '3',
            ),
            453 => 
            array (
                'id' => 954,
                'code' => '330127',
                'name' => '淳安县',
                'parentId' => '330100',
                'level' => '3',
            ),
            454 => 
            array (
                'id' => 955,
                'code' => '330182',
                'name' => '建德市',
                'parentId' => '330100',
                'level' => '3',
            ),
            455 => 
            array (
                'id' => 956,
                'code' => '330185',
                'name' => '临安市',
                'parentId' => '330100',
                'level' => '3',
            ),
            456 => 
            array (
                'id' => 957,
                'code' => '330200',
                'name' => '宁波市',
                'parentId' => '330000',
                'level' => '2',
            ),
            457 => 
            array (
                'id' => 958,
                'code' => '330203',
                'name' => '海曙区',
                'parentId' => '330200',
                'level' => '3',
            ),
            458 => 
            array (
                'id' => 959,
                'code' => '330204',
                'name' => '江东区',
                'parentId' => '330200',
                'level' => '3',
            ),
            459 => 
            array (
                'id' => 960,
                'code' => '330205',
                'name' => '江北区',
                'parentId' => '330200',
                'level' => '3',
            ),
            460 => 
            array (
                'id' => 961,
                'code' => '330206',
                'name' => '北仑区',
                'parentId' => '330200',
                'level' => '3',
            ),
            461 => 
            array (
                'id' => 962,
                'code' => '330211',
                'name' => '镇海区',
                'parentId' => '330200',
                'level' => '3',
            ),
            462 => 
            array (
                'id' => 963,
                'code' => '330212',
                'name' => '鄞州区',
                'parentId' => '330200',
                'level' => '3',
            ),
            463 => 
            array (
                'id' => 964,
                'code' => '330225',
                'name' => '象山县',
                'parentId' => '330200',
                'level' => '3',
            ),
            464 => 
            array (
                'id' => 965,
                'code' => '330226',
                'name' => '宁海县',
                'parentId' => '330200',
                'level' => '3',
            ),
            465 => 
            array (
                'id' => 966,
                'code' => '330281',
                'name' => '余姚市',
                'parentId' => '330200',
                'level' => '3',
            ),
            466 => 
            array (
                'id' => 967,
                'code' => '330282',
                'name' => '慈溪市',
                'parentId' => '330200',
                'level' => '3',
            ),
            467 => 
            array (
                'id' => 968,
                'code' => '330283',
                'name' => '奉化市',
                'parentId' => '330200',
                'level' => '3',
            ),
            468 => 
            array (
                'id' => 969,
                'code' => '330284',
                'name' => '杭州湾新区',
                'parentId' => '330200',
                'level' => '3',
            ),
            469 => 
            array (
                'id' => 970,
                'code' => '330300',
                'name' => '温州市',
                'parentId' => '330000',
                'level' => '2',
            ),
            470 => 
            array (
                'id' => 971,
                'code' => '330302',
                'name' => '鹿城区',
                'parentId' => '330300',
                'level' => '3',
            ),
            471 => 
            array (
                'id' => 972,
                'code' => '330303',
                'name' => '龙湾区',
                'parentId' => '330300',
                'level' => '3',
            ),
            472 => 
            array (
                'id' => 973,
                'code' => '330304',
                'name' => '瓯海区',
                'parentId' => '330300',
                'level' => '3',
            ),
            473 => 
            array (
                'id' => 974,
                'code' => '330305',
                'name' => '洞头区',
                'parentId' => '330300',
                'level' => '3',
            ),
            474 => 
            array (
                'id' => 975,
                'code' => '330324',
                'name' => '永嘉县',
                'parentId' => '330300',
                'level' => '3',
            ),
            475 => 
            array (
                'id' => 976,
                'code' => '330326',
                'name' => '平阳县',
                'parentId' => '330300',
                'level' => '3',
            ),
            476 => 
            array (
                'id' => 977,
                'code' => '330327',
                'name' => '苍南县',
                'parentId' => '330300',
                'level' => '3',
            ),
            477 => 
            array (
                'id' => 978,
                'code' => '330328',
                'name' => '文成县',
                'parentId' => '330300',
                'level' => '3',
            ),
            478 => 
            array (
                'id' => 979,
                'code' => '330329',
                'name' => '泰顺县',
                'parentId' => '330300',
                'level' => '3',
            ),
            479 => 
            array (
                'id' => 980,
                'code' => '330381',
                'name' => '瑞安市',
                'parentId' => '330300',
                'level' => '3',
            ),
            480 => 
            array (
                'id' => 981,
                'code' => '330382',
                'name' => '乐清市',
                'parentId' => '330300',
                'level' => '3',
            ),
            481 => 
            array (
                'id' => 982,
                'code' => '330400',
                'name' => '嘉兴市',
                'parentId' => '330000',
                'level' => '2',
            ),
            482 => 
            array (
                'id' => 983,
                'code' => '330402',
                'name' => '南湖区',
                'parentId' => '330400',
                'level' => '3',
            ),
            483 => 
            array (
                'id' => 984,
                'code' => '330411',
                'name' => '秀洲区',
                'parentId' => '330400',
                'level' => '3',
            ),
            484 => 
            array (
                'id' => 985,
                'code' => '330421',
                'name' => '嘉善县',
                'parentId' => '330400',
                'level' => '3',
            ),
            485 => 
            array (
                'id' => 986,
                'code' => '330424',
                'name' => '海盐县',
                'parentId' => '330400',
                'level' => '3',
            ),
            486 => 
            array (
                'id' => 987,
                'code' => '330481',
                'name' => '海宁市',
                'parentId' => '330400',
                'level' => '3',
            ),
            487 => 
            array (
                'id' => 988,
                'code' => '330482',
                'name' => '平湖市',
                'parentId' => '330400',
                'level' => '3',
            ),
            488 => 
            array (
                'id' => 989,
                'code' => '330483',
                'name' => '桐乡市',
                'parentId' => '330400',
                'level' => '3',
            ),
            489 => 
            array (
                'id' => 990,
                'code' => '330500',
                'name' => '湖州市',
                'parentId' => '330000',
                'level' => '2',
            ),
            490 => 
            array (
                'id' => 991,
                'code' => '330502',
                'name' => '吴兴区',
                'parentId' => '330500',
                'level' => '3',
            ),
            491 => 
            array (
                'id' => 992,
                'code' => '330503',
                'name' => '南浔区',
                'parentId' => '330500',
                'level' => '3',
            ),
            492 => 
            array (
                'id' => 993,
                'code' => '330521',
                'name' => '德清县',
                'parentId' => '330500',
                'level' => '3',
            ),
            493 => 
            array (
                'id' => 994,
                'code' => '330522',
                'name' => '长兴县',
                'parentId' => '330500',
                'level' => '3',
            ),
            494 => 
            array (
                'id' => 995,
                'code' => '330523',
                'name' => '安吉县',
                'parentId' => '330500',
                'level' => '3',
            ),
            495 => 
            array (
                'id' => 996,
                'code' => '330600',
                'name' => '绍兴市',
                'parentId' => '330000',
                'level' => '2',
            ),
            496 => 
            array (
                'id' => 997,
                'code' => '330602',
                'name' => '越城区',
                'parentId' => '330600',
                'level' => '3',
            ),
            497 => 
            array (
                'id' => 998,
                'code' => '330603',
                'name' => '柯桥区',
                'parentId' => '330600',
                'level' => '3',
            ),
            498 => 
            array (
                'id' => 999,
                'code' => '330604',
                'name' => '上虞区',
                'parentId' => '330600',
                'level' => '3',
            ),
            499 => 
            array (
                'id' => 1000,
                'code' => '330624',
                'name' => '新昌县',
                'parentId' => '330600',
                'level' => '3',
            ),
        ));
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'code' => '330681',
                'name' => '诸暨市',
                'parentId' => '330600',
                'level' => '3',
            ),
            1 => 
            array (
                'id' => 1002,
                'code' => '330683',
                'name' => '嵊州市',
                'parentId' => '330600',
                'level' => '3',
            ),
            2 => 
            array (
                'id' => 1003,
                'code' => '330700',
                'name' => '金华市',
                'parentId' => '330000',
                'level' => '2',
            ),
            3 => 
            array (
                'id' => 1004,
                'code' => '330702',
                'name' => '婺城区',
                'parentId' => '330700',
                'level' => '3',
            ),
            4 => 
            array (
                'id' => 1005,
                'code' => '330703',
                'name' => '金东区',
                'parentId' => '330700',
                'level' => '3',
            ),
            5 => 
            array (
                'id' => 1006,
                'code' => '330723',
                'name' => '武义县',
                'parentId' => '330700',
                'level' => '3',
            ),
            6 => 
            array (
                'id' => 1007,
                'code' => '330726',
                'name' => '浦江县',
                'parentId' => '330700',
                'level' => '3',
            ),
            7 => 
            array (
                'id' => 1008,
                'code' => '330727',
                'name' => '磐安县',
                'parentId' => '330700',
                'level' => '3',
            ),
            8 => 
            array (
                'id' => 1009,
                'code' => '330781',
                'name' => '兰溪市',
                'parentId' => '330700',
                'level' => '3',
            ),
            9 => 
            array (
                'id' => 1010,
                'code' => '330782',
                'name' => '义乌市',
                'parentId' => '330700',
                'level' => '3',
            ),
            10 => 
            array (
                'id' => 1011,
                'code' => '330783',
                'name' => '东阳市',
                'parentId' => '330700',
                'level' => '3',
            ),
            11 => 
            array (
                'id' => 1012,
                'code' => '330784',
                'name' => '永康市',
                'parentId' => '330700',
                'level' => '3',
            ),
            12 => 
            array (
                'id' => 1013,
                'code' => '330800',
                'name' => '衢州市',
                'parentId' => '330000',
                'level' => '2',
            ),
            13 => 
            array (
                'id' => 1014,
                'code' => '330802',
                'name' => '柯城区',
                'parentId' => '330800',
                'level' => '3',
            ),
            14 => 
            array (
                'id' => 1015,
                'code' => '330803',
                'name' => '衢江区',
                'parentId' => '330800',
                'level' => '3',
            ),
            15 => 
            array (
                'id' => 1016,
                'code' => '330822',
                'name' => '常山县',
                'parentId' => '330800',
                'level' => '3',
            ),
            16 => 
            array (
                'id' => 1017,
                'code' => '330824',
                'name' => '开化县',
                'parentId' => '330800',
                'level' => '3',
            ),
            17 => 
            array (
                'id' => 1018,
                'code' => '330825',
                'name' => '龙游县',
                'parentId' => '330800',
                'level' => '3',
            ),
            18 => 
            array (
                'id' => 1019,
                'code' => '330881',
                'name' => '江山市',
                'parentId' => '330800',
                'level' => '3',
            ),
            19 => 
            array (
                'id' => 1020,
                'code' => '330900',
                'name' => '舟山市',
                'parentId' => '330000',
                'level' => '2',
            ),
            20 => 
            array (
                'id' => 1021,
                'code' => '330902',
                'name' => '定海区',
                'parentId' => '330900',
                'level' => '3',
            ),
            21 => 
            array (
                'id' => 1022,
                'code' => '330903',
                'name' => '普陀区',
                'parentId' => '330900',
                'level' => '3',
            ),
            22 => 
            array (
                'id' => 1023,
                'code' => '330921',
                'name' => '岱山县',
                'parentId' => '330900',
                'level' => '3',
            ),
            23 => 
            array (
                'id' => 1024,
                'code' => '330922',
                'name' => '嵊泗县',
                'parentId' => '330900',
                'level' => '3',
            ),
            24 => 
            array (
                'id' => 1025,
                'code' => '331000',
                'name' => '台州市',
                'parentId' => '330000',
                'level' => '2',
            ),
            25 => 
            array (
                'id' => 1026,
                'code' => '331002',
                'name' => '椒江区',
                'parentId' => '331000',
                'level' => '3',
            ),
            26 => 
            array (
                'id' => 1027,
                'code' => '331003',
                'name' => '黄岩区',
                'parentId' => '331000',
                'level' => '3',
            ),
            27 => 
            array (
                'id' => 1028,
                'code' => '331004',
                'name' => '路桥区',
                'parentId' => '331000',
                'level' => '3',
            ),
            28 => 
            array (
                'id' => 1029,
                'code' => '331021',
                'name' => '玉环县',
                'parentId' => '331000',
                'level' => '3',
            ),
            29 => 
            array (
                'id' => 1030,
                'code' => '331022',
                'name' => '三门县',
                'parentId' => '331000',
                'level' => '3',
            ),
            30 => 
            array (
                'id' => 1031,
                'code' => '331023',
                'name' => '天台县',
                'parentId' => '331000',
                'level' => '3',
            ),
            31 => 
            array (
                'id' => 1032,
                'code' => '331024',
                'name' => '仙居县',
                'parentId' => '331000',
                'level' => '3',
            ),
            32 => 
            array (
                'id' => 1033,
                'code' => '331081',
                'name' => '温岭市',
                'parentId' => '331000',
                'level' => '3',
            ),
            33 => 
            array (
                'id' => 1034,
                'code' => '331082',
                'name' => '临海市',
                'parentId' => '331000',
                'level' => '3',
            ),
            34 => 
            array (
                'id' => 1035,
                'code' => '331100',
                'name' => '丽水市',
                'parentId' => '330000',
                'level' => '2',
            ),
            35 => 
            array (
                'id' => 1036,
                'code' => '331102',
                'name' => '莲都区',
                'parentId' => '331100',
                'level' => '3',
            ),
            36 => 
            array (
                'id' => 1037,
                'code' => '331121',
                'name' => '青田县',
                'parentId' => '331100',
                'level' => '3',
            ),
            37 => 
            array (
                'id' => 1038,
                'code' => '331122',
                'name' => '缙云县',
                'parentId' => '331100',
                'level' => '3',
            ),
            38 => 
            array (
                'id' => 1039,
                'code' => '331123',
                'name' => '遂昌县',
                'parentId' => '331100',
                'level' => '3',
            ),
            39 => 
            array (
                'id' => 1040,
                'code' => '331124',
                'name' => '松阳县',
                'parentId' => '331100',
                'level' => '3',
            ),
            40 => 
            array (
                'id' => 1041,
                'code' => '331125',
                'name' => '云和县',
                'parentId' => '331100',
                'level' => '3',
            ),
            41 => 
            array (
                'id' => 1042,
                'code' => '331126',
                'name' => '庆元县',
                'parentId' => '331100',
                'level' => '3',
            ),
            42 => 
            array (
                'id' => 1043,
                'code' => '331127',
                'name' => '景宁畲族自治县',
                'parentId' => '331100',
                'level' => '3',
            ),
            43 => 
            array (
                'id' => 1044,
                'code' => '331181',
                'name' => '龙泉市',
                'parentId' => '331100',
                'level' => '3',
            ),
            44 => 
            array (
                'id' => 1045,
                'code' => '331200',
                'name' => '舟山群岛新区',
                'parentId' => '330000',
                'level' => '2',
            ),
            45 => 
            array (
                'id' => 1046,
                'code' => '331201',
                'name' => '金塘岛',
                'parentId' => '331200',
                'level' => '3',
            ),
            46 => 
            array (
                'id' => 1047,
                'code' => '331202',
                'name' => '六横岛',
                'parentId' => '331200',
                'level' => '3',
            ),
            47 => 
            array (
                'id' => 1048,
                'code' => '331203',
                'name' => '衢山岛',
                'parentId' => '331200',
                'level' => '3',
            ),
            48 => 
            array (
                'id' => 1049,
                'code' => '331204',
                'name' => '舟山本岛西北部',
                'parentId' => '331200',
                'level' => '3',
            ),
            49 => 
            array (
                'id' => 1050,
                'code' => '331205',
                'name' => '岱山岛西南部',
                'parentId' => '331200',
                'level' => '3',
            ),
            50 => 
            array (
                'id' => 1051,
                'code' => '331206',
                'name' => '泗礁岛',
                'parentId' => '331200',
                'level' => '3',
            ),
            51 => 
            array (
                'id' => 1052,
                'code' => '331207',
                'name' => '朱家尖岛',
                'parentId' => '331200',
                'level' => '3',
            ),
            52 => 
            array (
                'id' => 1053,
                'code' => '331208',
                'name' => '洋山岛',
                'parentId' => '331200',
                'level' => '3',
            ),
            53 => 
            array (
                'id' => 1054,
                'code' => '331209',
                'name' => '长涂岛',
                'parentId' => '331200',
                'level' => '3',
            ),
            54 => 
            array (
                'id' => 1055,
                'code' => '331210',
                'name' => '虾峙岛',
                'parentId' => '331200',
                'level' => '3',
            ),
            55 => 
            array (
                'id' => 1056,
                'code' => '340000',
                'name' => '安徽省',
                'parentId' => '100000',
                'level' => '1',
            ),
            56 => 
            array (
                'id' => 1057,
                'code' => '340100',
                'name' => '合肥市',
                'parentId' => '340000',
                'level' => '2',
            ),
            57 => 
            array (
                'id' => 1058,
                'code' => '340102',
                'name' => '瑶海区',
                'parentId' => '340100',
                'level' => '3',
            ),
            58 => 
            array (
                'id' => 1059,
                'code' => '340103',
                'name' => '庐阳区',
                'parentId' => '340100',
                'level' => '3',
            ),
            59 => 
            array (
                'id' => 1060,
                'code' => '340104',
                'name' => '蜀山区',
                'parentId' => '340100',
                'level' => '3',
            ),
            60 => 
            array (
                'id' => 1061,
                'code' => '340111',
                'name' => '包河区',
                'parentId' => '340100',
                'level' => '3',
            ),
            61 => 
            array (
                'id' => 1062,
                'code' => '340121',
                'name' => '长丰县',
                'parentId' => '340100',
                'level' => '3',
            ),
            62 => 
            array (
                'id' => 1063,
                'code' => '340122',
                'name' => '肥东县',
                'parentId' => '340100',
                'level' => '3',
            ),
            63 => 
            array (
                'id' => 1064,
                'code' => '340123',
                'name' => '肥西县',
                'parentId' => '340100',
                'level' => '3',
            ),
            64 => 
            array (
                'id' => 1065,
                'code' => '340124',
                'name' => '庐江县',
                'parentId' => '340100',
                'level' => '3',
            ),
            65 => 
            array (
                'id' => 1066,
                'code' => '340181',
                'name' => '巢湖市',
                'parentId' => '340100',
                'level' => '3',
            ),
            66 => 
            array (
                'id' => 1067,
                'code' => '340200',
                'name' => '芜湖市',
                'parentId' => '340000',
                'level' => '2',
            ),
            67 => 
            array (
                'id' => 1068,
                'code' => '340202',
                'name' => '镜湖区',
                'parentId' => '340200',
                'level' => '3',
            ),
            68 => 
            array (
                'id' => 1069,
                'code' => '340203',
                'name' => '弋江区',
                'parentId' => '340200',
                'level' => '3',
            ),
            69 => 
            array (
                'id' => 1070,
                'code' => '340207',
                'name' => '鸠江区',
                'parentId' => '340200',
                'level' => '3',
            ),
            70 => 
            array (
                'id' => 1071,
                'code' => '340208',
                'name' => '三山区',
                'parentId' => '340200',
                'level' => '3',
            ),
            71 => 
            array (
                'id' => 1072,
                'code' => '340221',
                'name' => '芜湖县',
                'parentId' => '340200',
                'level' => '3',
            ),
            72 => 
            array (
                'id' => 1073,
                'code' => '340222',
                'name' => '繁昌县',
                'parentId' => '340200',
                'level' => '3',
            ),
            73 => 
            array (
                'id' => 1074,
                'code' => '340223',
                'name' => '南陵县',
                'parentId' => '340200',
                'level' => '3',
            ),
            74 => 
            array (
                'id' => 1075,
                'code' => '340225',
                'name' => '无为县',
                'parentId' => '340200',
                'level' => '3',
            ),
            75 => 
            array (
                'id' => 1076,
                'code' => '340300',
                'name' => '蚌埠市',
                'parentId' => '340000',
                'level' => '2',
            ),
            76 => 
            array (
                'id' => 1077,
                'code' => '340302',
                'name' => '龙子湖区',
                'parentId' => '340300',
                'level' => '3',
            ),
            77 => 
            array (
                'id' => 1078,
                'code' => '340303',
                'name' => '蚌山区',
                'parentId' => '340300',
                'level' => '3',
            ),
            78 => 
            array (
                'id' => 1079,
                'code' => '340304',
                'name' => '禹会区',
                'parentId' => '340300',
                'level' => '3',
            ),
            79 => 
            array (
                'id' => 1080,
                'code' => '340311',
                'name' => '淮上区',
                'parentId' => '340300',
                'level' => '3',
            ),
            80 => 
            array (
                'id' => 1081,
                'code' => '340321',
                'name' => '怀远县',
                'parentId' => '340300',
                'level' => '3',
            ),
            81 => 
            array (
                'id' => 1082,
                'code' => '340322',
                'name' => '五河县',
                'parentId' => '340300',
                'level' => '3',
            ),
            82 => 
            array (
                'id' => 1083,
                'code' => '340323',
                'name' => '固镇县',
                'parentId' => '340300',
                'level' => '3',
            ),
            83 => 
            array (
                'id' => 1084,
                'code' => '340400',
                'name' => '淮南市',
                'parentId' => '340000',
                'level' => '2',
            ),
            84 => 
            array (
                'id' => 1085,
                'code' => '340402',
                'name' => '大通区',
                'parentId' => '340400',
                'level' => '3',
            ),
            85 => 
            array (
                'id' => 1086,
                'code' => '340403',
                'name' => '田家庵区',
                'parentId' => '340400',
                'level' => '3',
            ),
            86 => 
            array (
                'id' => 1087,
                'code' => '340404',
                'name' => '谢家集区',
                'parentId' => '340400',
                'level' => '3',
            ),
            87 => 
            array (
                'id' => 1088,
                'code' => '340405',
                'name' => '八公山区',
                'parentId' => '340400',
                'level' => '3',
            ),
            88 => 
            array (
                'id' => 1089,
                'code' => '340406',
                'name' => '潘集区',
                'parentId' => '340400',
                'level' => '3',
            ),
            89 => 
            array (
                'id' => 1090,
                'code' => '340421',
                'name' => '凤台县',
                'parentId' => '340400',
                'level' => '3',
            ),
            90 => 
            array (
                'id' => 1091,
                'code' => '340500',
                'name' => '马鞍山市',
                'parentId' => '340000',
                'level' => '2',
            ),
            91 => 
            array (
                'id' => 1092,
                'code' => '340503',
                'name' => '花山区',
                'parentId' => '340500',
                'level' => '3',
            ),
            92 => 
            array (
                'id' => 1093,
                'code' => '340504',
                'name' => '雨山区',
                'parentId' => '340500',
                'level' => '3',
            ),
            93 => 
            array (
                'id' => 1094,
                'code' => '340506',
                'name' => '博望区',
                'parentId' => '340500',
                'level' => '3',
            ),
            94 => 
            array (
                'id' => 1095,
                'code' => '340521',
                'name' => '当涂县',
                'parentId' => '340500',
                'level' => '3',
            ),
            95 => 
            array (
                'id' => 1096,
                'code' => '340522',
                'name' => '含山县',
                'parentId' => '340500',
                'level' => '3',
            ),
            96 => 
            array (
                'id' => 1097,
                'code' => '340523',
                'name' => '和县',
                'parentId' => '340500',
                'level' => '3',
            ),
            97 => 
            array (
                'id' => 1098,
                'code' => '340600',
                'name' => '淮北市',
                'parentId' => '340000',
                'level' => '2',
            ),
            98 => 
            array (
                'id' => 1099,
                'code' => '340602',
                'name' => '杜集区',
                'parentId' => '340600',
                'level' => '3',
            ),
            99 => 
            array (
                'id' => 1100,
                'code' => '340603',
                'name' => '相山区',
                'parentId' => '340600',
                'level' => '3',
            ),
            100 => 
            array (
                'id' => 1101,
                'code' => '340604',
                'name' => '烈山区',
                'parentId' => '340600',
                'level' => '3',
            ),
            101 => 
            array (
                'id' => 1102,
                'code' => '340621',
                'name' => '濉溪县',
                'parentId' => '340600',
                'level' => '3',
            ),
            102 => 
            array (
                'id' => 1103,
                'code' => '340700',
                'name' => '铜陵市',
                'parentId' => '340000',
                'level' => '2',
            ),
            103 => 
            array (
                'id' => 1104,
                'code' => '340702',
                'name' => '铜官山区',
                'parentId' => '340700',
                'level' => '3',
            ),
            104 => 
            array (
                'id' => 1105,
                'code' => '340703',
                'name' => '狮子山区',
                'parentId' => '340700',
                'level' => '3',
            ),
            105 => 
            array (
                'id' => 1106,
                'code' => '340711',
                'name' => '郊区',
                'parentId' => '340700',
                'level' => '3',
            ),
            106 => 
            array (
                'id' => 1107,
                'code' => '340721',
                'name' => '铜陵县',
                'parentId' => '340700',
                'level' => '3',
            ),
            107 => 
            array (
                'id' => 1108,
                'code' => '340800',
                'name' => '安庆市',
                'parentId' => '340000',
                'level' => '2',
            ),
            108 => 
            array (
                'id' => 1109,
                'code' => '340802',
                'name' => '迎江区',
                'parentId' => '340800',
                'level' => '3',
            ),
            109 => 
            array (
                'id' => 1110,
                'code' => '340803',
                'name' => '大观区',
                'parentId' => '340800',
                'level' => '3',
            ),
            110 => 
            array (
                'id' => 1111,
                'code' => '340811',
                'name' => '宜秀区',
                'parentId' => '340800',
                'level' => '3',
            ),
            111 => 
            array (
                'id' => 1112,
                'code' => '340822',
                'name' => '怀宁县',
                'parentId' => '340800',
                'level' => '3',
            ),
            112 => 
            array (
                'id' => 1113,
                'code' => '340823',
                'name' => '枞阳县',
                'parentId' => '340800',
                'level' => '3',
            ),
            113 => 
            array (
                'id' => 1114,
                'code' => '340824',
                'name' => '潜山县',
                'parentId' => '340800',
                'level' => '3',
            ),
            114 => 
            array (
                'id' => 1115,
                'code' => '340825',
                'name' => '太湖县',
                'parentId' => '340800',
                'level' => '3',
            ),
            115 => 
            array (
                'id' => 1116,
                'code' => '340826',
                'name' => '宿松县',
                'parentId' => '340800',
                'level' => '3',
            ),
            116 => 
            array (
                'id' => 1117,
                'code' => '340827',
                'name' => '望江县',
                'parentId' => '340800',
                'level' => '3',
            ),
            117 => 
            array (
                'id' => 1118,
                'code' => '340828',
                'name' => '岳西县',
                'parentId' => '340800',
                'level' => '3',
            ),
            118 => 
            array (
                'id' => 1119,
                'code' => '340881',
                'name' => '桐城市',
                'parentId' => '340800',
                'level' => '3',
            ),
            119 => 
            array (
                'id' => 1120,
                'code' => '341000',
                'name' => '黄山市',
                'parentId' => '340000',
                'level' => '2',
            ),
            120 => 
            array (
                'id' => 1121,
                'code' => '341002',
                'name' => '屯溪区',
                'parentId' => '341000',
                'level' => '3',
            ),
            121 => 
            array (
                'id' => 1122,
                'code' => '341003',
                'name' => '黄山区',
                'parentId' => '341000',
                'level' => '3',
            ),
            122 => 
            array (
                'id' => 1123,
                'code' => '341004',
                'name' => '徽州区',
                'parentId' => '341000',
                'level' => '3',
            ),
            123 => 
            array (
                'id' => 1124,
                'code' => '341021',
                'name' => '歙县',
                'parentId' => '341000',
                'level' => '3',
            ),
            124 => 
            array (
                'id' => 1125,
                'code' => '341022',
                'name' => '休宁县',
                'parentId' => '341000',
                'level' => '3',
            ),
            125 => 
            array (
                'id' => 1126,
                'code' => '341023',
                'name' => '黟县',
                'parentId' => '341000',
                'level' => '3',
            ),
            126 => 
            array (
                'id' => 1127,
                'code' => '341024',
                'name' => '祁门县',
                'parentId' => '341000',
                'level' => '3',
            ),
            127 => 
            array (
                'id' => 1128,
                'code' => '341100',
                'name' => '滁州市',
                'parentId' => '340000',
                'level' => '2',
            ),
            128 => 
            array (
                'id' => 1129,
                'code' => '341102',
                'name' => '琅琊区',
                'parentId' => '341100',
                'level' => '3',
            ),
            129 => 
            array (
                'id' => 1130,
                'code' => '341103',
                'name' => '南谯区',
                'parentId' => '341100',
                'level' => '3',
            ),
            130 => 
            array (
                'id' => 1131,
                'code' => '341122',
                'name' => '来安县',
                'parentId' => '341100',
                'level' => '3',
            ),
            131 => 
            array (
                'id' => 1132,
                'code' => '341124',
                'name' => '全椒县',
                'parentId' => '341100',
                'level' => '3',
            ),
            132 => 
            array (
                'id' => 1133,
                'code' => '341125',
                'name' => '定远县',
                'parentId' => '341100',
                'level' => '3',
            ),
            133 => 
            array (
                'id' => 1134,
                'code' => '341126',
                'name' => '凤阳县',
                'parentId' => '341100',
                'level' => '3',
            ),
            134 => 
            array (
                'id' => 1135,
                'code' => '341181',
                'name' => '天长市',
                'parentId' => '341100',
                'level' => '3',
            ),
            135 => 
            array (
                'id' => 1136,
                'code' => '341182',
                'name' => '明光市',
                'parentId' => '341100',
                'level' => '3',
            ),
            136 => 
            array (
                'id' => 1137,
                'code' => '341200',
                'name' => '阜阳市',
                'parentId' => '340000',
                'level' => '2',
            ),
            137 => 
            array (
                'id' => 1138,
                'code' => '341202',
                'name' => '颍州区',
                'parentId' => '341200',
                'level' => '3',
            ),
            138 => 
            array (
                'id' => 1139,
                'code' => '341203',
                'name' => '颍东区',
                'parentId' => '341200',
                'level' => '3',
            ),
            139 => 
            array (
                'id' => 1140,
                'code' => '341204',
                'name' => '颍泉区',
                'parentId' => '341200',
                'level' => '3',
            ),
            140 => 
            array (
                'id' => 1141,
                'code' => '341221',
                'name' => '临泉县',
                'parentId' => '341200',
                'level' => '3',
            ),
            141 => 
            array (
                'id' => 1142,
                'code' => '341222',
                'name' => '太和县',
                'parentId' => '341200',
                'level' => '3',
            ),
            142 => 
            array (
                'id' => 1143,
                'code' => '341225',
                'name' => '阜南县',
                'parentId' => '341200',
                'level' => '3',
            ),
            143 => 
            array (
                'id' => 1144,
                'code' => '341226',
                'name' => '颍上县',
                'parentId' => '341200',
                'level' => '3',
            ),
            144 => 
            array (
                'id' => 1145,
                'code' => '341282',
                'name' => '界首市',
                'parentId' => '341200',
                'level' => '3',
            ),
            145 => 
            array (
                'id' => 1146,
                'code' => '341300',
                'name' => '宿州市',
                'parentId' => '340000',
                'level' => '2',
            ),
            146 => 
            array (
                'id' => 1147,
                'code' => '341302',
                'name' => '埇桥区',
                'parentId' => '341300',
                'level' => '3',
            ),
            147 => 
            array (
                'id' => 1148,
                'code' => '341321',
                'name' => '砀山县',
                'parentId' => '341300',
                'level' => '3',
            ),
            148 => 
            array (
                'id' => 1149,
                'code' => '341322',
                'name' => '萧县',
                'parentId' => '341300',
                'level' => '3',
            ),
            149 => 
            array (
                'id' => 1150,
                'code' => '341323',
                'name' => '灵璧县',
                'parentId' => '341300',
                'level' => '3',
            ),
            150 => 
            array (
                'id' => 1151,
                'code' => '341324',
                'name' => '泗县',
                'parentId' => '341300',
                'level' => '3',
            ),
            151 => 
            array (
                'id' => 1152,
                'code' => '341500',
                'name' => '六安市',
                'parentId' => '340000',
                'level' => '2',
            ),
            152 => 
            array (
                'id' => 1153,
                'code' => '341502',
                'name' => '金安区',
                'parentId' => '341500',
                'level' => '3',
            ),
            153 => 
            array (
                'id' => 1154,
                'code' => '341503',
                'name' => '裕安区',
                'parentId' => '341500',
                'level' => '3',
            ),
            154 => 
            array (
                'id' => 1155,
                'code' => '341521',
                'name' => '寿县',
                'parentId' => '341500',
                'level' => '3',
            ),
            155 => 
            array (
                'id' => 1156,
                'code' => '341522',
                'name' => '霍邱县',
                'parentId' => '341500',
                'level' => '3',
            ),
            156 => 
            array (
                'id' => 1157,
                'code' => '341523',
                'name' => '舒城县',
                'parentId' => '341500',
                'level' => '3',
            ),
            157 => 
            array (
                'id' => 1158,
                'code' => '341524',
                'name' => '金寨县',
                'parentId' => '341500',
                'level' => '3',
            ),
            158 => 
            array (
                'id' => 1159,
                'code' => '341525',
                'name' => '霍山县',
                'parentId' => '341500',
                'level' => '3',
            ),
            159 => 
            array (
                'id' => 1160,
                'code' => '341600',
                'name' => '亳州市',
                'parentId' => '340000',
                'level' => '2',
            ),
            160 => 
            array (
                'id' => 1161,
                'code' => '341602',
                'name' => '谯城区',
                'parentId' => '341600',
                'level' => '3',
            ),
            161 => 
            array (
                'id' => 1162,
                'code' => '341621',
                'name' => '涡阳县',
                'parentId' => '341600',
                'level' => '3',
            ),
            162 => 
            array (
                'id' => 1163,
                'code' => '341622',
                'name' => '蒙城县',
                'parentId' => '341600',
                'level' => '3',
            ),
            163 => 
            array (
                'id' => 1164,
                'code' => '341623',
                'name' => '利辛县',
                'parentId' => '341600',
                'level' => '3',
            ),
            164 => 
            array (
                'id' => 1165,
                'code' => '341700',
                'name' => '池州市',
                'parentId' => '340000',
                'level' => '2',
            ),
            165 => 
            array (
                'id' => 1166,
                'code' => '341702',
                'name' => '贵池区',
                'parentId' => '341700',
                'level' => '3',
            ),
            166 => 
            array (
                'id' => 1167,
                'code' => '341721',
                'name' => '东至县',
                'parentId' => '341700',
                'level' => '3',
            ),
            167 => 
            array (
                'id' => 1168,
                'code' => '341722',
                'name' => '石台县',
                'parentId' => '341700',
                'level' => '3',
            ),
            168 => 
            array (
                'id' => 1169,
                'code' => '341723',
                'name' => '青阳县',
                'parentId' => '341700',
                'level' => '3',
            ),
            169 => 
            array (
                'id' => 1170,
                'code' => '341800',
                'name' => '宣城市',
                'parentId' => '340000',
                'level' => '2',
            ),
            170 => 
            array (
                'id' => 1171,
                'code' => '341802',
                'name' => '宣州区',
                'parentId' => '341800',
                'level' => '3',
            ),
            171 => 
            array (
                'id' => 1172,
                'code' => '341821',
                'name' => '郎溪县',
                'parentId' => '341800',
                'level' => '3',
            ),
            172 => 
            array (
                'id' => 1173,
                'code' => '341822',
                'name' => '广德县',
                'parentId' => '341800',
                'level' => '3',
            ),
            173 => 
            array (
                'id' => 1174,
                'code' => '341823',
                'name' => '泾县',
                'parentId' => '341800',
                'level' => '3',
            ),
            174 => 
            array (
                'id' => 1175,
                'code' => '341824',
                'name' => '绩溪县',
                'parentId' => '341800',
                'level' => '3',
            ),
            175 => 
            array (
                'id' => 1176,
                'code' => '341825',
                'name' => '旌德县',
                'parentId' => '341800',
                'level' => '3',
            ),
            176 => 
            array (
                'id' => 1177,
                'code' => '341881',
                'name' => '宁国市',
                'parentId' => '341800',
                'level' => '3',
            ),
            177 => 
            array (
                'id' => 1178,
                'code' => '350000',
                'name' => '福建省',
                'parentId' => '100000',
                'level' => '1',
            ),
            178 => 
            array (
                'id' => 1179,
                'code' => '350100',
                'name' => '福州市',
                'parentId' => '350000',
                'level' => '2',
            ),
            179 => 
            array (
                'id' => 1180,
                'code' => '350102',
                'name' => '鼓楼区',
                'parentId' => '350100',
                'level' => '3',
            ),
            180 => 
            array (
                'id' => 1181,
                'code' => '350103',
                'name' => '台江区',
                'parentId' => '350100',
                'level' => '3',
            ),
            181 => 
            array (
                'id' => 1182,
                'code' => '350104',
                'name' => '仓山区',
                'parentId' => '350100',
                'level' => '3',
            ),
            182 => 
            array (
                'id' => 1183,
                'code' => '350105',
                'name' => '马尾区',
                'parentId' => '350100',
                'level' => '3',
            ),
            183 => 
            array (
                'id' => 1184,
                'code' => '350111',
                'name' => '晋安区',
                'parentId' => '350100',
                'level' => '3',
            ),
            184 => 
            array (
                'id' => 1185,
                'code' => '350121',
                'name' => '闽侯县',
                'parentId' => '350100',
                'level' => '3',
            ),
            185 => 
            array (
                'id' => 1186,
                'code' => '350122',
                'name' => '连江县',
                'parentId' => '350100',
                'level' => '3',
            ),
            186 => 
            array (
                'id' => 1187,
                'code' => '350123',
                'name' => '罗源县',
                'parentId' => '350100',
                'level' => '3',
            ),
            187 => 
            array (
                'id' => 1188,
                'code' => '350124',
                'name' => '闽清县',
                'parentId' => '350100',
                'level' => '3',
            ),
            188 => 
            array (
                'id' => 1189,
                'code' => '350125',
                'name' => '永泰县',
                'parentId' => '350100',
                'level' => '3',
            ),
            189 => 
            array (
                'id' => 1190,
                'code' => '350128',
                'name' => '平潭县',
                'parentId' => '350100',
                'level' => '3',
            ),
            190 => 
            array (
                'id' => 1191,
                'code' => '350181',
                'name' => '福清市',
                'parentId' => '350100',
                'level' => '3',
            ),
            191 => 
            array (
                'id' => 1192,
                'code' => '350182',
                'name' => '长乐市',
                'parentId' => '350100',
                'level' => '3',
            ),
            192 => 
            array (
                'id' => 1193,
                'code' => '350183',
                'name' => '金山新区',
                'parentId' => '350100',
                'level' => '3',
            ),
            193 => 
            array (
                'id' => 1194,
                'code' => '350200',
                'name' => '厦门市',
                'parentId' => '350000',
                'level' => '2',
            ),
            194 => 
            array (
                'id' => 1195,
                'code' => '350203',
                'name' => '思明区',
                'parentId' => '350200',
                'level' => '3',
            ),
            195 => 
            array (
                'id' => 1196,
                'code' => '350205',
                'name' => '海沧区',
                'parentId' => '350200',
                'level' => '3',
            ),
            196 => 
            array (
                'id' => 1197,
                'code' => '350206',
                'name' => '湖里区',
                'parentId' => '350200',
                'level' => '3',
            ),
            197 => 
            array (
                'id' => 1198,
                'code' => '350211',
                'name' => '集美区',
                'parentId' => '350200',
                'level' => '3',
            ),
            198 => 
            array (
                'id' => 1199,
                'code' => '350212',
                'name' => '同安区',
                'parentId' => '350200',
                'level' => '3',
            ),
            199 => 
            array (
                'id' => 1200,
                'code' => '350213',
                'name' => '翔安区',
                'parentId' => '350200',
                'level' => '3',
            ),
            200 => 
            array (
                'id' => 1201,
                'code' => '350300',
                'name' => '莆田市',
                'parentId' => '350000',
                'level' => '2',
            ),
            201 => 
            array (
                'id' => 1202,
                'code' => '350302',
                'name' => '城厢区',
                'parentId' => '350300',
                'level' => '3',
            ),
            202 => 
            array (
                'id' => 1203,
                'code' => '350303',
                'name' => '涵江区',
                'parentId' => '350300',
                'level' => '3',
            ),
            203 => 
            array (
                'id' => 1204,
                'code' => '350304',
                'name' => '荔城区',
                'parentId' => '350300',
                'level' => '3',
            ),
            204 => 
            array (
                'id' => 1205,
                'code' => '350305',
                'name' => '秀屿区',
                'parentId' => '350300',
                'level' => '3',
            ),
            205 => 
            array (
                'id' => 1206,
                'code' => '350322',
                'name' => '仙游县',
                'parentId' => '350300',
                'level' => '3',
            ),
            206 => 
            array (
                'id' => 1207,
                'code' => '350400',
                'name' => '三明市',
                'parentId' => '350000',
                'level' => '2',
            ),
            207 => 
            array (
                'id' => 1208,
                'code' => '350402',
                'name' => '梅列区',
                'parentId' => '350400',
                'level' => '3',
            ),
            208 => 
            array (
                'id' => 1209,
                'code' => '350403',
                'name' => '三元区',
                'parentId' => '350400',
                'level' => '3',
            ),
            209 => 
            array (
                'id' => 1210,
                'code' => '350421',
                'name' => '明溪县',
                'parentId' => '350400',
                'level' => '3',
            ),
            210 => 
            array (
                'id' => 1211,
                'code' => '350423',
                'name' => '清流县',
                'parentId' => '350400',
                'level' => '3',
            ),
            211 => 
            array (
                'id' => 1212,
                'code' => '350424',
                'name' => '宁化县',
                'parentId' => '350400',
                'level' => '3',
            ),
            212 => 
            array (
                'id' => 1213,
                'code' => '350425',
                'name' => '大田县',
                'parentId' => '350400',
                'level' => '3',
            ),
            213 => 
            array (
                'id' => 1214,
                'code' => '350426',
                'name' => '尤溪县',
                'parentId' => '350400',
                'level' => '3',
            ),
            214 => 
            array (
                'id' => 1215,
                'code' => '350427',
                'name' => '沙县',
                'parentId' => '350400',
                'level' => '3',
            ),
            215 => 
            array (
                'id' => 1216,
                'code' => '350428',
                'name' => '将乐县',
                'parentId' => '350400',
                'level' => '3',
            ),
            216 => 
            array (
                'id' => 1217,
                'code' => '350429',
                'name' => '泰宁县',
                'parentId' => '350400',
                'level' => '3',
            ),
            217 => 
            array (
                'id' => 1218,
                'code' => '350430',
                'name' => '建宁县',
                'parentId' => '350400',
                'level' => '3',
            ),
            218 => 
            array (
                'id' => 1219,
                'code' => '350481',
                'name' => '永安市',
                'parentId' => '350400',
                'level' => '3',
            ),
            219 => 
            array (
                'id' => 1220,
                'code' => '350500',
                'name' => '泉州市',
                'parentId' => '350000',
                'level' => '2',
            ),
            220 => 
            array (
                'id' => 1221,
                'code' => '350502',
                'name' => '鲤城区',
                'parentId' => '350500',
                'level' => '3',
            ),
            221 => 
            array (
                'id' => 1222,
                'code' => '350503',
                'name' => '丰泽区',
                'parentId' => '350500',
                'level' => '3',
            ),
            222 => 
            array (
                'id' => 1223,
                'code' => '350504',
                'name' => '洛江区',
                'parentId' => '350500',
                'level' => '3',
            ),
            223 => 
            array (
                'id' => 1224,
                'code' => '350505',
                'name' => '泉港区',
                'parentId' => '350500',
                'level' => '3',
            ),
            224 => 
            array (
                'id' => 1225,
                'code' => '350521',
                'name' => '惠安县',
                'parentId' => '350500',
                'level' => '3',
            ),
            225 => 
            array (
                'id' => 1226,
                'code' => '350524',
                'name' => '安溪县',
                'parentId' => '350500',
                'level' => '3',
            ),
            226 => 
            array (
                'id' => 1227,
                'code' => '350525',
                'name' => '永春县',
                'parentId' => '350500',
                'level' => '3',
            ),
            227 => 
            array (
                'id' => 1228,
                'code' => '350526',
                'name' => '德化县',
                'parentId' => '350500',
                'level' => '3',
            ),
            228 => 
            array (
                'id' => 1229,
                'code' => '350527',
                'name' => '金门县',
                'parentId' => '350500',
                'level' => '3',
            ),
            229 => 
            array (
                'id' => 1230,
                'code' => '350581',
                'name' => '石狮市',
                'parentId' => '350500',
                'level' => '3',
            ),
            230 => 
            array (
                'id' => 1231,
                'code' => '350582',
                'name' => '晋江市',
                'parentId' => '350500',
                'level' => '3',
            ),
            231 => 
            array (
                'id' => 1232,
                'code' => '350583',
                'name' => '南安市',
                'parentId' => '350500',
                'level' => '3',
            ),
            232 => 
            array (
                'id' => 1233,
                'code' => '350600',
                'name' => '漳州市',
                'parentId' => '350000',
                'level' => '2',
            ),
            233 => 
            array (
                'id' => 1234,
                'code' => '350602',
                'name' => '芗城区',
                'parentId' => '350600',
                'level' => '3',
            ),
            234 => 
            array (
                'id' => 1235,
                'code' => '350603',
                'name' => '龙文区',
                'parentId' => '350600',
                'level' => '3',
            ),
            235 => 
            array (
                'id' => 1236,
                'code' => '350622',
                'name' => '云霄县',
                'parentId' => '350600',
                'level' => '3',
            ),
            236 => 
            array (
                'id' => 1237,
                'code' => '350623',
                'name' => '漳浦县',
                'parentId' => '350600',
                'level' => '3',
            ),
            237 => 
            array (
                'id' => 1238,
                'code' => '350624',
                'name' => '诏安县',
                'parentId' => '350600',
                'level' => '3',
            ),
            238 => 
            array (
                'id' => 1239,
                'code' => '350625',
                'name' => '长泰县',
                'parentId' => '350600',
                'level' => '3',
            ),
            239 => 
            array (
                'id' => 1240,
                'code' => '350626',
                'name' => '东山县',
                'parentId' => '350600',
                'level' => '3',
            ),
            240 => 
            array (
                'id' => 1241,
                'code' => '350627',
                'name' => '南靖县',
                'parentId' => '350600',
                'level' => '3',
            ),
            241 => 
            array (
                'id' => 1242,
                'code' => '350628',
                'name' => '平和县',
                'parentId' => '350600',
                'level' => '3',
            ),
            242 => 
            array (
                'id' => 1243,
                'code' => '350629',
                'name' => '华安县',
                'parentId' => '350600',
                'level' => '3',
            ),
            243 => 
            array (
                'id' => 1244,
                'code' => '350681',
                'name' => '龙海市',
                'parentId' => '350600',
                'level' => '3',
            ),
            244 => 
            array (
                'id' => 1245,
                'code' => '350700',
                'name' => '南平市',
                'parentId' => '350000',
                'level' => '2',
            ),
            245 => 
            array (
                'id' => 1246,
                'code' => '350702',
                'name' => '延平区',
                'parentId' => '350700',
                'level' => '3',
            ),
            246 => 
            array (
                'id' => 1247,
                'code' => '350703',
                'name' => '建阳区',
                'parentId' => '350700',
                'level' => '3',
            ),
            247 => 
            array (
                'id' => 1248,
                'code' => '350721',
                'name' => '顺昌县',
                'parentId' => '350700',
                'level' => '3',
            ),
            248 => 
            array (
                'id' => 1249,
                'code' => '350722',
                'name' => '浦城县',
                'parentId' => '350700',
                'level' => '3',
            ),
            249 => 
            array (
                'id' => 1250,
                'code' => '350723',
                'name' => '光泽县',
                'parentId' => '350700',
                'level' => '3',
            ),
            250 => 
            array (
                'id' => 1251,
                'code' => '350724',
                'name' => '松溪县',
                'parentId' => '350700',
                'level' => '3',
            ),
            251 => 
            array (
                'id' => 1252,
                'code' => '350725',
                'name' => '政和县',
                'parentId' => '350700',
                'level' => '3',
            ),
            252 => 
            array (
                'id' => 1253,
                'code' => '350781',
                'name' => '邵武市',
                'parentId' => '350700',
                'level' => '3',
            ),
            253 => 
            array (
                'id' => 1254,
                'code' => '350782',
                'name' => '武夷山市',
                'parentId' => '350700',
                'level' => '3',
            ),
            254 => 
            array (
                'id' => 1255,
                'code' => '350783',
                'name' => '建瓯市',
                'parentId' => '350700',
                'level' => '3',
            ),
            255 => 
            array (
                'id' => 1256,
                'code' => '350800',
                'name' => '龙岩市',
                'parentId' => '350000',
                'level' => '2',
            ),
            256 => 
            array (
                'id' => 1257,
                'code' => '350802',
                'name' => '新罗区',
                'parentId' => '350800',
                'level' => '3',
            ),
            257 => 
            array (
                'id' => 1258,
                'code' => '350803',
                'name' => '永定区',
                'parentId' => '350800',
                'level' => '3',
            ),
            258 => 
            array (
                'id' => 1259,
                'code' => '350821',
                'name' => '长汀县',
                'parentId' => '350800',
                'level' => '3',
            ),
            259 => 
            array (
                'id' => 1260,
                'code' => '350823',
                'name' => '上杭县',
                'parentId' => '350800',
                'level' => '3',
            ),
            260 => 
            array (
                'id' => 1261,
                'code' => '350824',
                'name' => '武平县',
                'parentId' => '350800',
                'level' => '3',
            ),
            261 => 
            array (
                'id' => 1262,
                'code' => '350825',
                'name' => '连城县',
                'parentId' => '350800',
                'level' => '3',
            ),
            262 => 
            array (
                'id' => 1263,
                'code' => '350881',
                'name' => '漳平市',
                'parentId' => '350800',
                'level' => '3',
            ),
            263 => 
            array (
                'id' => 1264,
                'code' => '350900',
                'name' => '宁德市',
                'parentId' => '350000',
                'level' => '2',
            ),
            264 => 
            array (
                'id' => 1265,
                'code' => '350902',
                'name' => '蕉城区',
                'parentId' => '350900',
                'level' => '3',
            ),
            265 => 
            array (
                'id' => 1266,
                'code' => '350921',
                'name' => '霞浦县',
                'parentId' => '350900',
                'level' => '3',
            ),
            266 => 
            array (
                'id' => 1267,
                'code' => '350922',
                'name' => '古田县',
                'parentId' => '350900',
                'level' => '3',
            ),
            267 => 
            array (
                'id' => 1268,
                'code' => '350923',
                'name' => '屏南县',
                'parentId' => '350900',
                'level' => '3',
            ),
            268 => 
            array (
                'id' => 1269,
                'code' => '350924',
                'name' => '寿宁县',
                'parentId' => '350900',
                'level' => '3',
            ),
            269 => 
            array (
                'id' => 1270,
                'code' => '350925',
                'name' => '周宁县',
                'parentId' => '350900',
                'level' => '3',
            ),
            270 => 
            array (
                'id' => 1271,
                'code' => '350926',
                'name' => '柘荣县',
                'parentId' => '350900',
                'level' => '3',
            ),
            271 => 
            array (
                'id' => 1272,
                'code' => '350981',
                'name' => '福安市',
                'parentId' => '350900',
                'level' => '3',
            ),
            272 => 
            array (
                'id' => 1273,
                'code' => '350982',
                'name' => '福鼎市',
                'parentId' => '350900',
                'level' => '3',
            ),
            273 => 
            array (
                'id' => 1274,
                'code' => '360000',
                'name' => '江西省',
                'parentId' => '100000',
                'level' => '1',
            ),
            274 => 
            array (
                'id' => 1275,
                'code' => '360100',
                'name' => '南昌市',
                'parentId' => '360000',
                'level' => '2',
            ),
            275 => 
            array (
                'id' => 1276,
                'code' => '360102',
                'name' => '东湖区',
                'parentId' => '360100',
                'level' => '3',
            ),
            276 => 
            array (
                'id' => 1277,
                'code' => '360103',
                'name' => '西湖区',
                'parentId' => '360100',
                'level' => '3',
            ),
            277 => 
            array (
                'id' => 1278,
                'code' => '360104',
                'name' => '青云谱区',
                'parentId' => '360100',
                'level' => '3',
            ),
            278 => 
            array (
                'id' => 1279,
                'code' => '360105',
                'name' => '湾里区',
                'parentId' => '360100',
                'level' => '3',
            ),
            279 => 
            array (
                'id' => 1280,
                'code' => '360111',
                'name' => '青山湖区',
                'parentId' => '360100',
                'level' => '3',
            ),
            280 => 
            array (
                'id' => 1281,
                'code' => '360121',
                'name' => '南昌县',
                'parentId' => '360100',
                'level' => '3',
            ),
            281 => 
            array (
                'id' => 1282,
                'code' => '360122',
                'name' => '新建区',
                'parentId' => '360100',
                'level' => '3',
            ),
            282 => 
            array (
                'id' => 1283,
                'code' => '360123',
                'name' => '安义县',
                'parentId' => '360100',
                'level' => '3',
            ),
            283 => 
            array (
                'id' => 1284,
                'code' => '360124',
                'name' => '进贤县',
                'parentId' => '360100',
                'level' => '3',
            ),
            284 => 
            array (
                'id' => 1285,
                'code' => '360125',
                'name' => '红谷滩新区',
                'parentId' => '360100',
                'level' => '3',
            ),
            285 => 
            array (
                'id' => 1286,
                'code' => '360200',
                'name' => '景德镇市',
                'parentId' => '360000',
                'level' => '2',
            ),
            286 => 
            array (
                'id' => 1287,
                'code' => '360202',
                'name' => '昌江区',
                'parentId' => '360200',
                'level' => '3',
            ),
            287 => 
            array (
                'id' => 1288,
                'code' => '360203',
                'name' => '珠山区',
                'parentId' => '360200',
                'level' => '3',
            ),
            288 => 
            array (
                'id' => 1289,
                'code' => '360222',
                'name' => '浮梁县',
                'parentId' => '360200',
                'level' => '3',
            ),
            289 => 
            array (
                'id' => 1290,
                'code' => '360281',
                'name' => '乐平市',
                'parentId' => '360200',
                'level' => '3',
            ),
            290 => 
            array (
                'id' => 1291,
                'code' => '360300',
                'name' => '萍乡市',
                'parentId' => '360000',
                'level' => '2',
            ),
            291 => 
            array (
                'id' => 1292,
                'code' => '360302',
                'name' => '安源区',
                'parentId' => '360300',
                'level' => '3',
            ),
            292 => 
            array (
                'id' => 1293,
                'code' => '360313',
                'name' => '湘东区',
                'parentId' => '360300',
                'level' => '3',
            ),
            293 => 
            array (
                'id' => 1294,
                'code' => '360321',
                'name' => '莲花县',
                'parentId' => '360300',
                'level' => '3',
            ),
            294 => 
            array (
                'id' => 1295,
                'code' => '360322',
                'name' => '上栗县',
                'parentId' => '360300',
                'level' => '3',
            ),
            295 => 
            array (
                'id' => 1296,
                'code' => '360323',
                'name' => '芦溪县',
                'parentId' => '360300',
                'level' => '3',
            ),
            296 => 
            array (
                'id' => 1297,
                'code' => '360400',
                'name' => '九江市',
                'parentId' => '360000',
                'level' => '2',
            ),
            297 => 
            array (
                'id' => 1298,
                'code' => '360402',
                'name' => '庐山区',
                'parentId' => '360400',
                'level' => '3',
            ),
            298 => 
            array (
                'id' => 1299,
                'code' => '360403',
                'name' => '浔阳区',
                'parentId' => '360400',
                'level' => '3',
            ),
            299 => 
            array (
                'id' => 1300,
                'code' => '360421',
                'name' => '九江县',
                'parentId' => '360400',
                'level' => '3',
            ),
            300 => 
            array (
                'id' => 1301,
                'code' => '360423',
                'name' => '武宁县',
                'parentId' => '360400',
                'level' => '3',
            ),
            301 => 
            array (
                'id' => 1302,
                'code' => '360424',
                'name' => '修水县',
                'parentId' => '360400',
                'level' => '3',
            ),
            302 => 
            array (
                'id' => 1303,
                'code' => '360425',
                'name' => '永修县',
                'parentId' => '360400',
                'level' => '3',
            ),
            303 => 
            array (
                'id' => 1304,
                'code' => '360426',
                'name' => '德安县',
                'parentId' => '360400',
                'level' => '3',
            ),
            304 => 
            array (
                'id' => 1305,
                'code' => '360427',
                'name' => '星子县',
                'parentId' => '360400',
                'level' => '3',
            ),
            305 => 
            array (
                'id' => 1306,
                'code' => '360428',
                'name' => '都昌县',
                'parentId' => '360400',
                'level' => '3',
            ),
            306 => 
            array (
                'id' => 1307,
                'code' => '360429',
                'name' => '湖口县',
                'parentId' => '360400',
                'level' => '3',
            ),
            307 => 
            array (
                'id' => 1308,
                'code' => '360430',
                'name' => '彭泽县',
                'parentId' => '360400',
                'level' => '3',
            ),
            308 => 
            array (
                'id' => 1309,
                'code' => '360481',
                'name' => '瑞昌市',
                'parentId' => '360400',
                'level' => '3',
            ),
            309 => 
            array (
                'id' => 1310,
                'code' => '360482',
                'name' => '共青城市',
                'parentId' => '360400',
                'level' => '3',
            ),
            310 => 
            array (
                'id' => 1311,
                'code' => '360500',
                'name' => '新余市',
                'parentId' => '360000',
                'level' => '2',
            ),
            311 => 
            array (
                'id' => 1312,
                'code' => '360502',
                'name' => '渝水区',
                'parentId' => '360500',
                'level' => '3',
            ),
            312 => 
            array (
                'id' => 1313,
                'code' => '360521',
                'name' => '分宜县',
                'parentId' => '360500',
                'level' => '3',
            ),
            313 => 
            array (
                'id' => 1314,
                'code' => '360600',
                'name' => '鹰潭市',
                'parentId' => '360000',
                'level' => '2',
            ),
            314 => 
            array (
                'id' => 1315,
                'code' => '360602',
                'name' => '月湖区',
                'parentId' => '360600',
                'level' => '3',
            ),
            315 => 
            array (
                'id' => 1316,
                'code' => '360622',
                'name' => '余江县',
                'parentId' => '360600',
                'level' => '3',
            ),
            316 => 
            array (
                'id' => 1317,
                'code' => '360681',
                'name' => '贵溪市',
                'parentId' => '360600',
                'level' => '3',
            ),
            317 => 
            array (
                'id' => 1318,
                'code' => '360700',
                'name' => '赣州市',
                'parentId' => '360000',
                'level' => '2',
            ),
            318 => 
            array (
                'id' => 1319,
                'code' => '360702',
                'name' => '章贡区',
                'parentId' => '360700',
                'level' => '3',
            ),
            319 => 
            array (
                'id' => 1320,
                'code' => '360703',
                'name' => '南康区',
                'parentId' => '360700',
                'level' => '3',
            ),
            320 => 
            array (
                'id' => 1321,
                'code' => '360721',
                'name' => '赣县',
                'parentId' => '360700',
                'level' => '3',
            ),
            321 => 
            array (
                'id' => 1322,
                'code' => '360722',
                'name' => '信丰县',
                'parentId' => '360700',
                'level' => '3',
            ),
            322 => 
            array (
                'id' => 1323,
                'code' => '360723',
                'name' => '大余县',
                'parentId' => '360700',
                'level' => '3',
            ),
            323 => 
            array (
                'id' => 1324,
                'code' => '360724',
                'name' => '上犹县',
                'parentId' => '360700',
                'level' => '3',
            ),
            324 => 
            array (
                'id' => 1325,
                'code' => '360725',
                'name' => '崇义县',
                'parentId' => '360700',
                'level' => '3',
            ),
            325 => 
            array (
                'id' => 1326,
                'code' => '360726',
                'name' => '安远县',
                'parentId' => '360700',
                'level' => '3',
            ),
            326 => 
            array (
                'id' => 1327,
                'code' => '360727',
                'name' => '龙南县',
                'parentId' => '360700',
                'level' => '3',
            ),
            327 => 
            array (
                'id' => 1328,
                'code' => '360728',
                'name' => '定南县',
                'parentId' => '360700',
                'level' => '3',
            ),
            328 => 
            array (
                'id' => 1329,
                'code' => '360729',
                'name' => '全南县',
                'parentId' => '360700',
                'level' => '3',
            ),
            329 => 
            array (
                'id' => 1330,
                'code' => '360730',
                'name' => '宁都县',
                'parentId' => '360700',
                'level' => '3',
            ),
            330 => 
            array (
                'id' => 1331,
                'code' => '360731',
                'name' => '于都县',
                'parentId' => '360700',
                'level' => '3',
            ),
            331 => 
            array (
                'id' => 1332,
                'code' => '360732',
                'name' => '兴国县',
                'parentId' => '360700',
                'level' => '3',
            ),
            332 => 
            array (
                'id' => 1333,
                'code' => '360733',
                'name' => '会昌县',
                'parentId' => '360700',
                'level' => '3',
            ),
            333 => 
            array (
                'id' => 1334,
                'code' => '360734',
                'name' => '寻乌县',
                'parentId' => '360700',
                'level' => '3',
            ),
            334 => 
            array (
                'id' => 1335,
                'code' => '360735',
                'name' => '石城县',
                'parentId' => '360700',
                'level' => '3',
            ),
            335 => 
            array (
                'id' => 1336,
                'code' => '360781',
                'name' => '瑞金市',
                'parentId' => '360700',
                'level' => '3',
            ),
            336 => 
            array (
                'id' => 1337,
                'code' => '360782',
                'name' => '章康新区',
                'parentId' => '360700',
                'level' => '3',
            ),
            337 => 
            array (
                'id' => 1338,
                'code' => '360800',
                'name' => '吉安市',
                'parentId' => '360000',
                'level' => '2',
            ),
            338 => 
            array (
                'id' => 1339,
                'code' => '360802',
                'name' => '吉州区',
                'parentId' => '360800',
                'level' => '3',
            ),
            339 => 
            array (
                'id' => 1340,
                'code' => '360803',
                'name' => '青原区',
                'parentId' => '360800',
                'level' => '3',
            ),
            340 => 
            array (
                'id' => 1341,
                'code' => '360821',
                'name' => '吉安县',
                'parentId' => '360800',
                'level' => '3',
            ),
            341 => 
            array (
                'id' => 1342,
                'code' => '360822',
                'name' => '吉水县',
                'parentId' => '360800',
                'level' => '3',
            ),
            342 => 
            array (
                'id' => 1343,
                'code' => '360823',
                'name' => '峡江县',
                'parentId' => '360800',
                'level' => '3',
            ),
            343 => 
            array (
                'id' => 1344,
                'code' => '360824',
                'name' => '新干县',
                'parentId' => '360800',
                'level' => '3',
            ),
            344 => 
            array (
                'id' => 1345,
                'code' => '360825',
                'name' => '永丰县',
                'parentId' => '360800',
                'level' => '3',
            ),
            345 => 
            array (
                'id' => 1346,
                'code' => '360826',
                'name' => '泰和县',
                'parentId' => '360800',
                'level' => '3',
            ),
            346 => 
            array (
                'id' => 1347,
                'code' => '360827',
                'name' => '遂川县',
                'parentId' => '360800',
                'level' => '3',
            ),
            347 => 
            array (
                'id' => 1348,
                'code' => '360828',
                'name' => '万安县',
                'parentId' => '360800',
                'level' => '3',
            ),
            348 => 
            array (
                'id' => 1349,
                'code' => '360829',
                'name' => '安福县',
                'parentId' => '360800',
                'level' => '3',
            ),
            349 => 
            array (
                'id' => 1350,
                'code' => '360830',
                'name' => '永新县',
                'parentId' => '360800',
                'level' => '3',
            ),
            350 => 
            array (
                'id' => 1351,
                'code' => '360881',
                'name' => '井冈山市',
                'parentId' => '360800',
                'level' => '3',
            ),
            351 => 
            array (
                'id' => 1352,
                'code' => '360900',
                'name' => '宜春市',
                'parentId' => '360000',
                'level' => '2',
            ),
            352 => 
            array (
                'id' => 1353,
                'code' => '360902',
                'name' => '袁州区',
                'parentId' => '360900',
                'level' => '3',
            ),
            353 => 
            array (
                'id' => 1354,
                'code' => '360921',
                'name' => '奉新县',
                'parentId' => '360900',
                'level' => '3',
            ),
            354 => 
            array (
                'id' => 1355,
                'code' => '360922',
                'name' => '万载县',
                'parentId' => '360900',
                'level' => '3',
            ),
            355 => 
            array (
                'id' => 1356,
                'code' => '360923',
                'name' => '上高县',
                'parentId' => '360900',
                'level' => '3',
            ),
            356 => 
            array (
                'id' => 1357,
                'code' => '360924',
                'name' => '宜丰县',
                'parentId' => '360900',
                'level' => '3',
            ),
            357 => 
            array (
                'id' => 1358,
                'code' => '360925',
                'name' => '靖安县',
                'parentId' => '360900',
                'level' => '3',
            ),
            358 => 
            array (
                'id' => 1359,
                'code' => '360926',
                'name' => '铜鼓县',
                'parentId' => '360900',
                'level' => '3',
            ),
            359 => 
            array (
                'id' => 1360,
                'code' => '360981',
                'name' => '丰城市',
                'parentId' => '360900',
                'level' => '3',
            ),
            360 => 
            array (
                'id' => 1361,
                'code' => '360982',
                'name' => '樟树市',
                'parentId' => '360900',
                'level' => '3',
            ),
            361 => 
            array (
                'id' => 1362,
                'code' => '360983',
                'name' => '高安市',
                'parentId' => '360900',
                'level' => '3',
            ),
            362 => 
            array (
                'id' => 1363,
                'code' => '361000',
                'name' => '抚州市',
                'parentId' => '360000',
                'level' => '2',
            ),
            363 => 
            array (
                'id' => 1364,
                'code' => '361002',
                'name' => '临川区',
                'parentId' => '361000',
                'level' => '3',
            ),
            364 => 
            array (
                'id' => 1365,
                'code' => '361021',
                'name' => '南城县',
                'parentId' => '361000',
                'level' => '3',
            ),
            365 => 
            array (
                'id' => 1366,
                'code' => '361022',
                'name' => '黎川县',
                'parentId' => '361000',
                'level' => '3',
            ),
            366 => 
            array (
                'id' => 1367,
                'code' => '361023',
                'name' => '南丰县',
                'parentId' => '361000',
                'level' => '3',
            ),
            367 => 
            array (
                'id' => 1368,
                'code' => '361024',
                'name' => '崇仁县',
                'parentId' => '361000',
                'level' => '3',
            ),
            368 => 
            array (
                'id' => 1369,
                'code' => '361025',
                'name' => '乐安县',
                'parentId' => '361000',
                'level' => '3',
            ),
            369 => 
            array (
                'id' => 1370,
                'code' => '361026',
                'name' => '宜黄县',
                'parentId' => '361000',
                'level' => '3',
            ),
            370 => 
            array (
                'id' => 1371,
                'code' => '361027',
                'name' => '金溪县',
                'parentId' => '361000',
                'level' => '3',
            ),
            371 => 
            array (
                'id' => 1372,
                'code' => '361028',
                'name' => '资溪县',
                'parentId' => '361000',
                'level' => '3',
            ),
            372 => 
            array (
                'id' => 1373,
                'code' => '361029',
                'name' => '东乡县',
                'parentId' => '361000',
                'level' => '3',
            ),
            373 => 
            array (
                'id' => 1374,
                'code' => '361030',
                'name' => '广昌县',
                'parentId' => '361000',
                'level' => '3',
            ),
            374 => 
            array (
                'id' => 1375,
                'code' => '361100',
                'name' => '上饶市',
                'parentId' => '360000',
                'level' => '2',
            ),
            375 => 
            array (
                'id' => 1376,
                'code' => '361102',
                'name' => '信州区',
                'parentId' => '361100',
                'level' => '3',
            ),
            376 => 
            array (
                'id' => 1377,
                'code' => '361103',
                'name' => '广丰区',
                'parentId' => '361100',
                'level' => '3',
            ),
            377 => 
            array (
                'id' => 1378,
                'code' => '361121',
                'name' => '上饶县',
                'parentId' => '361100',
                'level' => '3',
            ),
            378 => 
            array (
                'id' => 1379,
                'code' => '361123',
                'name' => '玉山县',
                'parentId' => '361100',
                'level' => '3',
            ),
            379 => 
            array (
                'id' => 1380,
                'code' => '361124',
                'name' => '铅山县',
                'parentId' => '361100',
                'level' => '3',
            ),
            380 => 
            array (
                'id' => 1381,
                'code' => '361125',
                'name' => '横峰县',
                'parentId' => '361100',
                'level' => '3',
            ),
            381 => 
            array (
                'id' => 1382,
                'code' => '361126',
                'name' => '弋阳县',
                'parentId' => '361100',
                'level' => '3',
            ),
            382 => 
            array (
                'id' => 1383,
                'code' => '361127',
                'name' => '余干县',
                'parentId' => '361100',
                'level' => '3',
            ),
            383 => 
            array (
                'id' => 1384,
                'code' => '361128',
                'name' => '鄱阳县',
                'parentId' => '361100',
                'level' => '3',
            ),
            384 => 
            array (
                'id' => 1385,
                'code' => '361129',
                'name' => '万年县',
                'parentId' => '361100',
                'level' => '3',
            ),
            385 => 
            array (
                'id' => 1386,
                'code' => '361130',
                'name' => '婺源县',
                'parentId' => '361100',
                'level' => '3',
            ),
            386 => 
            array (
                'id' => 1387,
                'code' => '361181',
                'name' => '德兴市',
                'parentId' => '361100',
                'level' => '3',
            ),
            387 => 
            array (
                'id' => 1388,
                'code' => '370000',
                'name' => '山东省',
                'parentId' => '100000',
                'level' => '1',
            ),
            388 => 
            array (
                'id' => 1389,
                'code' => '370100',
                'name' => '济南市',
                'parentId' => '370000',
                'level' => '2',
            ),
            389 => 
            array (
                'id' => 1390,
                'code' => '370102',
                'name' => '历下区',
                'parentId' => '370100',
                'level' => '3',
            ),
            390 => 
            array (
                'id' => 1391,
                'code' => '370103',
                'name' => '市中区',
                'parentId' => '370100',
                'level' => '3',
            ),
            391 => 
            array (
                'id' => 1392,
                'code' => '370104',
                'name' => '槐荫区',
                'parentId' => '370100',
                'level' => '3',
            ),
            392 => 
            array (
                'id' => 1393,
                'code' => '370105',
                'name' => '天桥区',
                'parentId' => '370100',
                'level' => '3',
            ),
            393 => 
            array (
                'id' => 1394,
                'code' => '370112',
                'name' => '历城区',
                'parentId' => '370100',
                'level' => '3',
            ),
            394 => 
            array (
                'id' => 1395,
                'code' => '370113',
                'name' => '长清区',
                'parentId' => '370100',
                'level' => '3',
            ),
            395 => 
            array (
                'id' => 1396,
                'code' => '370124',
                'name' => '平阴县',
                'parentId' => '370100',
                'level' => '3',
            ),
            396 => 
            array (
                'id' => 1397,
                'code' => '370125',
                'name' => '济阳县',
                'parentId' => '370100',
                'level' => '3',
            ),
            397 => 
            array (
                'id' => 1398,
                'code' => '370126',
                'name' => '商河县',
                'parentId' => '370100',
                'level' => '3',
            ),
            398 => 
            array (
                'id' => 1399,
                'code' => '370181',
                'name' => '章丘市',
                'parentId' => '370100',
                'level' => '3',
            ),
            399 => 
            array (
                'id' => 1400,
                'code' => '370200',
                'name' => '青岛市',
                'parentId' => '370000',
                'level' => '2',
            ),
            400 => 
            array (
                'id' => 1401,
                'code' => '370202',
                'name' => '市南区',
                'parentId' => '370200',
                'level' => '3',
            ),
            401 => 
            array (
                'id' => 1402,
                'code' => '370203',
                'name' => '市北区',
                'parentId' => '370200',
                'level' => '3',
            ),
            402 => 
            array (
                'id' => 1403,
                'code' => '370211',
                'name' => '黄岛区',
                'parentId' => '370200',
                'level' => '3',
            ),
            403 => 
            array (
                'id' => 1404,
                'code' => '370212',
                'name' => '崂山区',
                'parentId' => '370200',
                'level' => '3',
            ),
            404 => 
            array (
                'id' => 1405,
                'code' => '370213',
                'name' => '李沧区',
                'parentId' => '370200',
                'level' => '3',
            ),
            405 => 
            array (
                'id' => 1406,
                'code' => '370214',
                'name' => '城阳区',
                'parentId' => '370200',
                'level' => '3',
            ),
            406 => 
            array (
                'id' => 1407,
                'code' => '370281',
                'name' => '胶州市',
                'parentId' => '370200',
                'level' => '3',
            ),
            407 => 
            array (
                'id' => 1408,
                'code' => '370282',
                'name' => '即墨市',
                'parentId' => '370200',
                'level' => '3',
            ),
            408 => 
            array (
                'id' => 1409,
                'code' => '370283',
                'name' => '平度市',
                'parentId' => '370200',
                'level' => '3',
            ),
            409 => 
            array (
                'id' => 1410,
                'code' => '370285',
                'name' => '莱西市',
                'parentId' => '370200',
                'level' => '3',
            ),
            410 => 
            array (
                'id' => 1411,
                'code' => '370286',
                'name' => '西海岸新区',
                'parentId' => '370200',
                'level' => '3',
            ),
            411 => 
            array (
                'id' => 1412,
                'code' => '370300',
                'name' => '淄博市',
                'parentId' => '370000',
                'level' => '2',
            ),
            412 => 
            array (
                'id' => 1413,
                'code' => '370302',
                'name' => '淄川区',
                'parentId' => '370300',
                'level' => '3',
            ),
            413 => 
            array (
                'id' => 1414,
                'code' => '370303',
                'name' => '张店区',
                'parentId' => '370300',
                'level' => '3',
            ),
            414 => 
            array (
                'id' => 1415,
                'code' => '370304',
                'name' => '博山区',
                'parentId' => '370300',
                'level' => '3',
            ),
            415 => 
            array (
                'id' => 1416,
                'code' => '370305',
                'name' => '临淄区',
                'parentId' => '370300',
                'level' => '3',
            ),
            416 => 
            array (
                'id' => 1417,
                'code' => '370306',
                'name' => '周村区',
                'parentId' => '370300',
                'level' => '3',
            ),
            417 => 
            array (
                'id' => 1418,
                'code' => '370321',
                'name' => '桓台县',
                'parentId' => '370300',
                'level' => '3',
            ),
            418 => 
            array (
                'id' => 1419,
                'code' => '370322',
                'name' => '高青县',
                'parentId' => '370300',
                'level' => '3',
            ),
            419 => 
            array (
                'id' => 1420,
                'code' => '370323',
                'name' => '沂源县',
                'parentId' => '370300',
                'level' => '3',
            ),
            420 => 
            array (
                'id' => 1421,
                'code' => '370400',
                'name' => '枣庄市',
                'parentId' => '370000',
                'level' => '2',
            ),
            421 => 
            array (
                'id' => 1422,
                'code' => '370402',
                'name' => '市中区',
                'parentId' => '370400',
                'level' => '3',
            ),
            422 => 
            array (
                'id' => 1423,
                'code' => '370403',
                'name' => '薛城区',
                'parentId' => '370400',
                'level' => '3',
            ),
            423 => 
            array (
                'id' => 1424,
                'code' => '370404',
                'name' => '峄城区',
                'parentId' => '370400',
                'level' => '3',
            ),
            424 => 
            array (
                'id' => 1425,
                'code' => '370405',
                'name' => '台儿庄区',
                'parentId' => '370400',
                'level' => '3',
            ),
            425 => 
            array (
                'id' => 1426,
                'code' => '370406',
                'name' => '山亭区',
                'parentId' => '370400',
                'level' => '3',
            ),
            426 => 
            array (
                'id' => 1427,
                'code' => '370481',
                'name' => '滕州市',
                'parentId' => '370400',
                'level' => '3',
            ),
            427 => 
            array (
                'id' => 1428,
                'code' => '370500',
                'name' => '东营市',
                'parentId' => '370000',
                'level' => '2',
            ),
            428 => 
            array (
                'id' => 1429,
                'code' => '370502',
                'name' => '东营区',
                'parentId' => '370500',
                'level' => '3',
            ),
            429 => 
            array (
                'id' => 1430,
                'code' => '370503',
                'name' => '河口区',
                'parentId' => '370500',
                'level' => '3',
            ),
            430 => 
            array (
                'id' => 1431,
                'code' => '370521',
                'name' => '垦利县',
                'parentId' => '370500',
                'level' => '3',
            ),
            431 => 
            array (
                'id' => 1432,
                'code' => '370522',
                'name' => '利津县',
                'parentId' => '370500',
                'level' => '3',
            ),
            432 => 
            array (
                'id' => 1433,
                'code' => '370523',
                'name' => '广饶县',
                'parentId' => '370500',
                'level' => '3',
            ),
            433 => 
            array (
                'id' => 1434,
                'code' => '370600',
                'name' => '烟台市',
                'parentId' => '370000',
                'level' => '2',
            ),
            434 => 
            array (
                'id' => 1435,
                'code' => '370602',
                'name' => '芝罘区',
                'parentId' => '370600',
                'level' => '3',
            ),
            435 => 
            array (
                'id' => 1436,
                'code' => '370611',
                'name' => '福山区',
                'parentId' => '370600',
                'level' => '3',
            ),
            436 => 
            array (
                'id' => 1437,
                'code' => '370612',
                'name' => '牟平区',
                'parentId' => '370600',
                'level' => '3',
            ),
            437 => 
            array (
                'id' => 1438,
                'code' => '370613',
                'name' => '莱山区',
                'parentId' => '370600',
                'level' => '3',
            ),
            438 => 
            array (
                'id' => 1439,
                'code' => '370634',
                'name' => '长岛县',
                'parentId' => '370600',
                'level' => '3',
            ),
            439 => 
            array (
                'id' => 1440,
                'code' => '370681',
                'name' => '龙口市',
                'parentId' => '370600',
                'level' => '3',
            ),
            440 => 
            array (
                'id' => 1441,
                'code' => '370682',
                'name' => '莱阳市',
                'parentId' => '370600',
                'level' => '3',
            ),
            441 => 
            array (
                'id' => 1442,
                'code' => '370683',
                'name' => '莱州市',
                'parentId' => '370600',
                'level' => '3',
            ),
            442 => 
            array (
                'id' => 1443,
                'code' => '370684',
                'name' => '蓬莱市',
                'parentId' => '370600',
                'level' => '3',
            ),
            443 => 
            array (
                'id' => 1444,
                'code' => '370685',
                'name' => '招远市',
                'parentId' => '370600',
                'level' => '3',
            ),
            444 => 
            array (
                'id' => 1445,
                'code' => '370686',
                'name' => '栖霞市',
                'parentId' => '370600',
                'level' => '3',
            ),
            445 => 
            array (
                'id' => 1446,
                'code' => '370687',
                'name' => '海阳市',
                'parentId' => '370600',
                'level' => '3',
            ),
            446 => 
            array (
                'id' => 1447,
                'code' => '370700',
                'name' => '潍坊市',
                'parentId' => '370000',
                'level' => '2',
            ),
            447 => 
            array (
                'id' => 1448,
                'code' => '370702',
                'name' => '潍城区',
                'parentId' => '370700',
                'level' => '3',
            ),
            448 => 
            array (
                'id' => 1449,
                'code' => '370703',
                'name' => '寒亭区',
                'parentId' => '370700',
                'level' => '3',
            ),
            449 => 
            array (
                'id' => 1450,
                'code' => '370704',
                'name' => '坊子区',
                'parentId' => '370700',
                'level' => '3',
            ),
            450 => 
            array (
                'id' => 1451,
                'code' => '370705',
                'name' => '奎文区',
                'parentId' => '370700',
                'level' => '3',
            ),
            451 => 
            array (
                'id' => 1452,
                'code' => '370724',
                'name' => '临朐县',
                'parentId' => '370700',
                'level' => '3',
            ),
            452 => 
            array (
                'id' => 1453,
                'code' => '370725',
                'name' => '昌乐县',
                'parentId' => '370700',
                'level' => '3',
            ),
            453 => 
            array (
                'id' => 1454,
                'code' => '370781',
                'name' => '青州市',
                'parentId' => '370700',
                'level' => '3',
            ),
            454 => 
            array (
                'id' => 1455,
                'code' => '370782',
                'name' => '诸城市',
                'parentId' => '370700',
                'level' => '3',
            ),
            455 => 
            array (
                'id' => 1456,
                'code' => '370783',
                'name' => '寿光市',
                'parentId' => '370700',
                'level' => '3',
            ),
            456 => 
            array (
                'id' => 1457,
                'code' => '370784',
                'name' => '安丘市',
                'parentId' => '370700',
                'level' => '3',
            ),
            457 => 
            array (
                'id' => 1458,
                'code' => '370785',
                'name' => '高密市',
                'parentId' => '370700',
                'level' => '3',
            ),
            458 => 
            array (
                'id' => 1459,
                'code' => '370786',
                'name' => '昌邑市',
                'parentId' => '370700',
                'level' => '3',
            ),
            459 => 
            array (
                'id' => 1460,
                'code' => '370800',
                'name' => '济宁市',
                'parentId' => '370000',
                'level' => '2',
            ),
            460 => 
            array (
                'id' => 1461,
                'code' => '370811',
                'name' => '任城区',
                'parentId' => '370800',
                'level' => '3',
            ),
            461 => 
            array (
                'id' => 1462,
                'code' => '370812',
                'name' => '兖州区',
                'parentId' => '370800',
                'level' => '3',
            ),
            462 => 
            array (
                'id' => 1463,
                'code' => '370826',
                'name' => '微山县',
                'parentId' => '370800',
                'level' => '3',
            ),
            463 => 
            array (
                'id' => 1464,
                'code' => '370827',
                'name' => '鱼台县',
                'parentId' => '370800',
                'level' => '3',
            ),
            464 => 
            array (
                'id' => 1465,
                'code' => '370828',
                'name' => '金乡县',
                'parentId' => '370800',
                'level' => '3',
            ),
            465 => 
            array (
                'id' => 1466,
                'code' => '370829',
                'name' => '嘉祥县',
                'parentId' => '370800',
                'level' => '3',
            ),
            466 => 
            array (
                'id' => 1467,
                'code' => '370830',
                'name' => '汶上县',
                'parentId' => '370800',
                'level' => '3',
            ),
            467 => 
            array (
                'id' => 1468,
                'code' => '370831',
                'name' => '泗水县',
                'parentId' => '370800',
                'level' => '3',
            ),
            468 => 
            array (
                'id' => 1469,
                'code' => '370832',
                'name' => '梁山县',
                'parentId' => '370800',
                'level' => '3',
            ),
            469 => 
            array (
                'id' => 1470,
                'code' => '370881',
                'name' => '曲阜市',
                'parentId' => '370800',
                'level' => '3',
            ),
            470 => 
            array (
                'id' => 1471,
                'code' => '370883',
                'name' => '邹城市',
                'parentId' => '370800',
                'level' => '3',
            ),
            471 => 
            array (
                'id' => 1472,
                'code' => '370900',
                'name' => '泰安市',
                'parentId' => '370000',
                'level' => '2',
            ),
            472 => 
            array (
                'id' => 1473,
                'code' => '370902',
                'name' => '泰山区',
                'parentId' => '370900',
                'level' => '3',
            ),
            473 => 
            array (
                'id' => 1474,
                'code' => '370911',
                'name' => '岱岳区',
                'parentId' => '370900',
                'level' => '3',
            ),
            474 => 
            array (
                'id' => 1475,
                'code' => '370921',
                'name' => '宁阳县',
                'parentId' => '370900',
                'level' => '3',
            ),
            475 => 
            array (
                'id' => 1476,
                'code' => '370923',
                'name' => '东平县',
                'parentId' => '370900',
                'level' => '3',
            ),
            476 => 
            array (
                'id' => 1477,
                'code' => '370982',
                'name' => '新泰市',
                'parentId' => '370900',
                'level' => '3',
            ),
            477 => 
            array (
                'id' => 1478,
                'code' => '370983',
                'name' => '肥城市',
                'parentId' => '370900',
                'level' => '3',
            ),
            478 => 
            array (
                'id' => 1479,
                'code' => '371000',
                'name' => '威海市',
                'parentId' => '370000',
                'level' => '2',
            ),
            479 => 
            array (
                'id' => 1480,
                'code' => '371002',
                'name' => '环翠区',
                'parentId' => '371000',
                'level' => '3',
            ),
            480 => 
            array (
                'id' => 1481,
                'code' => '371003',
                'name' => '文登区',
                'parentId' => '371000',
                'level' => '3',
            ),
            481 => 
            array (
                'id' => 1482,
                'code' => '371082',
                'name' => '荣成市',
                'parentId' => '371000',
                'level' => '3',
            ),
            482 => 
            array (
                'id' => 1483,
                'code' => '371083',
                'name' => '乳山市',
                'parentId' => '371000',
                'level' => '3',
            ),
            483 => 
            array (
                'id' => 1484,
                'code' => '371100',
                'name' => '日照市',
                'parentId' => '370000',
                'level' => '2',
            ),
            484 => 
            array (
                'id' => 1485,
                'code' => '371102',
                'name' => '东港区',
                'parentId' => '371100',
                'level' => '3',
            ),
            485 => 
            array (
                'id' => 1486,
                'code' => '371103',
                'name' => '岚山区',
                'parentId' => '371100',
                'level' => '3',
            ),
            486 => 
            array (
                'id' => 1487,
                'code' => '371121',
                'name' => '五莲县',
                'parentId' => '371100',
                'level' => '3',
            ),
            487 => 
            array (
                'id' => 1488,
                'code' => '371122',
                'name' => '莒县',
                'parentId' => '371100',
                'level' => '3',
            ),
            488 => 
            array (
                'id' => 1489,
                'code' => '371200',
                'name' => '莱芜市',
                'parentId' => '370000',
                'level' => '2',
            ),
            489 => 
            array (
                'id' => 1490,
                'code' => '371202',
                'name' => '莱城区',
                'parentId' => '371200',
                'level' => '3',
            ),
            490 => 
            array (
                'id' => 1491,
                'code' => '371203',
                'name' => '钢城区',
                'parentId' => '371200',
                'level' => '3',
            ),
            491 => 
            array (
                'id' => 1492,
                'code' => '371300',
                'name' => '临沂市',
                'parentId' => '370000',
                'level' => '2',
            ),
            492 => 
            array (
                'id' => 1493,
                'code' => '371302',
                'name' => '兰山区',
                'parentId' => '371300',
                'level' => '3',
            ),
            493 => 
            array (
                'id' => 1494,
                'code' => '371311',
                'name' => '罗庄区',
                'parentId' => '371300',
                'level' => '3',
            ),
            494 => 
            array (
                'id' => 1495,
                'code' => '371312',
                'name' => '河东区',
                'parentId' => '371300',
                'level' => '3',
            ),
            495 => 
            array (
                'id' => 1496,
                'code' => '371321',
                'name' => '沂南县',
                'parentId' => '371300',
                'level' => '3',
            ),
            496 => 
            array (
                'id' => 1497,
                'code' => '371322',
                'name' => '郯城县',
                'parentId' => '371300',
                'level' => '3',
            ),
            497 => 
            array (
                'id' => 1498,
                'code' => '371323',
                'name' => '沂水县',
                'parentId' => '371300',
                'level' => '3',
            ),
            498 => 
            array (
                'id' => 1499,
                'code' => '371324',
                'name' => '兰陵县',
                'parentId' => '371300',
                'level' => '3',
            ),
            499 => 
            array (
                'id' => 1500,
                'code' => '371325',
                'name' => '费县',
                'parentId' => '371300',
                'level' => '3',
            ),
        ));
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'code' => '371326',
                'name' => '平邑县',
                'parentId' => '371300',
                'level' => '3',
            ),
            1 => 
            array (
                'id' => 1502,
                'code' => '371327',
                'name' => '莒南县',
                'parentId' => '371300',
                'level' => '3',
            ),
            2 => 
            array (
                'id' => 1503,
                'code' => '371328',
                'name' => '蒙阴县',
                'parentId' => '371300',
                'level' => '3',
            ),
            3 => 
            array (
                'id' => 1504,
                'code' => '371329',
                'name' => '临沭县',
                'parentId' => '371300',
                'level' => '3',
            ),
            4 => 
            array (
                'id' => 1505,
                'code' => '371400',
                'name' => '德州市',
                'parentId' => '370000',
                'level' => '2',
            ),
            5 => 
            array (
                'id' => 1506,
                'code' => '371402',
                'name' => '德城区',
                'parentId' => '371400',
                'level' => '3',
            ),
            6 => 
            array (
                'id' => 1507,
                'code' => '371403',
                'name' => '陵城区',
                'parentId' => '371400',
                'level' => '3',
            ),
            7 => 
            array (
                'id' => 1508,
                'code' => '371422',
                'name' => '宁津县',
                'parentId' => '371400',
                'level' => '3',
            ),
            8 => 
            array (
                'id' => 1509,
                'code' => '371423',
                'name' => '庆云县',
                'parentId' => '371400',
                'level' => '3',
            ),
            9 => 
            array (
                'id' => 1510,
                'code' => '371424',
                'name' => '临邑县',
                'parentId' => '371400',
                'level' => '3',
            ),
            10 => 
            array (
                'id' => 1511,
                'code' => '371425',
                'name' => '齐河县',
                'parentId' => '371400',
                'level' => '3',
            ),
            11 => 
            array (
                'id' => 1512,
                'code' => '371426',
                'name' => '平原县',
                'parentId' => '371400',
                'level' => '3',
            ),
            12 => 
            array (
                'id' => 1513,
                'code' => '371427',
                'name' => '夏津县',
                'parentId' => '371400',
                'level' => '3',
            ),
            13 => 
            array (
                'id' => 1514,
                'code' => '371428',
                'name' => '武城县',
                'parentId' => '371400',
                'level' => '3',
            ),
            14 => 
            array (
                'id' => 1515,
                'code' => '371481',
                'name' => '乐陵市',
                'parentId' => '371400',
                'level' => '3',
            ),
            15 => 
            array (
                'id' => 1516,
                'code' => '371482',
                'name' => '禹城市',
                'parentId' => '371400',
                'level' => '3',
            ),
            16 => 
            array (
                'id' => 1517,
                'code' => '371500',
                'name' => '聊城市',
                'parentId' => '370000',
                'level' => '2',
            ),
            17 => 
            array (
                'id' => 1518,
                'code' => '371502',
                'name' => '东昌府区',
                'parentId' => '371500',
                'level' => '3',
            ),
            18 => 
            array (
                'id' => 1519,
                'code' => '371521',
                'name' => '阳谷县',
                'parentId' => '371500',
                'level' => '3',
            ),
            19 => 
            array (
                'id' => 1520,
                'code' => '371522',
                'name' => '莘县',
                'parentId' => '371500',
                'level' => '3',
            ),
            20 => 
            array (
                'id' => 1521,
                'code' => '371523',
                'name' => '茌平县',
                'parentId' => '371500',
                'level' => '3',
            ),
            21 => 
            array (
                'id' => 1522,
                'code' => '371524',
                'name' => '东阿县',
                'parentId' => '371500',
                'level' => '3',
            ),
            22 => 
            array (
                'id' => 1523,
                'code' => '371525',
                'name' => '冠县',
                'parentId' => '371500',
                'level' => '3',
            ),
            23 => 
            array (
                'id' => 1524,
                'code' => '371526',
                'name' => '高唐县',
                'parentId' => '371500',
                'level' => '3',
            ),
            24 => 
            array (
                'id' => 1525,
                'code' => '371581',
                'name' => '临清市',
                'parentId' => '371500',
                'level' => '3',
            ),
            25 => 
            array (
                'id' => 1526,
                'code' => '371600',
                'name' => '滨州市',
                'parentId' => '370000',
                'level' => '2',
            ),
            26 => 
            array (
                'id' => 1527,
                'code' => '371602',
                'name' => '滨城区',
                'parentId' => '371600',
                'level' => '3',
            ),
            27 => 
            array (
                'id' => 1528,
                'code' => '371603',
                'name' => '沾化区',
                'parentId' => '371600',
                'level' => '3',
            ),
            28 => 
            array (
                'id' => 1529,
                'code' => '371621',
                'name' => '惠民县',
                'parentId' => '371600',
                'level' => '3',
            ),
            29 => 
            array (
                'id' => 1530,
                'code' => '371622',
                'name' => '阳信县',
                'parentId' => '371600',
                'level' => '3',
            ),
            30 => 
            array (
                'id' => 1531,
                'code' => '371623',
                'name' => '无棣县',
                'parentId' => '371600',
                'level' => '3',
            ),
            31 => 
            array (
                'id' => 1532,
                'code' => '371625',
                'name' => '博兴县',
                'parentId' => '371600',
                'level' => '3',
            ),
            32 => 
            array (
                'id' => 1533,
                'code' => '371626',
                'name' => '邹平县',
                'parentId' => '371600',
                'level' => '3',
            ),
            33 => 
            array (
                'id' => 1534,
                'code' => '371627',
                'name' => '北海新区',
                'parentId' => '371600',
                'level' => '3',
            ),
            34 => 
            array (
                'id' => 1535,
                'code' => '371700',
                'name' => '菏泽市',
                'parentId' => '370000',
                'level' => '2',
            ),
            35 => 
            array (
                'id' => 1536,
                'code' => '371702',
                'name' => '牡丹区',
                'parentId' => '371700',
                'level' => '3',
            ),
            36 => 
            array (
                'id' => 1537,
                'code' => '371721',
                'name' => '曹县',
                'parentId' => '371700',
                'level' => '3',
            ),
            37 => 
            array (
                'id' => 1538,
                'code' => '371722',
                'name' => '单县',
                'parentId' => '371700',
                'level' => '3',
            ),
            38 => 
            array (
                'id' => 1539,
                'code' => '371723',
                'name' => '成武县',
                'parentId' => '371700',
                'level' => '3',
            ),
            39 => 
            array (
                'id' => 1540,
                'code' => '371724',
                'name' => '巨野县',
                'parentId' => '371700',
                'level' => '3',
            ),
            40 => 
            array (
                'id' => 1541,
                'code' => '371725',
                'name' => '郓城县',
                'parentId' => '371700',
                'level' => '3',
            ),
            41 => 
            array (
                'id' => 1542,
                'code' => '371726',
                'name' => '鄄城县',
                'parentId' => '371700',
                'level' => '3',
            ),
            42 => 
            array (
                'id' => 1543,
                'code' => '371727',
                'name' => '定陶县',
                'parentId' => '371700',
                'level' => '3',
            ),
            43 => 
            array (
                'id' => 1544,
                'code' => '371728',
                'name' => '东明县',
                'parentId' => '371700',
                'level' => '3',
            ),
            44 => 
            array (
                'id' => 1545,
                'code' => '410000',
                'name' => '河南省',
                'parentId' => '100000',
                'level' => '1',
            ),
            45 => 
            array (
                'id' => 1546,
                'code' => '410100',
                'name' => '郑州市',
                'parentId' => '410000',
                'level' => '2',
            ),
            46 => 
            array (
                'id' => 1547,
                'code' => '410102',
                'name' => '中原区',
                'parentId' => '410100',
                'level' => '3',
            ),
            47 => 
            array (
                'id' => 1548,
                'code' => '410103',
                'name' => '二七区',
                'parentId' => '410100',
                'level' => '3',
            ),
            48 => 
            array (
                'id' => 1549,
                'code' => '410104',
                'name' => '管城回族区',
                'parentId' => '410100',
                'level' => '3',
            ),
            49 => 
            array (
                'id' => 1550,
                'code' => '410105',
                'name' => '金水区',
                'parentId' => '410100',
                'level' => '3',
            ),
            50 => 
            array (
                'id' => 1551,
                'code' => '410106',
                'name' => '上街区',
                'parentId' => '410100',
                'level' => '3',
            ),
            51 => 
            array (
                'id' => 1552,
                'code' => '410108',
                'name' => '惠济区',
                'parentId' => '410100',
                'level' => '3',
            ),
            52 => 
            array (
                'id' => 1553,
                'code' => '410122',
                'name' => '中牟县',
                'parentId' => '410100',
                'level' => '3',
            ),
            53 => 
            array (
                'id' => 1554,
                'code' => '410181',
                'name' => '巩义市',
                'parentId' => '410100',
                'level' => '3',
            ),
            54 => 
            array (
                'id' => 1555,
                'code' => '410182',
                'name' => '荥阳市',
                'parentId' => '410100',
                'level' => '3',
            ),
            55 => 
            array (
                'id' => 1556,
                'code' => '410183',
                'name' => '新密市',
                'parentId' => '410100',
                'level' => '3',
            ),
            56 => 
            array (
                'id' => 1557,
                'code' => '410184',
                'name' => '新郑市',
                'parentId' => '410100',
                'level' => '3',
            ),
            57 => 
            array (
                'id' => 1558,
                'code' => '410185',
                'name' => '登封市',
                'parentId' => '410100',
                'level' => '3',
            ),
            58 => 
            array (
                'id' => 1559,
                'code' => '410186',
                'name' => '郑东新区',
                'parentId' => '410100',
                'level' => '3',
            ),
            59 => 
            array (
                'id' => 1560,
                'code' => '410187',
                'name' => '郑汴新区',
                'parentId' => '410100',
                'level' => '3',
            ),
            60 => 
            array (
                'id' => 1561,
                'code' => '410200',
                'name' => '开封市',
                'parentId' => '410000',
                'level' => '2',
            ),
            61 => 
            array (
                'id' => 1562,
                'code' => '410202',
                'name' => '龙亭区',
                'parentId' => '410200',
                'level' => '3',
            ),
            62 => 
            array (
                'id' => 1563,
                'code' => '410203',
                'name' => '顺河回族区',
                'parentId' => '410200',
                'level' => '3',
            ),
            63 => 
            array (
                'id' => 1564,
                'code' => '410204',
                'name' => '鼓楼区',
                'parentId' => '410200',
                'level' => '3',
            ),
            64 => 
            array (
                'id' => 1565,
                'code' => '410205',
                'name' => '禹王台区',
                'parentId' => '410200',
                'level' => '3',
            ),
            65 => 
            array (
                'id' => 1566,
                'code' => '410212',
                'name' => '祥符区',
                'parentId' => '410200',
                'level' => '3',
            ),
            66 => 
            array (
                'id' => 1567,
                'code' => '410221',
                'name' => '杞县',
                'parentId' => '410200',
                'level' => '3',
            ),
            67 => 
            array (
                'id' => 1568,
                'code' => '410222',
                'name' => '通许县',
                'parentId' => '410200',
                'level' => '3',
            ),
            68 => 
            array (
                'id' => 1569,
                'code' => '410223',
                'name' => '尉氏县',
                'parentId' => '410200',
                'level' => '3',
            ),
            69 => 
            array (
                'id' => 1570,
                'code' => '410225',
                'name' => '兰考县',
                'parentId' => '410200',
                'level' => '3',
            ),
            70 => 
            array (
                'id' => 1571,
                'code' => '410300',
                'name' => '洛阳市',
                'parentId' => '410000',
                'level' => '2',
            ),
            71 => 
            array (
                'id' => 1572,
                'code' => '410302',
                'name' => '老城区',
                'parentId' => '410300',
                'level' => '3',
            ),
            72 => 
            array (
                'id' => 1573,
                'code' => '410303',
                'name' => '西工区',
                'parentId' => '410300',
                'level' => '3',
            ),
            73 => 
            array (
                'id' => 1574,
                'code' => '410304',
                'name' => '瀍河回族区',
                'parentId' => '410300',
                'level' => '3',
            ),
            74 => 
            array (
                'id' => 1575,
                'code' => '410305',
                'name' => '涧西区',
                'parentId' => '410300',
                'level' => '3',
            ),
            75 => 
            array (
                'id' => 1576,
                'code' => '410306',
                'name' => '吉利区',
                'parentId' => '410300',
                'level' => '3',
            ),
            76 => 
            array (
                'id' => 1577,
                'code' => '410311',
                'name' => '洛龙区',
                'parentId' => '410300',
                'level' => '3',
            ),
            77 => 
            array (
                'id' => 1578,
                'code' => '410322',
                'name' => '孟津县',
                'parentId' => '410300',
                'level' => '3',
            ),
            78 => 
            array (
                'id' => 1579,
                'code' => '410323',
                'name' => '新安县',
                'parentId' => '410300',
                'level' => '3',
            ),
            79 => 
            array (
                'id' => 1580,
                'code' => '410324',
                'name' => '栾川县',
                'parentId' => '410300',
                'level' => '3',
            ),
            80 => 
            array (
                'id' => 1581,
                'code' => '410325',
                'name' => '嵩县',
                'parentId' => '410300',
                'level' => '3',
            ),
            81 => 
            array (
                'id' => 1582,
                'code' => '410326',
                'name' => '汝阳县',
                'parentId' => '410300',
                'level' => '3',
            ),
            82 => 
            array (
                'id' => 1583,
                'code' => '410327',
                'name' => '宜阳县',
                'parentId' => '410300',
                'level' => '3',
            ),
            83 => 
            array (
                'id' => 1584,
                'code' => '410328',
                'name' => '洛宁县',
                'parentId' => '410300',
                'level' => '3',
            ),
            84 => 
            array (
                'id' => 1585,
                'code' => '410329',
                'name' => '伊川县',
                'parentId' => '410300',
                'level' => '3',
            ),
            85 => 
            array (
                'id' => 1586,
                'code' => '410381',
                'name' => '偃师市',
                'parentId' => '410300',
                'level' => '3',
            ),
            86 => 
            array (
                'id' => 1587,
                'code' => '410382',
                'name' => '洛阳新区',
                'parentId' => '410300',
                'level' => '3',
            ),
            87 => 
            array (
                'id' => 1588,
                'code' => '410400',
                'name' => '平顶山市',
                'parentId' => '410000',
                'level' => '2',
            ),
            88 => 
            array (
                'id' => 1589,
                'code' => '410402',
                'name' => '新华区',
                'parentId' => '410400',
                'level' => '3',
            ),
            89 => 
            array (
                'id' => 1590,
                'code' => '410403',
                'name' => '卫东区',
                'parentId' => '410400',
                'level' => '3',
            ),
            90 => 
            array (
                'id' => 1591,
                'code' => '410404',
                'name' => '石龙区',
                'parentId' => '410400',
                'level' => '3',
            ),
            91 => 
            array (
                'id' => 1592,
                'code' => '410411',
                'name' => '湛河区',
                'parentId' => '410400',
                'level' => '3',
            ),
            92 => 
            array (
                'id' => 1593,
                'code' => '410421',
                'name' => '宝丰县',
                'parentId' => '410400',
                'level' => '3',
            ),
            93 => 
            array (
                'id' => 1594,
                'code' => '410422',
                'name' => '叶县',
                'parentId' => '410400',
                'level' => '3',
            ),
            94 => 
            array (
                'id' => 1595,
                'code' => '410423',
                'name' => '鲁山县',
                'parentId' => '410400',
                'level' => '3',
            ),
            95 => 
            array (
                'id' => 1596,
                'code' => '410425',
                'name' => '郏县',
                'parentId' => '410400',
                'level' => '3',
            ),
            96 => 
            array (
                'id' => 1597,
                'code' => '410481',
                'name' => '舞钢市',
                'parentId' => '410400',
                'level' => '3',
            ),
            97 => 
            array (
                'id' => 1598,
                'code' => '410482',
                'name' => '汝州市',
                'parentId' => '410400',
                'level' => '3',
            ),
            98 => 
            array (
                'id' => 1599,
                'code' => '410500',
                'name' => '安阳市',
                'parentId' => '410000',
                'level' => '2',
            ),
            99 => 
            array (
                'id' => 1600,
                'code' => '410502',
                'name' => '文峰区',
                'parentId' => '410500',
                'level' => '3',
            ),
            100 => 
            array (
                'id' => 1601,
                'code' => '410503',
                'name' => '北关区',
                'parentId' => '410500',
                'level' => '3',
            ),
            101 => 
            array (
                'id' => 1602,
                'code' => '410505',
                'name' => '殷都区',
                'parentId' => '410500',
                'level' => '3',
            ),
            102 => 
            array (
                'id' => 1603,
                'code' => '410506',
                'name' => '龙安区',
                'parentId' => '410500',
                'level' => '3',
            ),
            103 => 
            array (
                'id' => 1604,
                'code' => '410522',
                'name' => '安阳县',
                'parentId' => '410500',
                'level' => '3',
            ),
            104 => 
            array (
                'id' => 1605,
                'code' => '410523',
                'name' => '汤阴县',
                'parentId' => '410500',
                'level' => '3',
            ),
            105 => 
            array (
                'id' => 1606,
                'code' => '410526',
                'name' => '滑县',
                'parentId' => '410500',
                'level' => '3',
            ),
            106 => 
            array (
                'id' => 1607,
                'code' => '410527',
                'name' => '内黄县',
                'parentId' => '410500',
                'level' => '3',
            ),
            107 => 
            array (
                'id' => 1608,
                'code' => '410581',
                'name' => '林州市',
                'parentId' => '410500',
                'level' => '3',
            ),
            108 => 
            array (
                'id' => 1609,
                'code' => '410582',
                'name' => '安阳新区',
                'parentId' => '410500',
                'level' => '3',
            ),
            109 => 
            array (
                'id' => 1610,
                'code' => '410600',
                'name' => '鹤壁市',
                'parentId' => '410000',
                'level' => '2',
            ),
            110 => 
            array (
                'id' => 1611,
                'code' => '410602',
                'name' => '鹤山区',
                'parentId' => '410600',
                'level' => '3',
            ),
            111 => 
            array (
                'id' => 1612,
                'code' => '410603',
                'name' => '山城区',
                'parentId' => '410600',
                'level' => '3',
            ),
            112 => 
            array (
                'id' => 1613,
                'code' => '410611',
                'name' => '淇滨区',
                'parentId' => '410600',
                'level' => '3',
            ),
            113 => 
            array (
                'id' => 1614,
                'code' => '410621',
                'name' => '浚县',
                'parentId' => '410600',
                'level' => '3',
            ),
            114 => 
            array (
                'id' => 1615,
                'code' => '410622',
                'name' => '淇县',
                'parentId' => '410600',
                'level' => '3',
            ),
            115 => 
            array (
                'id' => 1616,
                'code' => '410700',
                'name' => '新乡市',
                'parentId' => '410000',
                'level' => '2',
            ),
            116 => 
            array (
                'id' => 1617,
                'code' => '410702',
                'name' => '红旗区',
                'parentId' => '410700',
                'level' => '3',
            ),
            117 => 
            array (
                'id' => 1618,
                'code' => '410703',
                'name' => '卫滨区',
                'parentId' => '410700',
                'level' => '3',
            ),
            118 => 
            array (
                'id' => 1619,
                'code' => '410704',
                'name' => '凤泉区',
                'parentId' => '410700',
                'level' => '3',
            ),
            119 => 
            array (
                'id' => 1620,
                'code' => '410711',
                'name' => '牧野区',
                'parentId' => '410700',
                'level' => '3',
            ),
            120 => 
            array (
                'id' => 1621,
                'code' => '410721',
                'name' => '新乡县',
                'parentId' => '410700',
                'level' => '3',
            ),
            121 => 
            array (
                'id' => 1622,
                'code' => '410724',
                'name' => '获嘉县',
                'parentId' => '410700',
                'level' => '3',
            ),
            122 => 
            array (
                'id' => 1623,
                'code' => '410725',
                'name' => '原阳县',
                'parentId' => '410700',
                'level' => '3',
            ),
            123 => 
            array (
                'id' => 1624,
                'code' => '410726',
                'name' => '延津县',
                'parentId' => '410700',
                'level' => '3',
            ),
            124 => 
            array (
                'id' => 1625,
                'code' => '410727',
                'name' => '封丘县',
                'parentId' => '410700',
                'level' => '3',
            ),
            125 => 
            array (
                'id' => 1626,
                'code' => '410728',
                'name' => '长垣县',
                'parentId' => '410700',
                'level' => '3',
            ),
            126 => 
            array (
                'id' => 1627,
                'code' => '410781',
                'name' => '卫辉市',
                'parentId' => '410700',
                'level' => '3',
            ),
            127 => 
            array (
                'id' => 1628,
                'code' => '410782',
                'name' => '辉县市',
                'parentId' => '410700',
                'level' => '3',
            ),
            128 => 
            array (
                'id' => 1629,
                'code' => '410800',
                'name' => '焦作市',
                'parentId' => '410000',
                'level' => '2',
            ),
            129 => 
            array (
                'id' => 1630,
                'code' => '410802',
                'name' => '解放区',
                'parentId' => '410800',
                'level' => '3',
            ),
            130 => 
            array (
                'id' => 1631,
                'code' => '410803',
                'name' => '中站区',
                'parentId' => '410800',
                'level' => '3',
            ),
            131 => 
            array (
                'id' => 1632,
                'code' => '410804',
                'name' => '马村区',
                'parentId' => '410800',
                'level' => '3',
            ),
            132 => 
            array (
                'id' => 1633,
                'code' => '410811',
                'name' => '山阳区',
                'parentId' => '410800',
                'level' => '3',
            ),
            133 => 
            array (
                'id' => 1634,
                'code' => '410821',
                'name' => '修武县',
                'parentId' => '410800',
                'level' => '3',
            ),
            134 => 
            array (
                'id' => 1635,
                'code' => '410822',
                'name' => '博爱县',
                'parentId' => '410800',
                'level' => '3',
            ),
            135 => 
            array (
                'id' => 1636,
                'code' => '410823',
                'name' => '武陟县',
                'parentId' => '410800',
                'level' => '3',
            ),
            136 => 
            array (
                'id' => 1637,
                'code' => '410825',
                'name' => '温县',
                'parentId' => '410800',
                'level' => '3',
            ),
            137 => 
            array (
                'id' => 1638,
                'code' => '410882',
                'name' => '沁阳市',
                'parentId' => '410800',
                'level' => '3',
            ),
            138 => 
            array (
                'id' => 1639,
                'code' => '410883',
                'name' => '孟州市',
                'parentId' => '410800',
                'level' => '3',
            ),
            139 => 
            array (
                'id' => 1640,
                'code' => '410900',
                'name' => '濮阳市',
                'parentId' => '410000',
                'level' => '2',
            ),
            140 => 
            array (
                'id' => 1641,
                'code' => '410902',
                'name' => '华龙区',
                'parentId' => '410900',
                'level' => '3',
            ),
            141 => 
            array (
                'id' => 1642,
                'code' => '410922',
                'name' => '清丰县',
                'parentId' => '410900',
                'level' => '3',
            ),
            142 => 
            array (
                'id' => 1643,
                'code' => '410923',
                'name' => '南乐县',
                'parentId' => '410900',
                'level' => '3',
            ),
            143 => 
            array (
                'id' => 1644,
                'code' => '410926',
                'name' => '范县',
                'parentId' => '410900',
                'level' => '3',
            ),
            144 => 
            array (
                'id' => 1645,
                'code' => '410927',
                'name' => '台前县',
                'parentId' => '410900',
                'level' => '3',
            ),
            145 => 
            array (
                'id' => 1646,
                'code' => '410928',
                'name' => '濮阳县',
                'parentId' => '410900',
                'level' => '3',
            ),
            146 => 
            array (
                'id' => 1647,
                'code' => '411000',
                'name' => '许昌市',
                'parentId' => '410000',
                'level' => '2',
            ),
            147 => 
            array (
                'id' => 1648,
                'code' => '411002',
                'name' => '魏都区',
                'parentId' => '411000',
                'level' => '3',
            ),
            148 => 
            array (
                'id' => 1649,
                'code' => '411023',
                'name' => '许昌县',
                'parentId' => '411000',
                'level' => '3',
            ),
            149 => 
            array (
                'id' => 1650,
                'code' => '411024',
                'name' => '鄢陵县',
                'parentId' => '411000',
                'level' => '3',
            ),
            150 => 
            array (
                'id' => 1651,
                'code' => '411025',
                'name' => '襄城县',
                'parentId' => '411000',
                'level' => '3',
            ),
            151 => 
            array (
                'id' => 1652,
                'code' => '411081',
                'name' => '禹州市',
                'parentId' => '411000',
                'level' => '3',
            ),
            152 => 
            array (
                'id' => 1653,
                'code' => '411082',
                'name' => '长葛市',
                'parentId' => '411000',
                'level' => '3',
            ),
            153 => 
            array (
                'id' => 1654,
                'code' => '411100',
                'name' => '漯河市',
                'parentId' => '410000',
                'level' => '2',
            ),
            154 => 
            array (
                'id' => 1655,
                'code' => '411102',
                'name' => '源汇区',
                'parentId' => '411100',
                'level' => '3',
            ),
            155 => 
            array (
                'id' => 1656,
                'code' => '411103',
                'name' => '郾城区',
                'parentId' => '411100',
                'level' => '3',
            ),
            156 => 
            array (
                'id' => 1657,
                'code' => '411104',
                'name' => '召陵区',
                'parentId' => '411100',
                'level' => '3',
            ),
            157 => 
            array (
                'id' => 1658,
                'code' => '411121',
                'name' => '舞阳县',
                'parentId' => '411100',
                'level' => '3',
            ),
            158 => 
            array (
                'id' => 1659,
                'code' => '411122',
                'name' => '临颍县',
                'parentId' => '411100',
                'level' => '3',
            ),
            159 => 
            array (
                'id' => 1660,
                'code' => '411200',
                'name' => '三门峡市',
                'parentId' => '410000',
                'level' => '2',
            ),
            160 => 
            array (
                'id' => 1661,
                'code' => '411202',
                'name' => '湖滨区',
                'parentId' => '411200',
                'level' => '3',
            ),
            161 => 
            array (
                'id' => 1662,
                'code' => '411203',
                'name' => '陕州区',
                'parentId' => '411200',
                'level' => '3',
            ),
            162 => 
            array (
                'id' => 1663,
                'code' => '411221',
                'name' => '渑池县',
                'parentId' => '411200',
                'level' => '3',
            ),
            163 => 
            array (
                'id' => 1664,
                'code' => '411224',
                'name' => '卢氏县',
                'parentId' => '411200',
                'level' => '3',
            ),
            164 => 
            array (
                'id' => 1665,
                'code' => '411281',
                'name' => '义马市',
                'parentId' => '411200',
                'level' => '3',
            ),
            165 => 
            array (
                'id' => 1666,
                'code' => '411282',
                'name' => '灵宝市',
                'parentId' => '411200',
                'level' => '3',
            ),
            166 => 
            array (
                'id' => 1667,
                'code' => '411300',
                'name' => '南阳市',
                'parentId' => '410000',
                'level' => '2',
            ),
            167 => 
            array (
                'id' => 1668,
                'code' => '411302',
                'name' => '宛城区',
                'parentId' => '411300',
                'level' => '3',
            ),
            168 => 
            array (
                'id' => 1669,
                'code' => '411303',
                'name' => '卧龙区',
                'parentId' => '411300',
                'level' => '3',
            ),
            169 => 
            array (
                'id' => 1670,
                'code' => '411321',
                'name' => '南召县',
                'parentId' => '411300',
                'level' => '3',
            ),
            170 => 
            array (
                'id' => 1671,
                'code' => '411322',
                'name' => '方城县',
                'parentId' => '411300',
                'level' => '3',
            ),
            171 => 
            array (
                'id' => 1672,
                'code' => '411323',
                'name' => '西峡县',
                'parentId' => '411300',
                'level' => '3',
            ),
            172 => 
            array (
                'id' => 1673,
                'code' => '411324',
                'name' => '镇平县',
                'parentId' => '411300',
                'level' => '3',
            ),
            173 => 
            array (
                'id' => 1674,
                'code' => '411325',
                'name' => '内乡县',
                'parentId' => '411300',
                'level' => '3',
            ),
            174 => 
            array (
                'id' => 1675,
                'code' => '411326',
                'name' => '淅川县',
                'parentId' => '411300',
                'level' => '3',
            ),
            175 => 
            array (
                'id' => 1676,
                'code' => '411327',
                'name' => '社旗县',
                'parentId' => '411300',
                'level' => '3',
            ),
            176 => 
            array (
                'id' => 1677,
                'code' => '411328',
                'name' => '唐河县',
                'parentId' => '411300',
                'level' => '3',
            ),
            177 => 
            array (
                'id' => 1678,
                'code' => '411329',
                'name' => '新野县',
                'parentId' => '411300',
                'level' => '3',
            ),
            178 => 
            array (
                'id' => 1679,
                'code' => '411330',
                'name' => '桐柏县',
                'parentId' => '411300',
                'level' => '3',
            ),
            179 => 
            array (
                'id' => 1680,
                'code' => '411381',
                'name' => '邓州市',
                'parentId' => '411300',
                'level' => '3',
            ),
            180 => 
            array (
                'id' => 1681,
                'code' => '411400',
                'name' => '商丘市',
                'parentId' => '410000',
                'level' => '2',
            ),
            181 => 
            array (
                'id' => 1682,
                'code' => '411402',
                'name' => '梁园区',
                'parentId' => '411400',
                'level' => '3',
            ),
            182 => 
            array (
                'id' => 1683,
                'code' => '411403',
                'name' => '睢阳区',
                'parentId' => '411400',
                'level' => '3',
            ),
            183 => 
            array (
                'id' => 1684,
                'code' => '411421',
                'name' => '民权县',
                'parentId' => '411400',
                'level' => '3',
            ),
            184 => 
            array (
                'id' => 1685,
                'code' => '411422',
                'name' => '睢县',
                'parentId' => '411400',
                'level' => '3',
            ),
            185 => 
            array (
                'id' => 1686,
                'code' => '411423',
                'name' => '宁陵县',
                'parentId' => '411400',
                'level' => '3',
            ),
            186 => 
            array (
                'id' => 1687,
                'code' => '411424',
                'name' => '柘城县',
                'parentId' => '411400',
                'level' => '3',
            ),
            187 => 
            array (
                'id' => 1688,
                'code' => '411425',
                'name' => '虞城县',
                'parentId' => '411400',
                'level' => '3',
            ),
            188 => 
            array (
                'id' => 1689,
                'code' => '411426',
                'name' => '夏邑县',
                'parentId' => '411400',
                'level' => '3',
            ),
            189 => 
            array (
                'id' => 1690,
                'code' => '411481',
                'name' => '永城市',
                'parentId' => '411400',
                'level' => '3',
            ),
            190 => 
            array (
                'id' => 1691,
                'code' => '411500',
                'name' => '信阳市',
                'parentId' => '410000',
                'level' => '2',
            ),
            191 => 
            array (
                'id' => 1692,
                'code' => '411502',
                'name' => '浉河区',
                'parentId' => '411500',
                'level' => '3',
            ),
            192 => 
            array (
                'id' => 1693,
                'code' => '411503',
                'name' => '平桥区',
                'parentId' => '411500',
                'level' => '3',
            ),
            193 => 
            array (
                'id' => 1694,
                'code' => '411521',
                'name' => '罗山县',
                'parentId' => '411500',
                'level' => '3',
            ),
            194 => 
            array (
                'id' => 1695,
                'code' => '411522',
                'name' => '光山县',
                'parentId' => '411500',
                'level' => '3',
            ),
            195 => 
            array (
                'id' => 1696,
                'code' => '411523',
                'name' => '新县',
                'parentId' => '411500',
                'level' => '3',
            ),
            196 => 
            array (
                'id' => 1697,
                'code' => '411524',
                'name' => '商城县',
                'parentId' => '411500',
                'level' => '3',
            ),
            197 => 
            array (
                'id' => 1698,
                'code' => '411525',
                'name' => '固始县',
                'parentId' => '411500',
                'level' => '3',
            ),
            198 => 
            array (
                'id' => 1699,
                'code' => '411526',
                'name' => '潢川县',
                'parentId' => '411500',
                'level' => '3',
            ),
            199 => 
            array (
                'id' => 1700,
                'code' => '411527',
                'name' => '淮滨县',
                'parentId' => '411500',
                'level' => '3',
            ),
            200 => 
            array (
                'id' => 1701,
                'code' => '411528',
                'name' => '息县',
                'parentId' => '411500',
                'level' => '3',
            ),
            201 => 
            array (
                'id' => 1702,
                'code' => '411600',
                'name' => '周口市',
                'parentId' => '410000',
                'level' => '2',
            ),
            202 => 
            array (
                'id' => 1703,
                'code' => '411602',
                'name' => '川汇区',
                'parentId' => '411600',
                'level' => '3',
            ),
            203 => 
            array (
                'id' => 1704,
                'code' => '411621',
                'name' => '扶沟县',
                'parentId' => '411600',
                'level' => '3',
            ),
            204 => 
            array (
                'id' => 1705,
                'code' => '411622',
                'name' => '西华县',
                'parentId' => '411600',
                'level' => '3',
            ),
            205 => 
            array (
                'id' => 1706,
                'code' => '411623',
                'name' => '商水县',
                'parentId' => '411600',
                'level' => '3',
            ),
            206 => 
            array (
                'id' => 1707,
                'code' => '411624',
                'name' => '沈丘县',
                'parentId' => '411600',
                'level' => '3',
            ),
            207 => 
            array (
                'id' => 1708,
                'code' => '411625',
                'name' => '郸城县',
                'parentId' => '411600',
                'level' => '3',
            ),
            208 => 
            array (
                'id' => 1709,
                'code' => '411626',
                'name' => '淮阳县',
                'parentId' => '411600',
                'level' => '3',
            ),
            209 => 
            array (
                'id' => 1710,
                'code' => '411627',
                'name' => '太康县',
                'parentId' => '411600',
                'level' => '3',
            ),
            210 => 
            array (
                'id' => 1711,
                'code' => '411628',
                'name' => '鹿邑县',
                'parentId' => '411600',
                'level' => '3',
            ),
            211 => 
            array (
                'id' => 1712,
                'code' => '411681',
                'name' => '项城市',
                'parentId' => '411600',
                'level' => '3',
            ),
            212 => 
            array (
                'id' => 1713,
                'code' => '411700',
                'name' => '驻马店市',
                'parentId' => '410000',
                'level' => '2',
            ),
            213 => 
            array (
                'id' => 1714,
                'code' => '411702',
                'name' => '驿城区',
                'parentId' => '411700',
                'level' => '3',
            ),
            214 => 
            array (
                'id' => 1715,
                'code' => '411721',
                'name' => '西平县',
                'parentId' => '411700',
                'level' => '3',
            ),
            215 => 
            array (
                'id' => 1716,
                'code' => '411722',
                'name' => '上蔡县',
                'parentId' => '411700',
                'level' => '3',
            ),
            216 => 
            array (
                'id' => 1717,
                'code' => '411723',
                'name' => '平舆县',
                'parentId' => '411700',
                'level' => '3',
            ),
            217 => 
            array (
                'id' => 1718,
                'code' => '411724',
                'name' => '正阳县',
                'parentId' => '411700',
                'level' => '3',
            ),
            218 => 
            array (
                'id' => 1719,
                'code' => '411725',
                'name' => '确山县',
                'parentId' => '411700',
                'level' => '3',
            ),
            219 => 
            array (
                'id' => 1720,
                'code' => '411726',
                'name' => '泌阳县',
                'parentId' => '411700',
                'level' => '3',
            ),
            220 => 
            array (
                'id' => 1721,
                'code' => '411727',
                'name' => '汝南县',
                'parentId' => '411700',
                'level' => '3',
            ),
            221 => 
            array (
                'id' => 1722,
                'code' => '411728',
                'name' => '遂平县',
                'parentId' => '411700',
                'level' => '3',
            ),
            222 => 
            array (
                'id' => 1723,
                'code' => '411729',
                'name' => '新蔡县',
                'parentId' => '411700',
                'level' => '3',
            ),
            223 => 
            array (
                'id' => 1724,
                'code' => '419000',
                'name' => '直辖县级',
                'parentId' => '410000',
                'level' => '2',
            ),
            224 => 
            array (
                'id' => 1725,
                'code' => '419001',
                'name' => '济源市',
                'parentId' => '419000',
                'level' => '3',
            ),
            225 => 
            array (
                'id' => 1726,
                'code' => '420000',
                'name' => '湖北省',
                'parentId' => '100000',
                'level' => '1',
            ),
            226 => 
            array (
                'id' => 1727,
                'code' => '420100',
                'name' => '武汉市',
                'parentId' => '420000',
                'level' => '2',
            ),
            227 => 
            array (
                'id' => 1728,
                'code' => '420102',
                'name' => '江岸区',
                'parentId' => '420100',
                'level' => '3',
            ),
            228 => 
            array (
                'id' => 1729,
                'code' => '420103',
                'name' => '江汉区',
                'parentId' => '420100',
                'level' => '3',
            ),
            229 => 
            array (
                'id' => 1730,
                'code' => '420104',
                'name' => '硚口区',
                'parentId' => '420100',
                'level' => '3',
            ),
            230 => 
            array (
                'id' => 1731,
                'code' => '420105',
                'name' => '汉阳区',
                'parentId' => '420100',
                'level' => '3',
            ),
            231 => 
            array (
                'id' => 1732,
                'code' => '420106',
                'name' => '武昌区',
                'parentId' => '420100',
                'level' => '3',
            ),
            232 => 
            array (
                'id' => 1733,
                'code' => '420107',
                'name' => '青山区',
                'parentId' => '420100',
                'level' => '3',
            ),
            233 => 
            array (
                'id' => 1734,
                'code' => '420111',
                'name' => '洪山区',
                'parentId' => '420100',
                'level' => '3',
            ),
            234 => 
            array (
                'id' => 1735,
                'code' => '420112',
                'name' => '东西湖区',
                'parentId' => '420100',
                'level' => '3',
            ),
            235 => 
            array (
                'id' => 1736,
                'code' => '420113',
                'name' => '汉南区',
                'parentId' => '420100',
                'level' => '3',
            ),
            236 => 
            array (
                'id' => 1737,
                'code' => '420114',
                'name' => '蔡甸区',
                'parentId' => '420100',
                'level' => '3',
            ),
            237 => 
            array (
                'id' => 1738,
                'code' => '420115',
                'name' => '江夏区',
                'parentId' => '420100',
                'level' => '3',
            ),
            238 => 
            array (
                'id' => 1739,
                'code' => '420116',
                'name' => '黄陂区',
                'parentId' => '420100',
                'level' => '3',
            ),
            239 => 
            array (
                'id' => 1740,
                'code' => '420117',
                'name' => '新洲区',
                'parentId' => '420100',
                'level' => '3',
            ),
            240 => 
            array (
                'id' => 1741,
                'code' => '420200',
                'name' => '黄石市',
                'parentId' => '420000',
                'level' => '2',
            ),
            241 => 
            array (
                'id' => 1742,
                'code' => '420202',
                'name' => '黄石港区',
                'parentId' => '420200',
                'level' => '3',
            ),
            242 => 
            array (
                'id' => 1743,
                'code' => '420203',
                'name' => '西塞山区',
                'parentId' => '420200',
                'level' => '3',
            ),
            243 => 
            array (
                'id' => 1744,
                'code' => '420204',
                'name' => '下陆区',
                'parentId' => '420200',
                'level' => '3',
            ),
            244 => 
            array (
                'id' => 1745,
                'code' => '420205',
                'name' => '铁山区',
                'parentId' => '420200',
                'level' => '3',
            ),
            245 => 
            array (
                'id' => 1746,
                'code' => '420222',
                'name' => '阳新县',
                'parentId' => '420200',
                'level' => '3',
            ),
            246 => 
            array (
                'id' => 1747,
                'code' => '420281',
                'name' => '大冶市',
                'parentId' => '420200',
                'level' => '3',
            ),
            247 => 
            array (
                'id' => 1748,
                'code' => '420300',
                'name' => '十堰市',
                'parentId' => '420000',
                'level' => '2',
            ),
            248 => 
            array (
                'id' => 1749,
                'code' => '420302',
                'name' => '茅箭区',
                'parentId' => '420300',
                'level' => '3',
            ),
            249 => 
            array (
                'id' => 1750,
                'code' => '420303',
                'name' => '张湾区',
                'parentId' => '420300',
                'level' => '3',
            ),
            250 => 
            array (
                'id' => 1751,
                'code' => '420304',
                'name' => '郧阳区',
                'parentId' => '420300',
                'level' => '3',
            ),
            251 => 
            array (
                'id' => 1752,
                'code' => '420322',
                'name' => '郧西县',
                'parentId' => '420300',
                'level' => '3',
            ),
            252 => 
            array (
                'id' => 1753,
                'code' => '420323',
                'name' => '竹山县',
                'parentId' => '420300',
                'level' => '3',
            ),
            253 => 
            array (
                'id' => 1754,
                'code' => '420324',
                'name' => '竹溪县',
                'parentId' => '420300',
                'level' => '3',
            ),
            254 => 
            array (
                'id' => 1755,
                'code' => '420325',
                'name' => '房县',
                'parentId' => '420300',
                'level' => '3',
            ),
            255 => 
            array (
                'id' => 1756,
                'code' => '420381',
                'name' => '丹江口市',
                'parentId' => '420300',
                'level' => '3',
            ),
            256 => 
            array (
                'id' => 1757,
                'code' => '420500',
                'name' => '宜昌市',
                'parentId' => '420000',
                'level' => '2',
            ),
            257 => 
            array (
                'id' => 1758,
                'code' => '420502',
                'name' => '西陵区',
                'parentId' => '420500',
                'level' => '3',
            ),
            258 => 
            array (
                'id' => 1759,
                'code' => '420503',
                'name' => '伍家岗区',
                'parentId' => '420500',
                'level' => '3',
            ),
            259 => 
            array (
                'id' => 1760,
                'code' => '420504',
                'name' => '点军区',
                'parentId' => '420500',
                'level' => '3',
            ),
            260 => 
            array (
                'id' => 1761,
                'code' => '420505',
                'name' => '猇亭区',
                'parentId' => '420500',
                'level' => '3',
            ),
            261 => 
            array (
                'id' => 1762,
                'code' => '420506',
                'name' => '夷陵区',
                'parentId' => '420500',
                'level' => '3',
            ),
            262 => 
            array (
                'id' => 1763,
                'code' => '420525',
                'name' => '远安县',
                'parentId' => '420500',
                'level' => '3',
            ),
            263 => 
            array (
                'id' => 1764,
                'code' => '420526',
                'name' => '兴山县',
                'parentId' => '420500',
                'level' => '3',
            ),
            264 => 
            array (
                'id' => 1765,
                'code' => '420527',
                'name' => '秭归县',
                'parentId' => '420500',
                'level' => '3',
            ),
            265 => 
            array (
                'id' => 1766,
                'code' => '420528',
                'name' => '长阳土家族自治县',
                'parentId' => '420500',
                'level' => '3',
            ),
            266 => 
            array (
                'id' => 1767,
                'code' => '420529',
                'name' => '五峰土家族自治县',
                'parentId' => '420500',
                'level' => '3',
            ),
            267 => 
            array (
                'id' => 1768,
                'code' => '420581',
                'name' => '宜都市',
                'parentId' => '420500',
                'level' => '3',
            ),
            268 => 
            array (
                'id' => 1769,
                'code' => '420582',
                'name' => '当阳市',
                'parentId' => '420500',
                'level' => '3',
            ),
            269 => 
            array (
                'id' => 1770,
                'code' => '420583',
                'name' => '枝江市',
                'parentId' => '420500',
                'level' => '3',
            ),
            270 => 
            array (
                'id' => 1771,
                'code' => '420584',
                'name' => '宜昌新区',
                'parentId' => '420500',
                'level' => '3',
            ),
            271 => 
            array (
                'id' => 1772,
                'code' => '420600',
                'name' => '襄阳市',
                'parentId' => '420000',
                'level' => '2',
            ),
            272 => 
            array (
                'id' => 1773,
                'code' => '420602',
                'name' => '襄城区',
                'parentId' => '420600',
                'level' => '3',
            ),
            273 => 
            array (
                'id' => 1774,
                'code' => '420606',
                'name' => '樊城区',
                'parentId' => '420600',
                'level' => '3',
            ),
            274 => 
            array (
                'id' => 1775,
                'code' => '420607',
                'name' => '襄州区',
                'parentId' => '420600',
                'level' => '3',
            ),
            275 => 
            array (
                'id' => 1776,
                'code' => '420624',
                'name' => '南漳县',
                'parentId' => '420600',
                'level' => '3',
            ),
            276 => 
            array (
                'id' => 1777,
                'code' => '420625',
                'name' => '谷城县',
                'parentId' => '420600',
                'level' => '3',
            ),
            277 => 
            array (
                'id' => 1778,
                'code' => '420626',
                'name' => '保康县',
                'parentId' => '420600',
                'level' => '3',
            ),
            278 => 
            array (
                'id' => 1779,
                'code' => '420682',
                'name' => '老河口市',
                'parentId' => '420600',
                'level' => '3',
            ),
            279 => 
            array (
                'id' => 1780,
                'code' => '420683',
                'name' => '枣阳市',
                'parentId' => '420600',
                'level' => '3',
            ),
            280 => 
            array (
                'id' => 1781,
                'code' => '420684',
                'name' => '宜城市',
                'parentId' => '420600',
                'level' => '3',
            ),
            281 => 
            array (
                'id' => 1782,
                'code' => '420700',
                'name' => '鄂州市',
                'parentId' => '420000',
                'level' => '2',
            ),
            282 => 
            array (
                'id' => 1783,
                'code' => '420702',
                'name' => '梁子湖区',
                'parentId' => '420700',
                'level' => '3',
            ),
            283 => 
            array (
                'id' => 1784,
                'code' => '420703',
                'name' => '华容区',
                'parentId' => '420700',
                'level' => '3',
            ),
            284 => 
            array (
                'id' => 1785,
                'code' => '420704',
                'name' => '鄂城区',
                'parentId' => '420700',
                'level' => '3',
            ),
            285 => 
            array (
                'id' => 1786,
                'code' => '420800',
                'name' => '荆门市',
                'parentId' => '420000',
                'level' => '2',
            ),
            286 => 
            array (
                'id' => 1787,
                'code' => '420802',
                'name' => '东宝区',
                'parentId' => '420800',
                'level' => '3',
            ),
            287 => 
            array (
                'id' => 1788,
                'code' => '420804',
                'name' => '掇刀区',
                'parentId' => '420800',
                'level' => '3',
            ),
            288 => 
            array (
                'id' => 1789,
                'code' => '420821',
                'name' => '京山县',
                'parentId' => '420800',
                'level' => '3',
            ),
            289 => 
            array (
                'id' => 1790,
                'code' => '420822',
                'name' => '沙洋县',
                'parentId' => '420800',
                'level' => '3',
            ),
            290 => 
            array (
                'id' => 1791,
                'code' => '420881',
                'name' => '钟祥市',
                'parentId' => '420800',
                'level' => '3',
            ),
            291 => 
            array (
                'id' => 1792,
                'code' => '420900',
                'name' => '孝感市',
                'parentId' => '420000',
                'level' => '2',
            ),
            292 => 
            array (
                'id' => 1793,
                'code' => '420902',
                'name' => '孝南区',
                'parentId' => '420900',
                'level' => '3',
            ),
            293 => 
            array (
                'id' => 1794,
                'code' => '420921',
                'name' => '孝昌县',
                'parentId' => '420900',
                'level' => '3',
            ),
            294 => 
            array (
                'id' => 1795,
                'code' => '420922',
                'name' => '大悟县',
                'parentId' => '420900',
                'level' => '3',
            ),
            295 => 
            array (
                'id' => 1796,
                'code' => '420923',
                'name' => '云梦县',
                'parentId' => '420900',
                'level' => '3',
            ),
            296 => 
            array (
                'id' => 1797,
                'code' => '420981',
                'name' => '应城市',
                'parentId' => '420900',
                'level' => '3',
            ),
            297 => 
            array (
                'id' => 1798,
                'code' => '420982',
                'name' => '安陆市',
                'parentId' => '420900',
                'level' => '3',
            ),
            298 => 
            array (
                'id' => 1799,
                'code' => '420984',
                'name' => '汉川市',
                'parentId' => '420900',
                'level' => '3',
            ),
            299 => 
            array (
                'id' => 1800,
                'code' => '421000',
                'name' => '荆州市',
                'parentId' => '420000',
                'level' => '2',
            ),
            300 => 
            array (
                'id' => 1801,
                'code' => '421002',
                'name' => '沙市区',
                'parentId' => '421000',
                'level' => '3',
            ),
            301 => 
            array (
                'id' => 1802,
                'code' => '421003',
                'name' => '荆州区',
                'parentId' => '421000',
                'level' => '3',
            ),
            302 => 
            array (
                'id' => 1803,
                'code' => '421022',
                'name' => '公安县',
                'parentId' => '421000',
                'level' => '3',
            ),
            303 => 
            array (
                'id' => 1804,
                'code' => '421023',
                'name' => '监利县',
                'parentId' => '421000',
                'level' => '3',
            ),
            304 => 
            array (
                'id' => 1805,
                'code' => '421024',
                'name' => '江陵县',
                'parentId' => '421000',
                'level' => '3',
            ),
            305 => 
            array (
                'id' => 1806,
                'code' => '421081',
                'name' => '石首市',
                'parentId' => '421000',
                'level' => '3',
            ),
            306 => 
            array (
                'id' => 1807,
                'code' => '421083',
                'name' => '洪湖市',
                'parentId' => '421000',
                'level' => '3',
            ),
            307 => 
            array (
                'id' => 1808,
                'code' => '421087',
                'name' => '松滋市',
                'parentId' => '421000',
                'level' => '3',
            ),
            308 => 
            array (
                'id' => 1809,
                'code' => '421100',
                'name' => '黄冈市',
                'parentId' => '420000',
                'level' => '2',
            ),
            309 => 
            array (
                'id' => 1810,
                'code' => '421102',
                'name' => '黄州区',
                'parentId' => '421100',
                'level' => '3',
            ),
            310 => 
            array (
                'id' => 1811,
                'code' => '421121',
                'name' => '团风县',
                'parentId' => '421100',
                'level' => '3',
            ),
            311 => 
            array (
                'id' => 1812,
                'code' => '421122',
                'name' => '红安县',
                'parentId' => '421100',
                'level' => '3',
            ),
            312 => 
            array (
                'id' => 1813,
                'code' => '421123',
                'name' => '罗田县',
                'parentId' => '421100',
                'level' => '3',
            ),
            313 => 
            array (
                'id' => 1814,
                'code' => '421124',
                'name' => '英山县',
                'parentId' => '421100',
                'level' => '3',
            ),
            314 => 
            array (
                'id' => 1815,
                'code' => '421125',
                'name' => '浠水县',
                'parentId' => '421100',
                'level' => '3',
            ),
            315 => 
            array (
                'id' => 1816,
                'code' => '421126',
                'name' => '蕲春县',
                'parentId' => '421100',
                'level' => '3',
            ),
            316 => 
            array (
                'id' => 1817,
                'code' => '421127',
                'name' => '黄梅县',
                'parentId' => '421100',
                'level' => '3',
            ),
            317 => 
            array (
                'id' => 1818,
                'code' => '421181',
                'name' => '麻城市',
                'parentId' => '421100',
                'level' => '3',
            ),
            318 => 
            array (
                'id' => 1819,
                'code' => '421182',
                'name' => '武穴市',
                'parentId' => '421100',
                'level' => '3',
            ),
            319 => 
            array (
                'id' => 1820,
                'code' => '421200',
                'name' => '咸宁市',
                'parentId' => '420000',
                'level' => '2',
            ),
            320 => 
            array (
                'id' => 1821,
                'code' => '421202',
                'name' => '咸安区',
                'parentId' => '421200',
                'level' => '3',
            ),
            321 => 
            array (
                'id' => 1822,
                'code' => '421221',
                'name' => '嘉鱼县',
                'parentId' => '421200',
                'level' => '3',
            ),
            322 => 
            array (
                'id' => 1823,
                'code' => '421222',
                'name' => '通城县',
                'parentId' => '421200',
                'level' => '3',
            ),
            323 => 
            array (
                'id' => 1824,
                'code' => '421223',
                'name' => '崇阳县',
                'parentId' => '421200',
                'level' => '3',
            ),
            324 => 
            array (
                'id' => 1825,
                'code' => '421224',
                'name' => '通山县',
                'parentId' => '421200',
                'level' => '3',
            ),
            325 => 
            array (
                'id' => 1826,
                'code' => '421281',
                'name' => '赤壁市',
                'parentId' => '421200',
                'level' => '3',
            ),
            326 => 
            array (
                'id' => 1827,
                'code' => '421300',
                'name' => '随州市',
                'parentId' => '420000',
                'level' => '2',
            ),
            327 => 
            array (
                'id' => 1828,
                'code' => '421303',
                'name' => '曾都区',
                'parentId' => '421300',
                'level' => '3',
            ),
            328 => 
            array (
                'id' => 1829,
                'code' => '421321',
                'name' => '随县',
                'parentId' => '421300',
                'level' => '3',
            ),
            329 => 
            array (
                'id' => 1830,
                'code' => '421381',
                'name' => '广水市',
                'parentId' => '421300',
                'level' => '3',
            ),
            330 => 
            array (
                'id' => 1831,
                'code' => '422800',
                'name' => '恩施土家族苗族自治州',
                'parentId' => '420000',
                'level' => '2',
            ),
            331 => 
            array (
                'id' => 1832,
                'code' => '422801',
                'name' => '恩施市',
                'parentId' => '422800',
                'level' => '3',
            ),
            332 => 
            array (
                'id' => 1833,
                'code' => '422802',
                'name' => '利川市',
                'parentId' => '422800',
                'level' => '3',
            ),
            333 => 
            array (
                'id' => 1834,
                'code' => '422822',
                'name' => '建始县',
                'parentId' => '422800',
                'level' => '3',
            ),
            334 => 
            array (
                'id' => 1835,
                'code' => '422823',
                'name' => '巴东县',
                'parentId' => '422800',
                'level' => '3',
            ),
            335 => 
            array (
                'id' => 1836,
                'code' => '422825',
                'name' => '宣恩县',
                'parentId' => '422800',
                'level' => '3',
            ),
            336 => 
            array (
                'id' => 1837,
                'code' => '422826',
                'name' => '咸丰县',
                'parentId' => '422800',
                'level' => '3',
            ),
            337 => 
            array (
                'id' => 1838,
                'code' => '422827',
                'name' => '来凤县',
                'parentId' => '422800',
                'level' => '3',
            ),
            338 => 
            array (
                'id' => 1839,
                'code' => '422828',
                'name' => '鹤峰县',
                'parentId' => '422800',
                'level' => '3',
            ),
            339 => 
            array (
                'id' => 1840,
                'code' => '429000',
                'name' => '直辖县级',
                'parentId' => '420000',
                'level' => '2',
            ),
            340 => 
            array (
                'id' => 1841,
                'code' => '429004',
                'name' => '仙桃市',
                'parentId' => '429000',
                'level' => '3',
            ),
            341 => 
            array (
                'id' => 1842,
                'code' => '429005',
                'name' => '潜江市',
                'parentId' => '429000',
                'level' => '3',
            ),
            342 => 
            array (
                'id' => 1843,
                'code' => '429006',
                'name' => '天门市',
                'parentId' => '429000',
                'level' => '3',
            ),
            343 => 
            array (
                'id' => 1844,
                'code' => '429021',
                'name' => '神农架林区',
                'parentId' => '429000',
                'level' => '3',
            ),
            344 => 
            array (
                'id' => 1845,
                'code' => '430000',
                'name' => '湖南省',
                'parentId' => '100000',
                'level' => '1',
            ),
            345 => 
            array (
                'id' => 1846,
                'code' => '430100',
                'name' => '长沙市',
                'parentId' => '430000',
                'level' => '2',
            ),
            346 => 
            array (
                'id' => 1847,
                'code' => '430102',
                'name' => '芙蓉区',
                'parentId' => '430100',
                'level' => '3',
            ),
            347 => 
            array (
                'id' => 1848,
                'code' => '430103',
                'name' => '天心区',
                'parentId' => '430100',
                'level' => '3',
            ),
            348 => 
            array (
                'id' => 1849,
                'code' => '430104',
                'name' => '岳麓区',
                'parentId' => '430100',
                'level' => '3',
            ),
            349 => 
            array (
                'id' => 1850,
                'code' => '430105',
                'name' => '开福区',
                'parentId' => '430100',
                'level' => '3',
            ),
            350 => 
            array (
                'id' => 1851,
                'code' => '430111',
                'name' => '雨花区',
                'parentId' => '430100',
                'level' => '3',
            ),
            351 => 
            array (
                'id' => 1852,
                'code' => '430112',
                'name' => '望城区',
                'parentId' => '430100',
                'level' => '3',
            ),
            352 => 
            array (
                'id' => 1853,
                'code' => '430121',
                'name' => '长沙县',
                'parentId' => '430100',
                'level' => '3',
            ),
            353 => 
            array (
                'id' => 1854,
                'code' => '430124',
                'name' => '宁乡县',
                'parentId' => '430100',
                'level' => '3',
            ),
            354 => 
            array (
                'id' => 1855,
                'code' => '430181',
                'name' => '浏阳市',
                'parentId' => '430100',
                'level' => '3',
            ),
            355 => 
            array (
                'id' => 1856,
                'code' => '430182',
                'name' => '湘江新区',
                'parentId' => '430100',
                'level' => '3',
            ),
            356 => 
            array (
                'id' => 1857,
                'code' => '430200',
                'name' => '株洲市',
                'parentId' => '430000',
                'level' => '2',
            ),
            357 => 
            array (
                'id' => 1858,
                'code' => '430202',
                'name' => '荷塘区',
                'parentId' => '430200',
                'level' => '3',
            ),
            358 => 
            array (
                'id' => 1859,
                'code' => '430203',
                'name' => '芦淞区',
                'parentId' => '430200',
                'level' => '3',
            ),
            359 => 
            array (
                'id' => 1860,
                'code' => '430204',
                'name' => '石峰区',
                'parentId' => '430200',
                'level' => '3',
            ),
            360 => 
            array (
                'id' => 1861,
                'code' => '430211',
                'name' => '天元区',
                'parentId' => '430200',
                'level' => '3',
            ),
            361 => 
            array (
                'id' => 1862,
                'code' => '430221',
                'name' => '株洲县',
                'parentId' => '430200',
                'level' => '3',
            ),
            362 => 
            array (
                'id' => 1863,
                'code' => '430223',
                'name' => '攸县',
                'parentId' => '430200',
                'level' => '3',
            ),
            363 => 
            array (
                'id' => 1864,
                'code' => '430224',
                'name' => '茶陵县',
                'parentId' => '430200',
                'level' => '3',
            ),
            364 => 
            array (
                'id' => 1865,
                'code' => '430225',
                'name' => '炎陵县',
                'parentId' => '430200',
                'level' => '3',
            ),
            365 => 
            array (
                'id' => 1866,
                'code' => '430281',
                'name' => '醴陵市',
                'parentId' => '430200',
                'level' => '3',
            ),
            366 => 
            array (
                'id' => 1867,
                'code' => '430300',
                'name' => '湘潭市',
                'parentId' => '430000',
                'level' => '2',
            ),
            367 => 
            array (
                'id' => 1868,
                'code' => '430302',
                'name' => '雨湖区',
                'parentId' => '430300',
                'level' => '3',
            ),
            368 => 
            array (
                'id' => 1869,
                'code' => '430304',
                'name' => '岳塘区',
                'parentId' => '430300',
                'level' => '3',
            ),
            369 => 
            array (
                'id' => 1870,
                'code' => '430321',
                'name' => '湘潭县',
                'parentId' => '430300',
                'level' => '3',
            ),
            370 => 
            array (
                'id' => 1871,
                'code' => '430381',
                'name' => '湘乡市',
                'parentId' => '430300',
                'level' => '3',
            ),
            371 => 
            array (
                'id' => 1872,
                'code' => '430382',
                'name' => '韶山市',
                'parentId' => '430300',
                'level' => '3',
            ),
            372 => 
            array (
                'id' => 1873,
                'code' => '430400',
                'name' => '衡阳市',
                'parentId' => '430000',
                'level' => '2',
            ),
            373 => 
            array (
                'id' => 1874,
                'code' => '430405',
                'name' => '珠晖区',
                'parentId' => '430400',
                'level' => '3',
            ),
            374 => 
            array (
                'id' => 1875,
                'code' => '430406',
                'name' => '雁峰区',
                'parentId' => '430400',
                'level' => '3',
            ),
            375 => 
            array (
                'id' => 1876,
                'code' => '430407',
                'name' => '石鼓区',
                'parentId' => '430400',
                'level' => '3',
            ),
            376 => 
            array (
                'id' => 1877,
                'code' => '430408',
                'name' => '蒸湘区',
                'parentId' => '430400',
                'level' => '3',
            ),
            377 => 
            array (
                'id' => 1878,
                'code' => '430412',
                'name' => '南岳区',
                'parentId' => '430400',
                'level' => '3',
            ),
            378 => 
            array (
                'id' => 1879,
                'code' => '430421',
                'name' => '衡阳县',
                'parentId' => '430400',
                'level' => '3',
            ),
            379 => 
            array (
                'id' => 1880,
                'code' => '430422',
                'name' => '衡南县',
                'parentId' => '430400',
                'level' => '3',
            ),
            380 => 
            array (
                'id' => 1881,
                'code' => '430423',
                'name' => '衡山县',
                'parentId' => '430400',
                'level' => '3',
            ),
            381 => 
            array (
                'id' => 1882,
                'code' => '430424',
                'name' => '衡东县',
                'parentId' => '430400',
                'level' => '3',
            ),
            382 => 
            array (
                'id' => 1883,
                'code' => '430426',
                'name' => '祁东县',
                'parentId' => '430400',
                'level' => '3',
            ),
            383 => 
            array (
                'id' => 1884,
                'code' => '430481',
                'name' => '耒阳市',
                'parentId' => '430400',
                'level' => '3',
            ),
            384 => 
            array (
                'id' => 1885,
                'code' => '430482',
                'name' => '常宁市',
                'parentId' => '430400',
                'level' => '3',
            ),
            385 => 
            array (
                'id' => 1886,
                'code' => '430500',
                'name' => '邵阳市',
                'parentId' => '430000',
                'level' => '2',
            ),
            386 => 
            array (
                'id' => 1887,
                'code' => '430502',
                'name' => '双清区',
                'parentId' => '430500',
                'level' => '3',
            ),
            387 => 
            array (
                'id' => 1888,
                'code' => '430503',
                'name' => '大祥区',
                'parentId' => '430500',
                'level' => '3',
            ),
            388 => 
            array (
                'id' => 1889,
                'code' => '430511',
                'name' => '北塔区',
                'parentId' => '430500',
                'level' => '3',
            ),
            389 => 
            array (
                'id' => 1890,
                'code' => '430521',
                'name' => '邵东县',
                'parentId' => '430500',
                'level' => '3',
            ),
            390 => 
            array (
                'id' => 1891,
                'code' => '430522',
                'name' => '新邵县',
                'parentId' => '430500',
                'level' => '3',
            ),
            391 => 
            array (
                'id' => 1892,
                'code' => '430523',
                'name' => '邵阳县',
                'parentId' => '430500',
                'level' => '3',
            ),
            392 => 
            array (
                'id' => 1893,
                'code' => '430524',
                'name' => '隆回县',
                'parentId' => '430500',
                'level' => '3',
            ),
            393 => 
            array (
                'id' => 1894,
                'code' => '430525',
                'name' => '洞口县',
                'parentId' => '430500',
                'level' => '3',
            ),
            394 => 
            array (
                'id' => 1895,
                'code' => '430527',
                'name' => '绥宁县',
                'parentId' => '430500',
                'level' => '3',
            ),
            395 => 
            array (
                'id' => 1896,
                'code' => '430528',
                'name' => '新宁县',
                'parentId' => '430500',
                'level' => '3',
            ),
            396 => 
            array (
                'id' => 1897,
                'code' => '430529',
                'name' => '城步苗族自治县',
                'parentId' => '430500',
                'level' => '3',
            ),
            397 => 
            array (
                'id' => 1898,
                'code' => '430581',
                'name' => '武冈市',
                'parentId' => '430500',
                'level' => '3',
            ),
            398 => 
            array (
                'id' => 1899,
                'code' => '430600',
                'name' => '岳阳市',
                'parentId' => '430000',
                'level' => '2',
            ),
            399 => 
            array (
                'id' => 1900,
                'code' => '430602',
                'name' => '岳阳楼区',
                'parentId' => '430600',
                'level' => '3',
            ),
            400 => 
            array (
                'id' => 1901,
                'code' => '430603',
                'name' => '云溪区',
                'parentId' => '430600',
                'level' => '3',
            ),
            401 => 
            array (
                'id' => 1902,
                'code' => '430611',
                'name' => '君山区',
                'parentId' => '430600',
                'level' => '3',
            ),
            402 => 
            array (
                'id' => 1903,
                'code' => '430621',
                'name' => '岳阳县',
                'parentId' => '430600',
                'level' => '3',
            ),
            403 => 
            array (
                'id' => 1904,
                'code' => '430623',
                'name' => '华容县',
                'parentId' => '430600',
                'level' => '3',
            ),
            404 => 
            array (
                'id' => 1905,
                'code' => '430624',
                'name' => '湘阴县',
                'parentId' => '430600',
                'level' => '3',
            ),
            405 => 
            array (
                'id' => 1906,
                'code' => '430626',
                'name' => '平江县',
                'parentId' => '430600',
                'level' => '3',
            ),
            406 => 
            array (
                'id' => 1907,
                'code' => '430681',
                'name' => '汨罗市',
                'parentId' => '430600',
                'level' => '3',
            ),
            407 => 
            array (
                'id' => 1908,
                'code' => '430682',
                'name' => '临湘市',
                'parentId' => '430600',
                'level' => '3',
            ),
            408 => 
            array (
                'id' => 1909,
                'code' => '430700',
                'name' => '常德市',
                'parentId' => '430000',
                'level' => '2',
            ),
            409 => 
            array (
                'id' => 1910,
                'code' => '430702',
                'name' => '武陵区',
                'parentId' => '430700',
                'level' => '3',
            ),
            410 => 
            array (
                'id' => 1911,
                'code' => '430703',
                'name' => '鼎城区',
                'parentId' => '430700',
                'level' => '3',
            ),
            411 => 
            array (
                'id' => 1912,
                'code' => '430721',
                'name' => '安乡县',
                'parentId' => '430700',
                'level' => '3',
            ),
            412 => 
            array (
                'id' => 1913,
                'code' => '430722',
                'name' => '汉寿县',
                'parentId' => '430700',
                'level' => '3',
            ),
            413 => 
            array (
                'id' => 1914,
                'code' => '430723',
                'name' => '澧县',
                'parentId' => '430700',
                'level' => '3',
            ),
            414 => 
            array (
                'id' => 1915,
                'code' => '430724',
                'name' => '临澧县',
                'parentId' => '430700',
                'level' => '3',
            ),
            415 => 
            array (
                'id' => 1916,
                'code' => '430725',
                'name' => '桃源县',
                'parentId' => '430700',
                'level' => '3',
            ),
            416 => 
            array (
                'id' => 1917,
                'code' => '430726',
                'name' => '石门县',
                'parentId' => '430700',
                'level' => '3',
            ),
            417 => 
            array (
                'id' => 1918,
                'code' => '430781',
                'name' => '津市市',
                'parentId' => '430700',
                'level' => '3',
            ),
            418 => 
            array (
                'id' => 1919,
                'code' => '430800',
                'name' => '张家界市',
                'parentId' => '430000',
                'level' => '2',
            ),
            419 => 
            array (
                'id' => 1920,
                'code' => '430802',
                'name' => '永定区',
                'parentId' => '430800',
                'level' => '3',
            ),
            420 => 
            array (
                'id' => 1921,
                'code' => '430811',
                'name' => '武陵源区',
                'parentId' => '430800',
                'level' => '3',
            ),
            421 => 
            array (
                'id' => 1922,
                'code' => '430821',
                'name' => '慈利县',
                'parentId' => '430800',
                'level' => '3',
            ),
            422 => 
            array (
                'id' => 1923,
                'code' => '430822',
                'name' => '桑植县',
                'parentId' => '430800',
                'level' => '3',
            ),
            423 => 
            array (
                'id' => 1924,
                'code' => '430900',
                'name' => '益阳市',
                'parentId' => '430000',
                'level' => '2',
            ),
            424 => 
            array (
                'id' => 1925,
                'code' => '430902',
                'name' => '资阳区',
                'parentId' => '430900',
                'level' => '3',
            ),
            425 => 
            array (
                'id' => 1926,
                'code' => '430903',
                'name' => '赫山区',
                'parentId' => '430900',
                'level' => '3',
            ),
            426 => 
            array (
                'id' => 1927,
                'code' => '430921',
                'name' => '南县',
                'parentId' => '430900',
                'level' => '3',
            ),
            427 => 
            array (
                'id' => 1928,
                'code' => '430922',
                'name' => '桃江县',
                'parentId' => '430900',
                'level' => '3',
            ),
            428 => 
            array (
                'id' => 1929,
                'code' => '430923',
                'name' => '安化县',
                'parentId' => '430900',
                'level' => '3',
            ),
            429 => 
            array (
                'id' => 1930,
                'code' => '430981',
                'name' => '沅江市',
                'parentId' => '430900',
                'level' => '3',
            ),
            430 => 
            array (
                'id' => 1931,
                'code' => '431000',
                'name' => '郴州市',
                'parentId' => '430000',
                'level' => '2',
            ),
            431 => 
            array (
                'id' => 1932,
                'code' => '431002',
                'name' => '北湖区',
                'parentId' => '431000',
                'level' => '3',
            ),
            432 => 
            array (
                'id' => 1933,
                'code' => '431003',
                'name' => '苏仙区',
                'parentId' => '431000',
                'level' => '3',
            ),
            433 => 
            array (
                'id' => 1934,
                'code' => '431021',
                'name' => '桂阳县',
                'parentId' => '431000',
                'level' => '3',
            ),
            434 => 
            array (
                'id' => 1935,
                'code' => '431022',
                'name' => '宜章县',
                'parentId' => '431000',
                'level' => '3',
            ),
            435 => 
            array (
                'id' => 1936,
                'code' => '431023',
                'name' => '永兴县',
                'parentId' => '431000',
                'level' => '3',
            ),
            436 => 
            array (
                'id' => 1937,
                'code' => '431024',
                'name' => '嘉禾县',
                'parentId' => '431000',
                'level' => '3',
            ),
            437 => 
            array (
                'id' => 1938,
                'code' => '431025',
                'name' => '临武县',
                'parentId' => '431000',
                'level' => '3',
            ),
            438 => 
            array (
                'id' => 1939,
                'code' => '431026',
                'name' => '汝城县',
                'parentId' => '431000',
                'level' => '3',
            ),
            439 => 
            array (
                'id' => 1940,
                'code' => '431027',
                'name' => '桂东县',
                'parentId' => '431000',
                'level' => '3',
            ),
            440 => 
            array (
                'id' => 1941,
                'code' => '431028',
                'name' => '安仁县',
                'parentId' => '431000',
                'level' => '3',
            ),
            441 => 
            array (
                'id' => 1942,
                'code' => '431081',
                'name' => '资兴市',
                'parentId' => '431000',
                'level' => '3',
            ),
            442 => 
            array (
                'id' => 1943,
                'code' => '431100',
                'name' => '永州市',
                'parentId' => '430000',
                'level' => '2',
            ),
            443 => 
            array (
                'id' => 1944,
                'code' => '431102',
                'name' => '零陵区',
                'parentId' => '431100',
                'level' => '3',
            ),
            444 => 
            array (
                'id' => 1945,
                'code' => '431103',
                'name' => '冷水滩区',
                'parentId' => '431100',
                'level' => '3',
            ),
            445 => 
            array (
                'id' => 1946,
                'code' => '431121',
                'name' => '祁阳县',
                'parentId' => '431100',
                'level' => '3',
            ),
            446 => 
            array (
                'id' => 1947,
                'code' => '431122',
                'name' => '东安县',
                'parentId' => '431100',
                'level' => '3',
            ),
            447 => 
            array (
                'id' => 1948,
                'code' => '431123',
                'name' => '双牌县',
                'parentId' => '431100',
                'level' => '3',
            ),
            448 => 
            array (
                'id' => 1949,
                'code' => '431124',
                'name' => '道县',
                'parentId' => '431100',
                'level' => '3',
            ),
            449 => 
            array (
                'id' => 1950,
                'code' => '431125',
                'name' => '江永县',
                'parentId' => '431100',
                'level' => '3',
            ),
            450 => 
            array (
                'id' => 1951,
                'code' => '431126',
                'name' => '宁远县',
                'parentId' => '431100',
                'level' => '3',
            ),
            451 => 
            array (
                'id' => 1952,
                'code' => '431127',
                'name' => '蓝山县',
                'parentId' => '431100',
                'level' => '3',
            ),
            452 => 
            array (
                'id' => 1953,
                'code' => '431128',
                'name' => '新田县',
                'parentId' => '431100',
                'level' => '3',
            ),
            453 => 
            array (
                'id' => 1954,
                'code' => '431129',
                'name' => '江华瑶族自治县',
                'parentId' => '431100',
                'level' => '3',
            ),
            454 => 
            array (
                'id' => 1955,
                'code' => '431200',
                'name' => '怀化市',
                'parentId' => '430000',
                'level' => '2',
            ),
            455 => 
            array (
                'id' => 1956,
                'code' => '431202',
                'name' => '鹤城区',
                'parentId' => '431200',
                'level' => '3',
            ),
            456 => 
            array (
                'id' => 1957,
                'code' => '431221',
                'name' => '中方县',
                'parentId' => '431200',
                'level' => '3',
            ),
            457 => 
            array (
                'id' => 1958,
                'code' => '431222',
                'name' => '沅陵县',
                'parentId' => '431200',
                'level' => '3',
            ),
            458 => 
            array (
                'id' => 1959,
                'code' => '431223',
                'name' => '辰溪县',
                'parentId' => '431200',
                'level' => '3',
            ),
            459 => 
            array (
                'id' => 1960,
                'code' => '431224',
                'name' => '溆浦县',
                'parentId' => '431200',
                'level' => '3',
            ),
            460 => 
            array (
                'id' => 1961,
                'code' => '431225',
                'name' => '会同县',
                'parentId' => '431200',
                'level' => '3',
            ),
            461 => 
            array (
                'id' => 1962,
                'code' => '431226',
                'name' => '麻阳苗族自治县',
                'parentId' => '431200',
                'level' => '3',
            ),
            462 => 
            array (
                'id' => 1963,
                'code' => '431227',
                'name' => '新晃侗族自治县',
                'parentId' => '431200',
                'level' => '3',
            ),
            463 => 
            array (
                'id' => 1964,
                'code' => '431228',
                'name' => '芷江侗族自治县',
                'parentId' => '431200',
                'level' => '3',
            ),
            464 => 
            array (
                'id' => 1965,
                'code' => '431229',
                'name' => '靖州苗族侗族自治县',
                'parentId' => '431200',
                'level' => '3',
            ),
            465 => 
            array (
                'id' => 1966,
                'code' => '431230',
                'name' => '通道侗族自治县',
                'parentId' => '431200',
                'level' => '3',
            ),
            466 => 
            array (
                'id' => 1967,
                'code' => '431281',
                'name' => '洪江市',
                'parentId' => '431200',
                'level' => '3',
            ),
            467 => 
            array (
                'id' => 1968,
                'code' => '431300',
                'name' => '娄底市',
                'parentId' => '430000',
                'level' => '2',
            ),
            468 => 
            array (
                'id' => 1969,
                'code' => '431302',
                'name' => '娄星区',
                'parentId' => '431300',
                'level' => '3',
            ),
            469 => 
            array (
                'id' => 1970,
                'code' => '431321',
                'name' => '双峰县',
                'parentId' => '431300',
                'level' => '3',
            ),
            470 => 
            array (
                'id' => 1971,
                'code' => '431322',
                'name' => '新化县',
                'parentId' => '431300',
                'level' => '3',
            ),
            471 => 
            array (
                'id' => 1972,
                'code' => '431381',
                'name' => '冷水江市',
                'parentId' => '431300',
                'level' => '3',
            ),
            472 => 
            array (
                'id' => 1973,
                'code' => '431382',
                'name' => '涟源市',
                'parentId' => '431300',
                'level' => '3',
            ),
            473 => 
            array (
                'id' => 1974,
                'code' => '433100',
                'name' => '湘西土家族苗族自治州',
                'parentId' => '430000',
                'level' => '2',
            ),
            474 => 
            array (
                'id' => 1975,
                'code' => '433101',
                'name' => '吉首市',
                'parentId' => '433100',
                'level' => '3',
            ),
            475 => 
            array (
                'id' => 1976,
                'code' => '433122',
                'name' => '泸溪县',
                'parentId' => '433100',
                'level' => '3',
            ),
            476 => 
            array (
                'id' => 1977,
                'code' => '433123',
                'name' => '凤凰县',
                'parentId' => '433100',
                'level' => '3',
            ),
            477 => 
            array (
                'id' => 1978,
                'code' => '433124',
                'name' => '花垣县',
                'parentId' => '433100',
                'level' => '3',
            ),
            478 => 
            array (
                'id' => 1979,
                'code' => '433125',
                'name' => '保靖县',
                'parentId' => '433100',
                'level' => '3',
            ),
            479 => 
            array (
                'id' => 1980,
                'code' => '433126',
                'name' => '古丈县',
                'parentId' => '433100',
                'level' => '3',
            ),
            480 => 
            array (
                'id' => 1981,
                'code' => '433127',
                'name' => '永顺县',
                'parentId' => '433100',
                'level' => '3',
            ),
            481 => 
            array (
                'id' => 1982,
                'code' => '433130',
                'name' => '龙山县',
                'parentId' => '433100',
                'level' => '3',
            ),
            482 => 
            array (
                'id' => 1983,
                'code' => '440000',
                'name' => '广东省',
                'parentId' => '100000',
                'level' => '1',
            ),
            483 => 
            array (
                'id' => 1984,
                'code' => '440100',
                'name' => '广州市',
                'parentId' => '440000',
                'level' => '2',
            ),
            484 => 
            array (
                'id' => 1985,
                'code' => '440103',
                'name' => '荔湾区',
                'parentId' => '440100',
                'level' => '3',
            ),
            485 => 
            array (
                'id' => 1986,
                'code' => '440104',
                'name' => '越秀区',
                'parentId' => '440100',
                'level' => '3',
            ),
            486 => 
            array (
                'id' => 1987,
                'code' => '440105',
                'name' => '海珠区',
                'parentId' => '440100',
                'level' => '3',
            ),
            487 => 
            array (
                'id' => 1988,
                'code' => '440106',
                'name' => '天河区',
                'parentId' => '440100',
                'level' => '3',
            ),
            488 => 
            array (
                'id' => 1989,
                'code' => '440111',
                'name' => '白云区',
                'parentId' => '440100',
                'level' => '3',
            ),
            489 => 
            array (
                'id' => 1990,
                'code' => '440112',
                'name' => '黄埔区',
                'parentId' => '440100',
                'level' => '3',
            ),
            490 => 
            array (
                'id' => 1991,
                'code' => '440113',
                'name' => '番禺区',
                'parentId' => '440100',
                'level' => '3',
            ),
            491 => 
            array (
                'id' => 1992,
                'code' => '440114',
                'name' => '花都区',
                'parentId' => '440100',
                'level' => '3',
            ),
            492 => 
            array (
                'id' => 1993,
                'code' => '440115',
                'name' => '南沙新区',
                'parentId' => '440100',
                'level' => '3',
            ),
            493 => 
            array (
                'id' => 1994,
                'code' => '440117',
                'name' => '从化区',
                'parentId' => '440100',
                'level' => '3',
            ),
            494 => 
            array (
                'id' => 1995,
                'code' => '440118',
                'name' => '增城区',
                'parentId' => '440100',
                'level' => '3',
            ),
            495 => 
            array (
                'id' => 1996,
                'code' => '440200',
                'name' => '韶关市',
                'parentId' => '440000',
                'level' => '2',
            ),
            496 => 
            array (
                'id' => 1997,
                'code' => '440203',
                'name' => '武江区',
                'parentId' => '440200',
                'level' => '3',
            ),
            497 => 
            array (
                'id' => 1998,
                'code' => '440204',
                'name' => '浈江区',
                'parentId' => '440200',
                'level' => '3',
            ),
            498 => 
            array (
                'id' => 1999,
                'code' => '440205',
                'name' => '曲江区',
                'parentId' => '440200',
                'level' => '3',
            ),
            499 => 
            array (
                'id' => 2000,
                'code' => '440222',
                'name' => '始兴县',
                'parentId' => '440200',
                'level' => '3',
            ),
        ));
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'code' => '440224',
                'name' => '仁化县',
                'parentId' => '440200',
                'level' => '3',
            ),
            1 => 
            array (
                'id' => 2002,
                'code' => '440229',
                'name' => '翁源县',
                'parentId' => '440200',
                'level' => '3',
            ),
            2 => 
            array (
                'id' => 2003,
                'code' => '440232',
                'name' => '乳源瑶族自治县',
                'parentId' => '440200',
                'level' => '3',
            ),
            3 => 
            array (
                'id' => 2004,
                'code' => '440233',
                'name' => '新丰县',
                'parentId' => '440200',
                'level' => '3',
            ),
            4 => 
            array (
                'id' => 2005,
                'code' => '440281',
                'name' => '乐昌市',
                'parentId' => '440200',
                'level' => '3',
            ),
            5 => 
            array (
                'id' => 2006,
                'code' => '440282',
                'name' => '南雄市',
                'parentId' => '440200',
                'level' => '3',
            ),
            6 => 
            array (
                'id' => 2007,
                'code' => '440300',
                'name' => '深圳市',
                'parentId' => '440000',
                'level' => '2',
            ),
            7 => 
            array (
                'id' => 2008,
                'code' => '440303',
                'name' => '罗湖区',
                'parentId' => '440300',
                'level' => '3',
            ),
            8 => 
            array (
                'id' => 2009,
                'code' => '440304',
                'name' => '福田区',
                'parentId' => '440300',
                'level' => '3',
            ),
            9 => 
            array (
                'id' => 2010,
                'code' => '440305',
                'name' => '南山区',
                'parentId' => '440300',
                'level' => '3',
            ),
            10 => 
            array (
                'id' => 2011,
                'code' => '440306',
                'name' => '宝安区',
                'parentId' => '440300',
                'level' => '3',
            ),
            11 => 
            array (
                'id' => 2012,
                'code' => '440307',
                'name' => '龙岗区',
                'parentId' => '440300',
                'level' => '3',
            ),
            12 => 
            array (
                'id' => 2013,
                'code' => '440308',
                'name' => '盐田区',
                'parentId' => '440300',
                'level' => '3',
            ),
            13 => 
            array (
                'id' => 2014,
                'code' => '440309',
                'name' => '光明新区',
                'parentId' => '440300',
                'level' => '3',
            ),
            14 => 
            array (
                'id' => 2015,
                'code' => '440310',
                'name' => '坪山新区',
                'parentId' => '440300',
                'level' => '3',
            ),
            15 => 
            array (
                'id' => 2016,
                'code' => '440311',
                'name' => '大鹏新区',
                'parentId' => '440300',
                'level' => '3',
            ),
            16 => 
            array (
                'id' => 2017,
                'code' => '440312',
                'name' => '龙华新区',
                'parentId' => '440300',
                'level' => '3',
            ),
            17 => 
            array (
                'id' => 2018,
                'code' => '440400',
                'name' => '珠海市',
                'parentId' => '440000',
                'level' => '2',
            ),
            18 => 
            array (
                'id' => 2019,
                'code' => '440402',
                'name' => '香洲区',
                'parentId' => '440400',
                'level' => '3',
            ),
            19 => 
            array (
                'id' => 2020,
                'code' => '440403',
                'name' => '斗门区',
                'parentId' => '440400',
                'level' => '3',
            ),
            20 => 
            array (
                'id' => 2021,
                'code' => '440404',
                'name' => '金湾区',
                'parentId' => '440400',
                'level' => '3',
            ),
            21 => 
            array (
                'id' => 2022,
                'code' => '440405',
                'name' => '横琴新区',
                'parentId' => '440400',
                'level' => '3',
            ),
            22 => 
            array (
                'id' => 2023,
                'code' => '440500',
                'name' => '汕头市',
                'parentId' => '440000',
                'level' => '2',
            ),
            23 => 
            array (
                'id' => 2024,
                'code' => '440507',
                'name' => '龙湖区',
                'parentId' => '440500',
                'level' => '3',
            ),
            24 => 
            array (
                'id' => 2025,
                'code' => '440511',
                'name' => '金平区',
                'parentId' => '440500',
                'level' => '3',
            ),
            25 => 
            array (
                'id' => 2026,
                'code' => '440512',
                'name' => '濠江区',
                'parentId' => '440500',
                'level' => '3',
            ),
            26 => 
            array (
                'id' => 2027,
                'code' => '440513',
                'name' => '潮阳区',
                'parentId' => '440500',
                'level' => '3',
            ),
            27 => 
            array (
                'id' => 2028,
                'code' => '440514',
                'name' => '潮南区',
                'parentId' => '440500',
                'level' => '3',
            ),
            28 => 
            array (
                'id' => 2029,
                'code' => '440515',
                'name' => '澄海区',
                'parentId' => '440500',
                'level' => '3',
            ),
            29 => 
            array (
                'id' => 2030,
                'code' => '440523',
                'name' => '南澳县',
                'parentId' => '440500',
                'level' => '3',
            ),
            30 => 
            array (
                'id' => 2031,
                'code' => '440600',
                'name' => '佛山市',
                'parentId' => '440000',
                'level' => '2',
            ),
            31 => 
            array (
                'id' => 2032,
                'code' => '440604',
                'name' => '禅城区',
                'parentId' => '440600',
                'level' => '3',
            ),
            32 => 
            array (
                'id' => 2033,
                'code' => '440605',
                'name' => '南海区',
                'parentId' => '440600',
                'level' => '3',
            ),
            33 => 
            array (
                'id' => 2034,
                'code' => '440606',
                'name' => '顺德区',
                'parentId' => '440600',
                'level' => '3',
            ),
            34 => 
            array (
                'id' => 2035,
                'code' => '440607',
                'name' => '三水区',
                'parentId' => '440600',
                'level' => '3',
            ),
            35 => 
            array (
                'id' => 2036,
                'code' => '440608',
                'name' => '高明区',
                'parentId' => '440600',
                'level' => '3',
            ),
            36 => 
            array (
                'id' => 2037,
                'code' => '440700',
                'name' => '江门市',
                'parentId' => '440000',
                'level' => '2',
            ),
            37 => 
            array (
                'id' => 2038,
                'code' => '440703',
                'name' => '蓬江区',
                'parentId' => '440700',
                'level' => '3',
            ),
            38 => 
            array (
                'id' => 2039,
                'code' => '440704',
                'name' => '江海区',
                'parentId' => '440700',
                'level' => '3',
            ),
            39 => 
            array (
                'id' => 2040,
                'code' => '440705',
                'name' => '新会区',
                'parentId' => '440700',
                'level' => '3',
            ),
            40 => 
            array (
                'id' => 2041,
                'code' => '440781',
                'name' => '台山市',
                'parentId' => '440700',
                'level' => '3',
            ),
            41 => 
            array (
                'id' => 2042,
                'code' => '440783',
                'name' => '开平市',
                'parentId' => '440700',
                'level' => '3',
            ),
            42 => 
            array (
                'id' => 2043,
                'code' => '440784',
                'name' => '鹤山市',
                'parentId' => '440700',
                'level' => '3',
            ),
            43 => 
            array (
                'id' => 2044,
                'code' => '440785',
                'name' => '恩平市',
                'parentId' => '440700',
                'level' => '3',
            ),
            44 => 
            array (
                'id' => 2045,
                'code' => '440800',
                'name' => '湛江市',
                'parentId' => '440000',
                'level' => '2',
            ),
            45 => 
            array (
                'id' => 2046,
                'code' => '440802',
                'name' => '赤坎区',
                'parentId' => '440800',
                'level' => '3',
            ),
            46 => 
            array (
                'id' => 2047,
                'code' => '440803',
                'name' => '霞山区',
                'parentId' => '440800',
                'level' => '3',
            ),
            47 => 
            array (
                'id' => 2048,
                'code' => '440804',
                'name' => '坡头区',
                'parentId' => '440800',
                'level' => '3',
            ),
            48 => 
            array (
                'id' => 2049,
                'code' => '440811',
                'name' => '麻章区',
                'parentId' => '440800',
                'level' => '3',
            ),
            49 => 
            array (
                'id' => 2050,
                'code' => '440823',
                'name' => '遂溪县',
                'parentId' => '440800',
                'level' => '3',
            ),
            50 => 
            array (
                'id' => 2051,
                'code' => '440825',
                'name' => '徐闻县',
                'parentId' => '440800',
                'level' => '3',
            ),
            51 => 
            array (
                'id' => 2052,
                'code' => '440881',
                'name' => '廉江市',
                'parentId' => '440800',
                'level' => '3',
            ),
            52 => 
            array (
                'id' => 2053,
                'code' => '440882',
                'name' => '雷州市',
                'parentId' => '440800',
                'level' => '3',
            ),
            53 => 
            array (
                'id' => 2054,
                'code' => '440883',
                'name' => '吴川市',
                'parentId' => '440800',
                'level' => '3',
            ),
            54 => 
            array (
                'id' => 2055,
                'code' => '440900',
                'name' => '茂名市',
                'parentId' => '440000',
                'level' => '2',
            ),
            55 => 
            array (
                'id' => 2056,
                'code' => '440902',
                'name' => '茂南区',
                'parentId' => '440900',
                'level' => '3',
            ),
            56 => 
            array (
                'id' => 2057,
                'code' => '440904',
                'name' => '电白区',
                'parentId' => '440900',
                'level' => '3',
            ),
            57 => 
            array (
                'id' => 2058,
                'code' => '440981',
                'name' => '高州市',
                'parentId' => '440900',
                'level' => '3',
            ),
            58 => 
            array (
                'id' => 2059,
                'code' => '440982',
                'name' => '化州市',
                'parentId' => '440900',
                'level' => '3',
            ),
            59 => 
            array (
                'id' => 2060,
                'code' => '440983',
                'name' => '信宜市',
                'parentId' => '440900',
                'level' => '3',
            ),
            60 => 
            array (
                'id' => 2061,
                'code' => '441200',
                'name' => '肇庆市',
                'parentId' => '440000',
                'level' => '2',
            ),
            61 => 
            array (
                'id' => 2062,
                'code' => '441202',
                'name' => '端州区',
                'parentId' => '441200',
                'level' => '3',
            ),
            62 => 
            array (
                'id' => 2063,
                'code' => '441203',
                'name' => '鼎湖区',
                'parentId' => '441200',
                'level' => '3',
            ),
            63 => 
            array (
                'id' => 2064,
                'code' => '441204',
                'name' => '高要区',
                'parentId' => '441200',
                'level' => '3',
            ),
            64 => 
            array (
                'id' => 2065,
                'code' => '441223',
                'name' => '广宁县',
                'parentId' => '441200',
                'level' => '3',
            ),
            65 => 
            array (
                'id' => 2066,
                'code' => '441224',
                'name' => '怀集县',
                'parentId' => '441200',
                'level' => '3',
            ),
            66 => 
            array (
                'id' => 2067,
                'code' => '441225',
                'name' => '封开县',
                'parentId' => '441200',
                'level' => '3',
            ),
            67 => 
            array (
                'id' => 2068,
                'code' => '441226',
                'name' => '德庆县',
                'parentId' => '441200',
                'level' => '3',
            ),
            68 => 
            array (
                'id' => 2069,
                'code' => '441284',
                'name' => '四会市',
                'parentId' => '441200',
                'level' => '3',
            ),
            69 => 
            array (
                'id' => 2070,
                'code' => '441300',
                'name' => '惠州市',
                'parentId' => '440000',
                'level' => '2',
            ),
            70 => 
            array (
                'id' => 2071,
                'code' => '441302',
                'name' => '惠城区',
                'parentId' => '441300',
                'level' => '3',
            ),
            71 => 
            array (
                'id' => 2072,
                'code' => '441303',
                'name' => '惠阳区',
                'parentId' => '441300',
                'level' => '3',
            ),
            72 => 
            array (
                'id' => 2073,
                'code' => '441322',
                'name' => '博罗县',
                'parentId' => '441300',
                'level' => '3',
            ),
            73 => 
            array (
                'id' => 2074,
                'code' => '441323',
                'name' => '惠东县',
                'parentId' => '441300',
                'level' => '3',
            ),
            74 => 
            array (
                'id' => 2075,
                'code' => '441324',
                'name' => '龙门县',
                'parentId' => '441300',
                'level' => '3',
            ),
            75 => 
            array (
                'id' => 2076,
                'code' => '441400',
                'name' => '梅州市',
                'parentId' => '440000',
                'level' => '2',
            ),
            76 => 
            array (
                'id' => 2077,
                'code' => '441402',
                'name' => '梅江区',
                'parentId' => '441400',
                'level' => '3',
            ),
            77 => 
            array (
                'id' => 2078,
                'code' => '441403',
                'name' => '梅县区',
                'parentId' => '441400',
                'level' => '3',
            ),
            78 => 
            array (
                'id' => 2079,
                'code' => '441422',
                'name' => '大埔县',
                'parentId' => '441400',
                'level' => '3',
            ),
            79 => 
            array (
                'id' => 2080,
                'code' => '441423',
                'name' => '丰顺县',
                'parentId' => '441400',
                'level' => '3',
            ),
            80 => 
            array (
                'id' => 2081,
                'code' => '441424',
                'name' => '五华县',
                'parentId' => '441400',
                'level' => '3',
            ),
            81 => 
            array (
                'id' => 2082,
                'code' => '441426',
                'name' => '平远县',
                'parentId' => '441400',
                'level' => '3',
            ),
            82 => 
            array (
                'id' => 2083,
                'code' => '441427',
                'name' => '蕉岭县',
                'parentId' => '441400',
                'level' => '3',
            ),
            83 => 
            array (
                'id' => 2084,
                'code' => '441481',
                'name' => '兴宁市',
                'parentId' => '441400',
                'level' => '3',
            ),
            84 => 
            array (
                'id' => 2085,
                'code' => '441500',
                'name' => '汕尾市',
                'parentId' => '440000',
                'level' => '2',
            ),
            85 => 
            array (
                'id' => 2086,
                'code' => '441502',
                'name' => '城区',
                'parentId' => '441500',
                'level' => '3',
            ),
            86 => 
            array (
                'id' => 2087,
                'code' => '441521',
                'name' => '海丰县',
                'parentId' => '441500',
                'level' => '3',
            ),
            87 => 
            array (
                'id' => 2088,
                'code' => '441523',
                'name' => '陆河县',
                'parentId' => '441500',
                'level' => '3',
            ),
            88 => 
            array (
                'id' => 2089,
                'code' => '441581',
                'name' => '陆丰市',
                'parentId' => '441500',
                'level' => '3',
            ),
            89 => 
            array (
                'id' => 2090,
                'code' => '441600',
                'name' => '河源市',
                'parentId' => '440000',
                'level' => '2',
            ),
            90 => 
            array (
                'id' => 2091,
                'code' => '441602',
                'name' => '源城区',
                'parentId' => '441600',
                'level' => '3',
            ),
            91 => 
            array (
                'id' => 2092,
                'code' => '441621',
                'name' => '紫金县',
                'parentId' => '441600',
                'level' => '3',
            ),
            92 => 
            array (
                'id' => 2093,
                'code' => '441622',
                'name' => '龙川县',
                'parentId' => '441600',
                'level' => '3',
            ),
            93 => 
            array (
                'id' => 2094,
                'code' => '441623',
                'name' => '连平县',
                'parentId' => '441600',
                'level' => '3',
            ),
            94 => 
            array (
                'id' => 2095,
                'code' => '441624',
                'name' => '和平县',
                'parentId' => '441600',
                'level' => '3',
            ),
            95 => 
            array (
                'id' => 2096,
                'code' => '441625',
                'name' => '东源县',
                'parentId' => '441600',
                'level' => '3',
            ),
            96 => 
            array (
                'id' => 2097,
                'code' => '441700',
                'name' => '阳江市',
                'parentId' => '440000',
                'level' => '2',
            ),
            97 => 
            array (
                'id' => 2098,
                'code' => '441702',
                'name' => '江城区',
                'parentId' => '441700',
                'level' => '3',
            ),
            98 => 
            array (
                'id' => 2099,
                'code' => '441704',
                'name' => '阳东区',
                'parentId' => '441700',
                'level' => '3',
            ),
            99 => 
            array (
                'id' => 2100,
                'code' => '441721',
                'name' => '阳西县',
                'parentId' => '441700',
                'level' => '3',
            ),
            100 => 
            array (
                'id' => 2101,
                'code' => '441781',
                'name' => '阳春市',
                'parentId' => '441700',
                'level' => '3',
            ),
            101 => 
            array (
                'id' => 2102,
                'code' => '441800',
                'name' => '清远市',
                'parentId' => '440000',
                'level' => '2',
            ),
            102 => 
            array (
                'id' => 2103,
                'code' => '441802',
                'name' => '清城区',
                'parentId' => '441800',
                'level' => '3',
            ),
            103 => 
            array (
                'id' => 2104,
                'code' => '441803',
                'name' => '清新区',
                'parentId' => '441800',
                'level' => '3',
            ),
            104 => 
            array (
                'id' => 2105,
                'code' => '441821',
                'name' => '佛冈县',
                'parentId' => '441800',
                'level' => '3',
            ),
            105 => 
            array (
                'id' => 2106,
                'code' => '441823',
                'name' => '阳山县',
                'parentId' => '441800',
                'level' => '3',
            ),
            106 => 
            array (
                'id' => 2107,
                'code' => '441825',
                'name' => '连山壮族瑶族自治县',
                'parentId' => '441800',
                'level' => '3',
            ),
            107 => 
            array (
                'id' => 2108,
                'code' => '441826',
                'name' => '连南瑶族自治县',
                'parentId' => '441800',
                'level' => '3',
            ),
            108 => 
            array (
                'id' => 2109,
                'code' => '441881',
                'name' => '英德市',
                'parentId' => '441800',
                'level' => '3',
            ),
            109 => 
            array (
                'id' => 2110,
                'code' => '441882',
                'name' => '连州市',
                'parentId' => '441800',
                'level' => '3',
            ),
            110 => 
            array (
                'id' => 2111,
                'code' => '441900',
                'name' => '东莞市',
                'parentId' => '440000',
                'level' => '2',
            ),
            111 => 
            array (
                'id' => 2112,
                'code' => '441901',
                'name' => '莞城区',
                'parentId' => '441900',
                'level' => '3',
            ),
            112 => 
            array (
                'id' => 2113,
                'code' => '441902',
                'name' => '南城区',
                'parentId' => '441900',
                'level' => '3',
            ),
            113 => 
            array (
                'id' => 2114,
                'code' => '441903',
                'name' => '东城区',
                'parentId' => '441900',
                'level' => '3',
            ),
            114 => 
            array (
                'id' => 2115,
                'code' => '441904',
                'name' => '万江区',
                'parentId' => '441900',
                'level' => '3',
            ),
            115 => 
            array (
                'id' => 2116,
                'code' => '441905',
                'name' => '石碣镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            116 => 
            array (
                'id' => 2117,
                'code' => '441906',
                'name' => '石龙镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            117 => 
            array (
                'id' => 2118,
                'code' => '441907',
                'name' => '茶山镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            118 => 
            array (
                'id' => 2119,
                'code' => '441908',
                'name' => '石排镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            119 => 
            array (
                'id' => 2120,
                'code' => '441909',
                'name' => '企石镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            120 => 
            array (
                'id' => 2121,
                'code' => '441910',
                'name' => '横沥镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            121 => 
            array (
                'id' => 2122,
                'code' => '441911',
                'name' => '桥头镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            122 => 
            array (
                'id' => 2123,
                'code' => '441912',
                'name' => '谢岗镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            123 => 
            array (
                'id' => 2124,
                'code' => '441913',
                'name' => '东坑镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            124 => 
            array (
                'id' => 2125,
                'code' => '441914',
                'name' => '常平镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            125 => 
            array (
                'id' => 2126,
                'code' => '441915',
                'name' => '寮步镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            126 => 
            array (
                'id' => 2127,
                'code' => '441916',
                'name' => '大朗镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            127 => 
            array (
                'id' => 2128,
                'code' => '441917',
                'name' => '麻涌镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            128 => 
            array (
                'id' => 2129,
                'code' => '441918',
                'name' => '中堂镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            129 => 
            array (
                'id' => 2130,
                'code' => '441919',
                'name' => '高埗镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            130 => 
            array (
                'id' => 2131,
                'code' => '441920',
                'name' => '樟木头镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            131 => 
            array (
                'id' => 2132,
                'code' => '441921',
                'name' => '大岭山镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            132 => 
            array (
                'id' => 2133,
                'code' => '441922',
                'name' => '望牛墩镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            133 => 
            array (
                'id' => 2134,
                'code' => '441923',
                'name' => '黄江镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            134 => 
            array (
                'id' => 2135,
                'code' => '441924',
                'name' => '洪梅镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            135 => 
            array (
                'id' => 2136,
                'code' => '441925',
                'name' => '清溪镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            136 => 
            array (
                'id' => 2137,
                'code' => '441926',
                'name' => '沙田镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            137 => 
            array (
                'id' => 2138,
                'code' => '441927',
                'name' => '道滘镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            138 => 
            array (
                'id' => 2139,
                'code' => '441928',
                'name' => '塘厦镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            139 => 
            array (
                'id' => 2140,
                'code' => '441929',
                'name' => '虎门镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            140 => 
            array (
                'id' => 2141,
                'code' => '441930',
                'name' => '厚街镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            141 => 
            array (
                'id' => 2142,
                'code' => '441931',
                'name' => '凤岗镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            142 => 
            array (
                'id' => 2143,
                'code' => '441932',
                'name' => '长安镇',
                'parentId' => '441900',
                'level' => '3',
            ),
            143 => 
            array (
                'id' => 2144,
                'code' => '442000',
                'name' => '中山市',
                'parentId' => '440000',
                'level' => '2',
            ),
            144 => 
            array (
                'id' => 2145,
                'code' => '442001',
                'name' => '石岐区',
                'parentId' => '442000',
                'level' => '3',
            ),
            145 => 
            array (
                'id' => 2146,
                'code' => '442002',
                'name' => '东区',
                'parentId' => '442000',
                'level' => '3',
            ),
            146 => 
            array (
                'id' => 2147,
                'code' => '442003',
                'name' => '西区',
                'parentId' => '442000',
                'level' => '3',
            ),
            147 => 
            array (
                'id' => 2148,
                'code' => '442004',
                'name' => '南区',
                'parentId' => '442000',
                'level' => '3',
            ),
            148 => 
            array (
                'id' => 2149,
                'code' => '442005',
                'name' => '五桂山区',
                'parentId' => '442000',
                'level' => '3',
            ),
            149 => 
            array (
                'id' => 2150,
                'code' => '442006',
                'name' => '火炬开发区',
                'parentId' => '442000',
                'level' => '3',
            ),
            150 => 
            array (
                'id' => 2151,
                'code' => '442007',
                'name' => '黄圃镇',
                'parentId' => '442000',
                'level' => '3',
            ),
            151 => 
            array (
                'id' => 2152,
                'code' => '442008',
                'name' => '南头镇',
                'parentId' => '442000',
                'level' => '3',
            ),
            152 => 
            array (
                'id' => 2153,
                'code' => '442009',
                'name' => '东凤镇',
                'parentId' => '442000',
                'level' => '3',
            ),
            153 => 
            array (
                'id' => 2154,
                'code' => '442010',
                'name' => '阜沙镇',
                'parentId' => '442000',
                'level' => '3',
            ),
            154 => 
            array (
                'id' => 2155,
                'code' => '442011',
                'name' => '小榄镇',
                'parentId' => '442000',
                'level' => '3',
            ),
            155 => 
            array (
                'id' => 2156,
                'code' => '442012',
                'name' => '东升镇',
                'parentId' => '442000',
                'level' => '3',
            ),
            156 => 
            array (
                'id' => 2157,
                'code' => '442013',
                'name' => '古镇镇',
                'parentId' => '442000',
                'level' => '3',
            ),
            157 => 
            array (
                'id' => 2158,
                'code' => '442014',
                'name' => '横栏镇',
                'parentId' => '442000',
                'level' => '3',
            ),
            158 => 
            array (
                'id' => 2159,
                'code' => '442015',
                'name' => '三角镇',
                'parentId' => '442000',
                'level' => '3',
            ),
            159 => 
            array (
                'id' => 2160,
                'code' => '442016',
                'name' => '民众镇',
                'parentId' => '442000',
                'level' => '3',
            ),
            160 => 
            array (
                'id' => 2161,
                'code' => '442017',
                'name' => '南朗镇',
                'parentId' => '442000',
                'level' => '3',
            ),
            161 => 
            array (
                'id' => 2162,
                'code' => '442018',
                'name' => '港口镇',
                'parentId' => '442000',
                'level' => '3',
            ),
            162 => 
            array (
                'id' => 2163,
                'code' => '442019',
                'name' => '大涌镇',
                'parentId' => '442000',
                'level' => '3',
            ),
            163 => 
            array (
                'id' => 2164,
                'code' => '442020',
                'name' => '沙溪镇',
                'parentId' => '442000',
                'level' => '3',
            ),
            164 => 
            array (
                'id' => 2165,
                'code' => '442021',
                'name' => '三乡镇',
                'parentId' => '442000',
                'level' => '3',
            ),
            165 => 
            array (
                'id' => 2166,
                'code' => '442022',
                'name' => '板芙镇',
                'parentId' => '442000',
                'level' => '3',
            ),
            166 => 
            array (
                'id' => 2167,
                'code' => '442023',
                'name' => '神湾镇',
                'parentId' => '442000',
                'level' => '3',
            ),
            167 => 
            array (
                'id' => 2168,
                'code' => '442024',
                'name' => '坦洲镇',
                'parentId' => '442000',
                'level' => '3',
            ),
            168 => 
            array (
                'id' => 2169,
                'code' => '445100',
                'name' => '潮州市',
                'parentId' => '440000',
                'level' => '2',
            ),
            169 => 
            array (
                'id' => 2170,
                'code' => '445102',
                'name' => '湘桥区',
                'parentId' => '445100',
                'level' => '3',
            ),
            170 => 
            array (
                'id' => 2171,
                'code' => '445103',
                'name' => '潮安区',
                'parentId' => '445100',
                'level' => '3',
            ),
            171 => 
            array (
                'id' => 2172,
                'code' => '445122',
                'name' => '饶平县',
                'parentId' => '445100',
                'level' => '3',
            ),
            172 => 
            array (
                'id' => 2173,
                'code' => '445200',
                'name' => '揭阳市',
                'parentId' => '440000',
                'level' => '2',
            ),
            173 => 
            array (
                'id' => 2174,
                'code' => '445202',
                'name' => '榕城区',
                'parentId' => '445200',
                'level' => '3',
            ),
            174 => 
            array (
                'id' => 2175,
                'code' => '445203',
                'name' => '揭东区',
                'parentId' => '445200',
                'level' => '3',
            ),
            175 => 
            array (
                'id' => 2176,
                'code' => '445222',
                'name' => '揭西县',
                'parentId' => '445200',
                'level' => '3',
            ),
            176 => 
            array (
                'id' => 2177,
                'code' => '445224',
                'name' => '惠来县',
                'parentId' => '445200',
                'level' => '3',
            ),
            177 => 
            array (
                'id' => 2178,
                'code' => '445281',
                'name' => '普宁市',
                'parentId' => '445200',
                'level' => '3',
            ),
            178 => 
            array (
                'id' => 2179,
                'code' => '445300',
                'name' => '云浮市',
                'parentId' => '440000',
                'level' => '2',
            ),
            179 => 
            array (
                'id' => 2180,
                'code' => '445302',
                'name' => '云城区',
                'parentId' => '445300',
                'level' => '3',
            ),
            180 => 
            array (
                'id' => 2181,
                'code' => '445303',
                'name' => '云安区',
                'parentId' => '445300',
                'level' => '3',
            ),
            181 => 
            array (
                'id' => 2182,
                'code' => '445321',
                'name' => '新兴县',
                'parentId' => '445300',
                'level' => '3',
            ),
            182 => 
            array (
                'id' => 2183,
                'code' => '445322',
                'name' => '郁南县',
                'parentId' => '445300',
                'level' => '3',
            ),
            183 => 
            array (
                'id' => 2184,
                'code' => '445381',
                'name' => '罗定市',
                'parentId' => '445300',
                'level' => '3',
            ),
            184 => 
            array (
                'id' => 2185,
                'code' => '450000',
                'name' => '广西壮族自治区',
                'parentId' => '100000',
                'level' => '1',
            ),
            185 => 
            array (
                'id' => 2186,
                'code' => '450100',
                'name' => '南宁市',
                'parentId' => '450000',
                'level' => '2',
            ),
            186 => 
            array (
                'id' => 2187,
                'code' => '450102',
                'name' => '兴宁区',
                'parentId' => '450100',
                'level' => '3',
            ),
            187 => 
            array (
                'id' => 2188,
                'code' => '450103',
                'name' => '青秀区',
                'parentId' => '450100',
                'level' => '3',
            ),
            188 => 
            array (
                'id' => 2189,
                'code' => '450105',
                'name' => '江南区',
                'parentId' => '450100',
                'level' => '3',
            ),
            189 => 
            array (
                'id' => 2190,
                'code' => '450107',
                'name' => '西乡塘区',
                'parentId' => '450100',
                'level' => '3',
            ),
            190 => 
            array (
                'id' => 2191,
                'code' => '450108',
                'name' => '良庆区',
                'parentId' => '450100',
                'level' => '3',
            ),
            191 => 
            array (
                'id' => 2192,
                'code' => '450109',
                'name' => '邕宁区',
                'parentId' => '450100',
                'level' => '3',
            ),
            192 => 
            array (
                'id' => 2193,
                'code' => '450110',
                'name' => '武鸣区',
                'parentId' => '450100',
                'level' => '3',
            ),
            193 => 
            array (
                'id' => 2194,
                'code' => '450123',
                'name' => '隆安县',
                'parentId' => '450100',
                'level' => '3',
            ),
            194 => 
            array (
                'id' => 2195,
                'code' => '450124',
                'name' => '马山县',
                'parentId' => '450100',
                'level' => '3',
            ),
            195 => 
            array (
                'id' => 2196,
                'code' => '450125',
                'name' => '上林县',
                'parentId' => '450100',
                'level' => '3',
            ),
            196 => 
            array (
                'id' => 2197,
                'code' => '450126',
                'name' => '宾阳县',
                'parentId' => '450100',
                'level' => '3',
            ),
            197 => 
            array (
                'id' => 2198,
                'code' => '450127',
                'name' => '横县',
                'parentId' => '450100',
                'level' => '3',
            ),
            198 => 
            array (
                'id' => 2199,
                'code' => '450128',
                'name' => '埌东新区',
                'parentId' => '450100',
                'level' => '3',
            ),
            199 => 
            array (
                'id' => 2200,
                'code' => '450200',
                'name' => '柳州市',
                'parentId' => '450000',
                'level' => '2',
            ),
            200 => 
            array (
                'id' => 2201,
                'code' => '450202',
                'name' => '城中区',
                'parentId' => '450200',
                'level' => '3',
            ),
            201 => 
            array (
                'id' => 2202,
                'code' => '450203',
                'name' => '鱼峰区',
                'parentId' => '450200',
                'level' => '3',
            ),
            202 => 
            array (
                'id' => 2203,
                'code' => '450204',
                'name' => '柳南区',
                'parentId' => '450200',
                'level' => '3',
            ),
            203 => 
            array (
                'id' => 2204,
                'code' => '450205',
                'name' => '柳北区',
                'parentId' => '450200',
                'level' => '3',
            ),
            204 => 
            array (
                'id' => 2205,
                'code' => '450221',
                'name' => '柳江县',
                'parentId' => '450200',
                'level' => '3',
            ),
            205 => 
            array (
                'id' => 2206,
                'code' => '450222',
                'name' => '柳城县',
                'parentId' => '450200',
                'level' => '3',
            ),
            206 => 
            array (
                'id' => 2207,
                'code' => '450223',
                'name' => '鹿寨县',
                'parentId' => '450200',
                'level' => '3',
            ),
            207 => 
            array (
                'id' => 2208,
                'code' => '450224',
                'name' => '融安县',
                'parentId' => '450200',
                'level' => '3',
            ),
            208 => 
            array (
                'id' => 2209,
                'code' => '450225',
                'name' => '融水苗族自治县',
                'parentId' => '450200',
                'level' => '3',
            ),
            209 => 
            array (
                'id' => 2210,
                'code' => '450226',
                'name' => '三江侗族自治县',
                'parentId' => '450200',
                'level' => '3',
            ),
            210 => 
            array (
                'id' => 2211,
                'code' => '450227',
                'name' => '柳东新区',
                'parentId' => '450200',
                'level' => '3',
            ),
            211 => 
            array (
                'id' => 2212,
                'code' => '450300',
                'name' => '桂林市',
                'parentId' => '450000',
                'level' => '2',
            ),
            212 => 
            array (
                'id' => 2213,
                'code' => '450302',
                'name' => '秀峰区',
                'parentId' => '450300',
                'level' => '3',
            ),
            213 => 
            array (
                'id' => 2214,
                'code' => '450303',
                'name' => '叠彩区',
                'parentId' => '450300',
                'level' => '3',
            ),
            214 => 
            array (
                'id' => 2215,
                'code' => '450304',
                'name' => '象山区',
                'parentId' => '450300',
                'level' => '3',
            ),
            215 => 
            array (
                'id' => 2216,
                'code' => '450305',
                'name' => '七星区',
                'parentId' => '450300',
                'level' => '3',
            ),
            216 => 
            array (
                'id' => 2217,
                'code' => '450311',
                'name' => '雁山区',
                'parentId' => '450300',
                'level' => '3',
            ),
            217 => 
            array (
                'id' => 2218,
                'code' => '450312',
                'name' => '临桂区',
                'parentId' => '450300',
                'level' => '3',
            ),
            218 => 
            array (
                'id' => 2219,
                'code' => '450321',
                'name' => '阳朔县',
                'parentId' => '450300',
                'level' => '3',
            ),
            219 => 
            array (
                'id' => 2220,
                'code' => '450323',
                'name' => '灵川县',
                'parentId' => '450300',
                'level' => '3',
            ),
            220 => 
            array (
                'id' => 2221,
                'code' => '450324',
                'name' => '全州县',
                'parentId' => '450300',
                'level' => '3',
            ),
            221 => 
            array (
                'id' => 2222,
                'code' => '450325',
                'name' => '兴安县',
                'parentId' => '450300',
                'level' => '3',
            ),
            222 => 
            array (
                'id' => 2223,
                'code' => '450326',
                'name' => '永福县',
                'parentId' => '450300',
                'level' => '3',
            ),
            223 => 
            array (
                'id' => 2224,
                'code' => '450327',
                'name' => '灌阳县',
                'parentId' => '450300',
                'level' => '3',
            ),
            224 => 
            array (
                'id' => 2225,
                'code' => '450328',
                'name' => '龙胜各族自治县',
                'parentId' => '450300',
                'level' => '3',
            ),
            225 => 
            array (
                'id' => 2226,
                'code' => '450329',
                'name' => '资源县',
                'parentId' => '450300',
                'level' => '3',
            ),
            226 => 
            array (
                'id' => 2227,
                'code' => '450330',
                'name' => '平乐县',
                'parentId' => '450300',
                'level' => '3',
            ),
            227 => 
            array (
                'id' => 2228,
                'code' => '450331',
                'name' => '荔浦县',
                'parentId' => '450300',
                'level' => '3',
            ),
            228 => 
            array (
                'id' => 2229,
                'code' => '450332',
                'name' => '恭城瑶族自治县',
                'parentId' => '450300',
                'level' => '3',
            ),
            229 => 
            array (
                'id' => 2230,
                'code' => '450400',
                'name' => '梧州市',
                'parentId' => '450000',
                'level' => '2',
            ),
            230 => 
            array (
                'id' => 2231,
                'code' => '450403',
                'name' => '万秀区',
                'parentId' => '450400',
                'level' => '3',
            ),
            231 => 
            array (
                'id' => 2232,
                'code' => '450405',
                'name' => '长洲区',
                'parentId' => '450400',
                'level' => '3',
            ),
            232 => 
            array (
                'id' => 2233,
                'code' => '450406',
                'name' => '龙圩区',
                'parentId' => '450400',
                'level' => '3',
            ),
            233 => 
            array (
                'id' => 2234,
                'code' => '450421',
                'name' => '苍梧县',
                'parentId' => '450400',
                'level' => '3',
            ),
            234 => 
            array (
                'id' => 2235,
                'code' => '450422',
                'name' => '藤县',
                'parentId' => '450400',
                'level' => '3',
            ),
            235 => 
            array (
                'id' => 2236,
                'code' => '450423',
                'name' => '蒙山县',
                'parentId' => '450400',
                'level' => '3',
            ),
            236 => 
            array (
                'id' => 2237,
                'code' => '450481',
                'name' => '岑溪市',
                'parentId' => '450400',
                'level' => '3',
            ),
            237 => 
            array (
                'id' => 2238,
                'code' => '450500',
                'name' => '北海市',
                'parentId' => '450000',
                'level' => '2',
            ),
            238 => 
            array (
                'id' => 2239,
                'code' => '450502',
                'name' => '海城区',
                'parentId' => '450500',
                'level' => '3',
            ),
            239 => 
            array (
                'id' => 2240,
                'code' => '450503',
                'name' => '银海区',
                'parentId' => '450500',
                'level' => '3',
            ),
            240 => 
            array (
                'id' => 2241,
                'code' => '450512',
                'name' => '铁山港区',
                'parentId' => '450500',
                'level' => '3',
            ),
            241 => 
            array (
                'id' => 2242,
                'code' => '450521',
                'name' => '合浦县',
                'parentId' => '450500',
                'level' => '3',
            ),
            242 => 
            array (
                'id' => 2243,
                'code' => '450600',
                'name' => '防城港市',
                'parentId' => '450000',
                'level' => '2',
            ),
            243 => 
            array (
                'id' => 2244,
                'code' => '450602',
                'name' => '港口区',
                'parentId' => '450600',
                'level' => '3',
            ),
            244 => 
            array (
                'id' => 2245,
                'code' => '450603',
                'name' => '防城区',
                'parentId' => '450600',
                'level' => '3',
            ),
            245 => 
            array (
                'id' => 2246,
                'code' => '450621',
                'name' => '上思县',
                'parentId' => '450600',
                'level' => '3',
            ),
            246 => 
            array (
                'id' => 2247,
                'code' => '450681',
                'name' => '东兴市',
                'parentId' => '450600',
                'level' => '3',
            ),
            247 => 
            array (
                'id' => 2248,
                'code' => '450700',
                'name' => '钦州市',
                'parentId' => '450000',
                'level' => '2',
            ),
            248 => 
            array (
                'id' => 2249,
                'code' => '450702',
                'name' => '钦南区',
                'parentId' => '450700',
                'level' => '3',
            ),
            249 => 
            array (
                'id' => 2250,
                'code' => '450703',
                'name' => '钦北区',
                'parentId' => '450700',
                'level' => '3',
            ),
            250 => 
            array (
                'id' => 2251,
                'code' => '450721',
                'name' => '灵山县',
                'parentId' => '450700',
                'level' => '3',
            ),
            251 => 
            array (
                'id' => 2252,
                'code' => '450722',
                'name' => '浦北县',
                'parentId' => '450700',
                'level' => '3',
            ),
            252 => 
            array (
                'id' => 2253,
                'code' => '450800',
                'name' => '贵港市',
                'parentId' => '450000',
                'level' => '2',
            ),
            253 => 
            array (
                'id' => 2254,
                'code' => '450802',
                'name' => '港北区',
                'parentId' => '450800',
                'level' => '3',
            ),
            254 => 
            array (
                'id' => 2255,
                'code' => '450803',
                'name' => '港南区',
                'parentId' => '450800',
                'level' => '3',
            ),
            255 => 
            array (
                'id' => 2256,
                'code' => '450804',
                'name' => '覃塘区',
                'parentId' => '450800',
                'level' => '3',
            ),
            256 => 
            array (
                'id' => 2257,
                'code' => '450821',
                'name' => '平南县',
                'parentId' => '450800',
                'level' => '3',
            ),
            257 => 
            array (
                'id' => 2258,
                'code' => '450881',
                'name' => '桂平市',
                'parentId' => '450800',
                'level' => '3',
            ),
            258 => 
            array (
                'id' => 2259,
                'code' => '450900',
                'name' => '玉林市',
                'parentId' => '450000',
                'level' => '2',
            ),
            259 => 
            array (
                'id' => 2260,
                'code' => '450902',
                'name' => '玉州区',
                'parentId' => '450900',
                'level' => '3',
            ),
            260 => 
            array (
                'id' => 2261,
                'code' => '450903',
                'name' => '福绵区',
                'parentId' => '450900',
                'level' => '3',
            ),
            261 => 
            array (
                'id' => 2262,
                'code' => '450904',
                'name' => '玉东新区',
                'parentId' => '450900',
                'level' => '3',
            ),
            262 => 
            array (
                'id' => 2263,
                'code' => '450921',
                'name' => '容县',
                'parentId' => '450900',
                'level' => '3',
            ),
            263 => 
            array (
                'id' => 2264,
                'code' => '450922',
                'name' => '陆川县',
                'parentId' => '450900',
                'level' => '3',
            ),
            264 => 
            array (
                'id' => 2265,
                'code' => '450923',
                'name' => '博白县',
                'parentId' => '450900',
                'level' => '3',
            ),
            265 => 
            array (
                'id' => 2266,
                'code' => '450924',
                'name' => '兴业县',
                'parentId' => '450900',
                'level' => '3',
            ),
            266 => 
            array (
                'id' => 2267,
                'code' => '450981',
                'name' => '北流市',
                'parentId' => '450900',
                'level' => '3',
            ),
            267 => 
            array (
                'id' => 2268,
                'code' => '451000',
                'name' => '百色市',
                'parentId' => '450000',
                'level' => '2',
            ),
            268 => 
            array (
                'id' => 2269,
                'code' => '451002',
                'name' => '右江区',
                'parentId' => '451000',
                'level' => '3',
            ),
            269 => 
            array (
                'id' => 2270,
                'code' => '451021',
                'name' => '田阳县',
                'parentId' => '451000',
                'level' => '3',
            ),
            270 => 
            array (
                'id' => 2271,
                'code' => '451022',
                'name' => '田东县',
                'parentId' => '451000',
                'level' => '3',
            ),
            271 => 
            array (
                'id' => 2272,
                'code' => '451023',
                'name' => '平果县',
                'parentId' => '451000',
                'level' => '3',
            ),
            272 => 
            array (
                'id' => 2273,
                'code' => '451024',
                'name' => '德保县',
                'parentId' => '451000',
                'level' => '3',
            ),
            273 => 
            array (
                'id' => 2274,
                'code' => '451026',
                'name' => '那坡县',
                'parentId' => '451000',
                'level' => '3',
            ),
            274 => 
            array (
                'id' => 2275,
                'code' => '451027',
                'name' => '凌云县',
                'parentId' => '451000',
                'level' => '3',
            ),
            275 => 
            array (
                'id' => 2276,
                'code' => '451028',
                'name' => '乐业县',
                'parentId' => '451000',
                'level' => '3',
            ),
            276 => 
            array (
                'id' => 2277,
                'code' => '451029',
                'name' => '田林县',
                'parentId' => '451000',
                'level' => '3',
            ),
            277 => 
            array (
                'id' => 2278,
                'code' => '451030',
                'name' => '西林县',
                'parentId' => '451000',
                'level' => '3',
            ),
            278 => 
            array (
                'id' => 2279,
                'code' => '451031',
                'name' => '隆林各族自治县',
                'parentId' => '451000',
                'level' => '3',
            ),
            279 => 
            array (
                'id' => 2280,
                'code' => '451081',
                'name' => '靖西市',
                'parentId' => '451000',
                'level' => '3',
            ),
            280 => 
            array (
                'id' => 2281,
                'code' => '451100',
                'name' => '贺州市',
                'parentId' => '450000',
                'level' => '2',
            ),
            281 => 
            array (
                'id' => 2282,
                'code' => '451102',
                'name' => '八步区',
                'parentId' => '451100',
                'level' => '3',
            ),
            282 => 
            array (
                'id' => 2283,
                'code' => '451121',
                'name' => '昭平县',
                'parentId' => '451100',
                'level' => '3',
            ),
            283 => 
            array (
                'id' => 2284,
                'code' => '451122',
                'name' => '钟山县',
                'parentId' => '451100',
                'level' => '3',
            ),
            284 => 
            array (
                'id' => 2285,
                'code' => '451123',
                'name' => '富川瑶族自治县',
                'parentId' => '451100',
                'level' => '3',
            ),
            285 => 
            array (
                'id' => 2286,
                'code' => '451124',
                'name' => '平桂管理区',
                'parentId' => '451100',
                'level' => '3',
            ),
            286 => 
            array (
                'id' => 2287,
                'code' => '451200',
                'name' => '河池市',
                'parentId' => '450000',
                'level' => '2',
            ),
            287 => 
            array (
                'id' => 2288,
                'code' => '451202',
                'name' => '金城江区',
                'parentId' => '451200',
                'level' => '3',
            ),
            288 => 
            array (
                'id' => 2289,
                'code' => '451221',
                'name' => '南丹县',
                'parentId' => '451200',
                'level' => '3',
            ),
            289 => 
            array (
                'id' => 2290,
                'code' => '451222',
                'name' => '天峨县',
                'parentId' => '451200',
                'level' => '3',
            ),
            290 => 
            array (
                'id' => 2291,
                'code' => '451223',
                'name' => '凤山县',
                'parentId' => '451200',
                'level' => '3',
            ),
            291 => 
            array (
                'id' => 2292,
                'code' => '451224',
                'name' => '东兰县',
                'parentId' => '451200',
                'level' => '3',
            ),
            292 => 
            array (
                'id' => 2293,
                'code' => '451225',
                'name' => '罗城仫佬族自治县',
                'parentId' => '451200',
                'level' => '3',
            ),
            293 => 
            array (
                'id' => 2294,
                'code' => '451226',
                'name' => '环江毛南族自治县',
                'parentId' => '451200',
                'level' => '3',
            ),
            294 => 
            array (
                'id' => 2295,
                'code' => '451227',
                'name' => '巴马瑶族自治县',
                'parentId' => '451200',
                'level' => '3',
            ),
            295 => 
            array (
                'id' => 2296,
                'code' => '451228',
                'name' => '都安瑶族自治县',
                'parentId' => '451200',
                'level' => '3',
            ),
            296 => 
            array (
                'id' => 2297,
                'code' => '451229',
                'name' => '大化瑶族自治县',
                'parentId' => '451200',
                'level' => '3',
            ),
            297 => 
            array (
                'id' => 2298,
                'code' => '451281',
                'name' => '宜州市',
                'parentId' => '451200',
                'level' => '3',
            ),
            298 => 
            array (
                'id' => 2299,
                'code' => '451300',
                'name' => '来宾市',
                'parentId' => '450000',
                'level' => '2',
            ),
            299 => 
            array (
                'id' => 2300,
                'code' => '451302',
                'name' => '兴宾区',
                'parentId' => '451300',
                'level' => '3',
            ),
            300 => 
            array (
                'id' => 2301,
                'code' => '451321',
                'name' => '忻城县',
                'parentId' => '451300',
                'level' => '3',
            ),
            301 => 
            array (
                'id' => 2302,
                'code' => '451322',
                'name' => '象州县',
                'parentId' => '451300',
                'level' => '3',
            ),
            302 => 
            array (
                'id' => 2303,
                'code' => '451323',
                'name' => '武宣县',
                'parentId' => '451300',
                'level' => '3',
            ),
            303 => 
            array (
                'id' => 2304,
                'code' => '451324',
                'name' => '金秀瑶族自治县',
                'parentId' => '451300',
                'level' => '3',
            ),
            304 => 
            array (
                'id' => 2305,
                'code' => '451381',
                'name' => '合山市',
                'parentId' => '451300',
                'level' => '3',
            ),
            305 => 
            array (
                'id' => 2306,
                'code' => '451400',
                'name' => '崇左市',
                'parentId' => '450000',
                'level' => '2',
            ),
            306 => 
            array (
                'id' => 2307,
                'code' => '451402',
                'name' => '江州区',
                'parentId' => '451400',
                'level' => '3',
            ),
            307 => 
            array (
                'id' => 2308,
                'code' => '451421',
                'name' => '扶绥县',
                'parentId' => '451400',
                'level' => '3',
            ),
            308 => 
            array (
                'id' => 2309,
                'code' => '451422',
                'name' => '宁明县',
                'parentId' => '451400',
                'level' => '3',
            ),
            309 => 
            array (
                'id' => 2310,
                'code' => '451423',
                'name' => '龙州县',
                'parentId' => '451400',
                'level' => '3',
            ),
            310 => 
            array (
                'id' => 2311,
                'code' => '451424',
                'name' => '大新县',
                'parentId' => '451400',
                'level' => '3',
            ),
            311 => 
            array (
                'id' => 2312,
                'code' => '451425',
                'name' => '天等县',
                'parentId' => '451400',
                'level' => '3',
            ),
            312 => 
            array (
                'id' => 2313,
                'code' => '451481',
                'name' => '凭祥市',
                'parentId' => '451400',
                'level' => '3',
            ),
            313 => 
            array (
                'id' => 2314,
                'code' => '460000',
                'name' => '海南省',
                'parentId' => '100000',
                'level' => '1',
            ),
            314 => 
            array (
                'id' => 2315,
                'code' => '460100',
                'name' => '海口市',
                'parentId' => '460000',
                'level' => '2',
            ),
            315 => 
            array (
                'id' => 2316,
                'code' => '460105',
                'name' => '秀英区',
                'parentId' => '460100',
                'level' => '3',
            ),
            316 => 
            array (
                'id' => 2317,
                'code' => '460106',
                'name' => '龙华区',
                'parentId' => '460100',
                'level' => '3',
            ),
            317 => 
            array (
                'id' => 2318,
                'code' => '460107',
                'name' => '琼山区',
                'parentId' => '460100',
                'level' => '3',
            ),
            318 => 
            array (
                'id' => 2319,
                'code' => '460108',
                'name' => '美兰区',
                'parentId' => '460100',
                'level' => '3',
            ),
            319 => 
            array (
                'id' => 2320,
                'code' => '460200',
                'name' => '三亚市',
                'parentId' => '460000',
                'level' => '2',
            ),
            320 => 
            array (
                'id' => 2321,
                'code' => '460202',
                'name' => '海棠区',
                'parentId' => '460200',
                'level' => '3',
            ),
            321 => 
            array (
                'id' => 2322,
                'code' => '460203',
                'name' => '吉阳区',
                'parentId' => '460200',
                'level' => '3',
            ),
            322 => 
            array (
                'id' => 2323,
                'code' => '460204',
                'name' => '天涯区',
                'parentId' => '460200',
                'level' => '3',
            ),
            323 => 
            array (
                'id' => 2324,
                'code' => '460205',
                'name' => '崖州区',
                'parentId' => '460200',
                'level' => '3',
            ),
            324 => 
            array (
                'id' => 2325,
                'code' => '460300',
                'name' => '三沙市',
                'parentId' => '460000',
                'level' => '2',
            ),
            325 => 
            array (
                'id' => 2326,
                'code' => '460321',
                'name' => '西沙群岛',
                'parentId' => '460300',
                'level' => '3',
            ),
            326 => 
            array (
                'id' => 2327,
                'code' => '460322',
                'name' => '南沙群岛',
                'parentId' => '460300',
                'level' => '3',
            ),
            327 => 
            array (
                'id' => 2328,
                'code' => '460323',
                'name' => '中沙群岛',
                'parentId' => '460300',
                'level' => '3',
            ),
            328 => 
            array (
                'id' => 2329,
                'code' => '460400',
                'name' => '儋州市',
                'parentId' => '460000',
                'level' => '2',
            ),
            329 => 
            array (
                'id' => 2330,
                'code' => '460401',
                'name' => '洋浦经济开发区',
                'parentId' => '460400',
                'level' => '3',
            ),
            330 => 
            array (
                'id' => 2331,
                'code' => '460402',
                'name' => '那大镇',
                'parentId' => '460400',
                'level' => '3',
            ),
            331 => 
            array (
                'id' => 2332,
                'code' => '460403',
                'name' => '南丰镇',
                'parentId' => '460400',
                'level' => '3',
            ),
            332 => 
            array (
                'id' => 2333,
                'code' => '460404',
                'name' => '雅星镇',
                'parentId' => '460400',
                'level' => '3',
            ),
            333 => 
            array (
                'id' => 2334,
                'code' => '460405',
                'name' => '和庆镇',
                'parentId' => '460400',
                'level' => '3',
            ),
            334 => 
            array (
                'id' => 2335,
                'code' => '460406',
                'name' => '大成镇',
                'parentId' => '460400',
                'level' => '3',
            ),
            335 => 
            array (
                'id' => 2336,
                'code' => '460407',
                'name' => '新州镇',
                'parentId' => '460400',
                'level' => '3',
            ),
            336 => 
            array (
                'id' => 2337,
                'code' => '460408',
                'name' => '光村镇',
                'parentId' => '460400',
                'level' => '3',
            ),
            337 => 
            array (
                'id' => 2338,
                'code' => '460409',
                'name' => '东成镇',
                'parentId' => '460400',
                'level' => '3',
            ),
            338 => 
            array (
                'id' => 2339,
                'code' => '460410',
                'name' => '中和镇',
                'parentId' => '460400',
                'level' => '3',
            ),
            339 => 
            array (
                'id' => 2340,
                'code' => '460411',
                'name' => '峨蔓镇',
                'parentId' => '460400',
                'level' => '3',
            ),
            340 => 
            array (
                'id' => 2341,
                'code' => '460412',
                'name' => '兰洋镇',
                'parentId' => '460400',
                'level' => '3',
            ),
            341 => 
            array (
                'id' => 2342,
                'code' => '460413',
                'name' => '王五镇',
                'parentId' => '460400',
                'level' => '3',
            ),
            342 => 
            array (
                'id' => 2343,
                'code' => '460414',
                'name' => '排浦镇',
                'parentId' => '460400',
                'level' => '3',
            ),
            343 => 
            array (
                'id' => 2344,
                'code' => '460415',
                'name' => '海头镇',
                'parentId' => '460400',
                'level' => '3',
            ),
            344 => 
            array (
                'id' => 2345,
                'code' => '460416',
                'name' => '木棠镇',
                'parentId' => '460400',
                'level' => '3',
            ),
            345 => 
            array (
                'id' => 2346,
                'code' => '460417',
                'name' => '白马井镇',
                'parentId' => '460400',
                'level' => '3',
            ),
            346 => 
            array (
                'id' => 2347,
                'code' => '460418',
                'name' => '三都镇',
                'parentId' => '460400',
                'level' => '3',
            ),
            347 => 
            array (
                'id' => 2348,
                'code' => '469000',
                'name' => '直辖县级',
                'parentId' => '460000',
                'level' => '2',
            ),
            348 => 
            array (
                'id' => 2349,
                'code' => '469001',
                'name' => '五指山市',
                'parentId' => '469000',
                'level' => '3',
            ),
            349 => 
            array (
                'id' => 2350,
                'code' => '469002',
                'name' => '琼海市',
                'parentId' => '469000',
                'level' => '3',
            ),
            350 => 
            array (
                'id' => 2351,
                'code' => '469005',
                'name' => '文昌市',
                'parentId' => '469000',
                'level' => '3',
            ),
            351 => 
            array (
                'id' => 2352,
                'code' => '469006',
                'name' => '万宁市',
                'parentId' => '469000',
                'level' => '3',
            ),
            352 => 
            array (
                'id' => 2353,
                'code' => '469007',
                'name' => '东方市',
                'parentId' => '469000',
                'level' => '3',
            ),
            353 => 
            array (
                'id' => 2354,
                'code' => '469021',
                'name' => '定安县',
                'parentId' => '469000',
                'level' => '3',
            ),
            354 => 
            array (
                'id' => 2355,
                'code' => '469022',
                'name' => '屯昌县',
                'parentId' => '469000',
                'level' => '3',
            ),
            355 => 
            array (
                'id' => 2356,
                'code' => '469023',
                'name' => '澄迈县',
                'parentId' => '469000',
                'level' => '3',
            ),
            356 => 
            array (
                'id' => 2357,
                'code' => '469024',
                'name' => '临高县',
                'parentId' => '469000',
                'level' => '3',
            ),
            357 => 
            array (
                'id' => 2358,
                'code' => '469025',
                'name' => '白沙黎族自治县',
                'parentId' => '469000',
                'level' => '3',
            ),
            358 => 
            array (
                'id' => 2359,
                'code' => '469026',
                'name' => '昌江黎族自治县',
                'parentId' => '469000',
                'level' => '3',
            ),
            359 => 
            array (
                'id' => 2360,
                'code' => '469027',
                'name' => '乐东黎族自治县',
                'parentId' => '469000',
                'level' => '3',
            ),
            360 => 
            array (
                'id' => 2361,
                'code' => '469028',
                'name' => '陵水黎族自治县',
                'parentId' => '469000',
                'level' => '3',
            ),
            361 => 
            array (
                'id' => 2362,
                'code' => '469029',
                'name' => '保亭黎族苗族自治县',
                'parentId' => '469000',
                'level' => '3',
            ),
            362 => 
            array (
                'id' => 2363,
                'code' => '469030',
                'name' => '琼中黎族苗族自治县',
                'parentId' => '469000',
                'level' => '3',
            ),
            363 => 
            array (
                'id' => 2364,
                'code' => '500000',
                'name' => '重庆',
                'parentId' => '100000',
                'level' => '1',
            ),
            364 => 
            array (
                'id' => 2365,
                'code' => '500100',
                'name' => '重庆市',
                'parentId' => '500000',
                'level' => '2',
            ),
            365 => 
            array (
                'id' => 2366,
                'code' => '500101',
                'name' => '万州区',
                'parentId' => '500100',
                'level' => '3',
            ),
            366 => 
            array (
                'id' => 2367,
                'code' => '500102',
                'name' => '涪陵区',
                'parentId' => '500100',
                'level' => '3',
            ),
            367 => 
            array (
                'id' => 2368,
                'code' => '500103',
                'name' => '渝中区',
                'parentId' => '500100',
                'level' => '3',
            ),
            368 => 
            array (
                'id' => 2369,
                'code' => '500104',
                'name' => '大渡口区',
                'parentId' => '500100',
                'level' => '3',
            ),
            369 => 
            array (
                'id' => 2370,
                'code' => '500105',
                'name' => '江北区',
                'parentId' => '500100',
                'level' => '3',
            ),
            370 => 
            array (
                'id' => 2371,
                'code' => '500106',
                'name' => '沙坪坝区',
                'parentId' => '500100',
                'level' => '3',
            ),
            371 => 
            array (
                'id' => 2372,
                'code' => '500107',
                'name' => '九龙坡区',
                'parentId' => '500100',
                'level' => '3',
            ),
            372 => 
            array (
                'id' => 2373,
                'code' => '500108',
                'name' => '南岸区',
                'parentId' => '500100',
                'level' => '3',
            ),
            373 => 
            array (
                'id' => 2374,
                'code' => '500109',
                'name' => '北碚区',
                'parentId' => '500100',
                'level' => '3',
            ),
            374 => 
            array (
                'id' => 2375,
                'code' => '500110',
                'name' => '綦江区',
                'parentId' => '500100',
                'level' => '3',
            ),
            375 => 
            array (
                'id' => 2376,
                'code' => '500111',
                'name' => '大足区',
                'parentId' => '500100',
                'level' => '3',
            ),
            376 => 
            array (
                'id' => 2377,
                'code' => '500112',
                'name' => '渝北区',
                'parentId' => '500100',
                'level' => '3',
            ),
            377 => 
            array (
                'id' => 2378,
                'code' => '500113',
                'name' => '巴南区',
                'parentId' => '500100',
                'level' => '3',
            ),
            378 => 
            array (
                'id' => 2379,
                'code' => '500114',
                'name' => '黔江区',
                'parentId' => '500100',
                'level' => '3',
            ),
            379 => 
            array (
                'id' => 2380,
                'code' => '500115',
                'name' => '长寿区',
                'parentId' => '500100',
                'level' => '3',
            ),
            380 => 
            array (
                'id' => 2381,
                'code' => '500116',
                'name' => '江津区',
                'parentId' => '500100',
                'level' => '3',
            ),
            381 => 
            array (
                'id' => 2382,
                'code' => '500117',
                'name' => '合川区',
                'parentId' => '500100',
                'level' => '3',
            ),
            382 => 
            array (
                'id' => 2383,
                'code' => '500118',
                'name' => '永川区',
                'parentId' => '500100',
                'level' => '3',
            ),
            383 => 
            array (
                'id' => 2384,
                'code' => '500119',
                'name' => '南川区',
                'parentId' => '500100',
                'level' => '3',
            ),
            384 => 
            array (
                'id' => 2385,
                'code' => '500120',
                'name' => '璧山区',
                'parentId' => '500100',
                'level' => '3',
            ),
            385 => 
            array (
                'id' => 2386,
                'code' => '500151',
                'name' => '铜梁区',
                'parentId' => '500100',
                'level' => '3',
            ),
            386 => 
            array (
                'id' => 2387,
                'code' => '500152',
                'name' => '潼南区',
                'parentId' => '500100',
                'level' => '3',
            ),
            387 => 
            array (
                'id' => 2388,
                'code' => '500153',
                'name' => '荣昌区',
                'parentId' => '500100',
                'level' => '3',
            ),
            388 => 
            array (
                'id' => 2389,
                'code' => '500228',
                'name' => '梁平县',
                'parentId' => '500100',
                'level' => '3',
            ),
            389 => 
            array (
                'id' => 2390,
                'code' => '500229',
                'name' => '城口县',
                'parentId' => '500100',
                'level' => '3',
            ),
            390 => 
            array (
                'id' => 2391,
                'code' => '500230',
                'name' => '丰都县',
                'parentId' => '500100',
                'level' => '3',
            ),
            391 => 
            array (
                'id' => 2392,
                'code' => '500231',
                'name' => '垫江县',
                'parentId' => '500100',
                'level' => '3',
            ),
            392 => 
            array (
                'id' => 2393,
                'code' => '500232',
                'name' => '武隆县',
                'parentId' => '500100',
                'level' => '3',
            ),
            393 => 
            array (
                'id' => 2394,
                'code' => '500233',
                'name' => '忠县',
                'parentId' => '500100',
                'level' => '3',
            ),
            394 => 
            array (
                'id' => 2395,
                'code' => '500234',
                'name' => '开县',
                'parentId' => '500100',
                'level' => '3',
            ),
            395 => 
            array (
                'id' => 2396,
                'code' => '500235',
                'name' => '云阳县',
                'parentId' => '500100',
                'level' => '3',
            ),
            396 => 
            array (
                'id' => 2397,
                'code' => '500236',
                'name' => '奉节县',
                'parentId' => '500100',
                'level' => '3',
            ),
            397 => 
            array (
                'id' => 2398,
                'code' => '500237',
                'name' => '巫山县',
                'parentId' => '500100',
                'level' => '3',
            ),
            398 => 
            array (
                'id' => 2399,
                'code' => '500238',
                'name' => '巫溪县',
                'parentId' => '500100',
                'level' => '3',
            ),
            399 => 
            array (
                'id' => 2400,
                'code' => '500240',
                'name' => '石柱土家族自治县',
                'parentId' => '500100',
                'level' => '3',
            ),
            400 => 
            array (
                'id' => 2401,
                'code' => '500241',
                'name' => '秀山土家族苗族自治县',
                'parentId' => '500100',
                'level' => '3',
            ),
            401 => 
            array (
                'id' => 2402,
                'code' => '500242',
                'name' => '酉阳土家族苗族自治县',
                'parentId' => '500100',
                'level' => '3',
            ),
            402 => 
            array (
                'id' => 2403,
                'code' => '500243',
                'name' => '彭水苗族土家族自治县',
                'parentId' => '500100',
                'level' => '3',
            ),
            403 => 
            array (
                'id' => 2404,
                'code' => '500300',
                'name' => '两江新区',
                'parentId' => '500000',
                'level' => '2',
            ),
            404 => 
            array (
                'id' => 2405,
                'code' => '500301',
                'name' => '北部新区',
                'parentId' => '500300',
                'level' => '3',
            ),
            405 => 
            array (
                'id' => 2406,
                'code' => '500302',
                'name' => '保税港区',
                'parentId' => '500300',
                'level' => '3',
            ),
            406 => 
            array (
                'id' => 2407,
                'code' => '500303',
                'name' => '工业园区',
                'parentId' => '500300',
                'level' => '3',
            ),
            407 => 
            array (
                'id' => 2408,
                'code' => '510000',
                'name' => '四川省',
                'parentId' => '100000',
                'level' => '1',
            ),
            408 => 
            array (
                'id' => 2409,
                'code' => '510100',
                'name' => '成都市',
                'parentId' => '510000',
                'level' => '2',
            ),
            409 => 
            array (
                'id' => 2410,
                'code' => '510104',
                'name' => '锦江区',
                'parentId' => '510100',
                'level' => '3',
            ),
            410 => 
            array (
                'id' => 2411,
                'code' => '510105',
                'name' => '青羊区',
                'parentId' => '510100',
                'level' => '3',
            ),
            411 => 
            array (
                'id' => 2412,
                'code' => '510106',
                'name' => '金牛区',
                'parentId' => '510100',
                'level' => '3',
            ),
            412 => 
            array (
                'id' => 2413,
                'code' => '510107',
                'name' => '武侯区',
                'parentId' => '510100',
                'level' => '3',
            ),
            413 => 
            array (
                'id' => 2414,
                'code' => '510108',
                'name' => '成华区',
                'parentId' => '510100',
                'level' => '3',
            ),
            414 => 
            array (
                'id' => 2415,
                'code' => '510112',
                'name' => '龙泉驿区',
                'parentId' => '510100',
                'level' => '3',
            ),
            415 => 
            array (
                'id' => 2416,
                'code' => '510113',
                'name' => '青白江区',
                'parentId' => '510100',
                'level' => '3',
            ),
            416 => 
            array (
                'id' => 2417,
                'code' => '510114',
                'name' => '新都区',
                'parentId' => '510100',
                'level' => '3',
            ),
            417 => 
            array (
                'id' => 2418,
                'code' => '510115',
                'name' => '温江区',
                'parentId' => '510100',
                'level' => '3',
            ),
            418 => 
            array (
                'id' => 2419,
                'code' => '510121',
                'name' => '金堂县',
                'parentId' => '510100',
                'level' => '3',
            ),
            419 => 
            array (
                'id' => 2420,
                'code' => '510122',
                'name' => '双流县',
                'parentId' => '510100',
                'level' => '3',
            ),
            420 => 
            array (
                'id' => 2421,
                'code' => '510124',
                'name' => '郫县',
                'parentId' => '510100',
                'level' => '3',
            ),
            421 => 
            array (
                'id' => 2422,
                'code' => '510129',
                'name' => '大邑县',
                'parentId' => '510100',
                'level' => '3',
            ),
            422 => 
            array (
                'id' => 2423,
                'code' => '510131',
                'name' => '蒲江县',
                'parentId' => '510100',
                'level' => '3',
            ),
            423 => 
            array (
                'id' => 2424,
                'code' => '510132',
                'name' => '新津县',
                'parentId' => '510100',
                'level' => '3',
            ),
            424 => 
            array (
                'id' => 2425,
                'code' => '510181',
                'name' => '都江堰市',
                'parentId' => '510100',
                'level' => '3',
            ),
            425 => 
            array (
                'id' => 2426,
                'code' => '510182',
                'name' => '彭州市',
                'parentId' => '510100',
                'level' => '3',
            ),
            426 => 
            array (
                'id' => 2427,
                'code' => '510183',
                'name' => '邛崃市',
                'parentId' => '510100',
                'level' => '3',
            ),
            427 => 
            array (
                'id' => 2428,
                'code' => '510184',
                'name' => '崇州市',
                'parentId' => '510100',
                'level' => '3',
            ),
            428 => 
            array (
                'id' => 2429,
                'code' => '510185',
                'name' => '天府新区',
                'parentId' => '510100',
                'level' => '3',
            ),
            429 => 
            array (
                'id' => 2430,
                'code' => '510300',
                'name' => '自贡市',
                'parentId' => '510000',
                'level' => '2',
            ),
            430 => 
            array (
                'id' => 2431,
                'code' => '510302',
                'name' => '自流井区',
                'parentId' => '510300',
                'level' => '3',
            ),
            431 => 
            array (
                'id' => 2432,
                'code' => '510303',
                'name' => '贡井区',
                'parentId' => '510300',
                'level' => '3',
            ),
            432 => 
            array (
                'id' => 2433,
                'code' => '510304',
                'name' => '大安区',
                'parentId' => '510300',
                'level' => '3',
            ),
            433 => 
            array (
                'id' => 2434,
                'code' => '510311',
                'name' => '沿滩区',
                'parentId' => '510300',
                'level' => '3',
            ),
            434 => 
            array (
                'id' => 2435,
                'code' => '510321',
                'name' => '荣县',
                'parentId' => '510300',
                'level' => '3',
            ),
            435 => 
            array (
                'id' => 2436,
                'code' => '510322',
                'name' => '富顺县',
                'parentId' => '510300',
                'level' => '3',
            ),
            436 => 
            array (
                'id' => 2437,
                'code' => '510400',
                'name' => '攀枝花市',
                'parentId' => '510000',
                'level' => '2',
            ),
            437 => 
            array (
                'id' => 2438,
                'code' => '510402',
                'name' => '东区',
                'parentId' => '510400',
                'level' => '3',
            ),
            438 => 
            array (
                'id' => 2439,
                'code' => '510403',
                'name' => '西区',
                'parentId' => '510400',
                'level' => '3',
            ),
            439 => 
            array (
                'id' => 2440,
                'code' => '510411',
                'name' => '仁和区',
                'parentId' => '510400',
                'level' => '3',
            ),
            440 => 
            array (
                'id' => 2441,
                'code' => '510421',
                'name' => '米易县',
                'parentId' => '510400',
                'level' => '3',
            ),
            441 => 
            array (
                'id' => 2442,
                'code' => '510422',
                'name' => '盐边县',
                'parentId' => '510400',
                'level' => '3',
            ),
            442 => 
            array (
                'id' => 2443,
                'code' => '510500',
                'name' => '泸州市',
                'parentId' => '510000',
                'level' => '2',
            ),
            443 => 
            array (
                'id' => 2444,
                'code' => '510502',
                'name' => '江阳区',
                'parentId' => '510500',
                'level' => '3',
            ),
            444 => 
            array (
                'id' => 2445,
                'code' => '510503',
                'name' => '纳溪区',
                'parentId' => '510500',
                'level' => '3',
            ),
            445 => 
            array (
                'id' => 2446,
                'code' => '510504',
                'name' => '龙马潭区',
                'parentId' => '510500',
                'level' => '3',
            ),
            446 => 
            array (
                'id' => 2447,
                'code' => '510521',
                'name' => '泸县',
                'parentId' => '510500',
                'level' => '3',
            ),
            447 => 
            array (
                'id' => 2448,
                'code' => '510522',
                'name' => '合江县',
                'parentId' => '510500',
                'level' => '3',
            ),
            448 => 
            array (
                'id' => 2449,
                'code' => '510524',
                'name' => '叙永县',
                'parentId' => '510500',
                'level' => '3',
            ),
            449 => 
            array (
                'id' => 2450,
                'code' => '510525',
                'name' => '古蔺县',
                'parentId' => '510500',
                'level' => '3',
            ),
            450 => 
            array (
                'id' => 2451,
                'code' => '510600',
                'name' => '德阳市',
                'parentId' => '510000',
                'level' => '2',
            ),
            451 => 
            array (
                'id' => 2452,
                'code' => '510603',
                'name' => '旌阳区',
                'parentId' => '510600',
                'level' => '3',
            ),
            452 => 
            array (
                'id' => 2453,
                'code' => '510623',
                'name' => '中江县',
                'parentId' => '510600',
                'level' => '3',
            ),
            453 => 
            array (
                'id' => 2454,
                'code' => '510626',
                'name' => '罗江县',
                'parentId' => '510600',
                'level' => '3',
            ),
            454 => 
            array (
                'id' => 2455,
                'code' => '510681',
                'name' => '广汉市',
                'parentId' => '510600',
                'level' => '3',
            ),
            455 => 
            array (
                'id' => 2456,
                'code' => '510682',
                'name' => '什邡市',
                'parentId' => '510600',
                'level' => '3',
            ),
            456 => 
            array (
                'id' => 2457,
                'code' => '510683',
                'name' => '绵竹市',
                'parentId' => '510600',
                'level' => '3',
            ),
            457 => 
            array (
                'id' => 2458,
                'code' => '510700',
                'name' => '绵阳市',
                'parentId' => '510000',
                'level' => '2',
            ),
            458 => 
            array (
                'id' => 2459,
                'code' => '510703',
                'name' => '涪城区',
                'parentId' => '510700',
                'level' => '3',
            ),
            459 => 
            array (
                'id' => 2460,
                'code' => '510704',
                'name' => '游仙区',
                'parentId' => '510700',
                'level' => '3',
            ),
            460 => 
            array (
                'id' => 2461,
                'code' => '510722',
                'name' => '三台县',
                'parentId' => '510700',
                'level' => '3',
            ),
            461 => 
            array (
                'id' => 2462,
                'code' => '510723',
                'name' => '盐亭县',
                'parentId' => '510700',
                'level' => '3',
            ),
            462 => 
            array (
                'id' => 2463,
                'code' => '510724',
                'name' => '安县',
                'parentId' => '510700',
                'level' => '3',
            ),
            463 => 
            array (
                'id' => 2464,
                'code' => '510725',
                'name' => '梓潼县',
                'parentId' => '510700',
                'level' => '3',
            ),
            464 => 
            array (
                'id' => 2465,
                'code' => '510726',
                'name' => '北川羌族自治县',
                'parentId' => '510700',
                'level' => '3',
            ),
            465 => 
            array (
                'id' => 2466,
                'code' => '510727',
                'name' => '平武县',
                'parentId' => '510700',
                'level' => '3',
            ),
            466 => 
            array (
                'id' => 2467,
                'code' => '510781',
                'name' => '江油市',
                'parentId' => '510700',
                'level' => '3',
            ),
            467 => 
            array (
                'id' => 2468,
                'code' => '510800',
                'name' => '广元市',
                'parentId' => '510000',
                'level' => '2',
            ),
            468 => 
            array (
                'id' => 2469,
                'code' => '510802',
                'name' => '利州区',
                'parentId' => '510800',
                'level' => '3',
            ),
            469 => 
            array (
                'id' => 2470,
                'code' => '510811',
                'name' => '昭化区',
                'parentId' => '510800',
                'level' => '3',
            ),
            470 => 
            array (
                'id' => 2471,
                'code' => '510812',
                'name' => '朝天区',
                'parentId' => '510800',
                'level' => '3',
            ),
            471 => 
            array (
                'id' => 2472,
                'code' => '510821',
                'name' => '旺苍县',
                'parentId' => '510800',
                'level' => '3',
            ),
            472 => 
            array (
                'id' => 2473,
                'code' => '510822',
                'name' => '青川县',
                'parentId' => '510800',
                'level' => '3',
            ),
            473 => 
            array (
                'id' => 2474,
                'code' => '510823',
                'name' => '剑阁县',
                'parentId' => '510800',
                'level' => '3',
            ),
            474 => 
            array (
                'id' => 2475,
                'code' => '510824',
                'name' => '苍溪县',
                'parentId' => '510800',
                'level' => '3',
            ),
            475 => 
            array (
                'id' => 2476,
                'code' => '510900',
                'name' => '遂宁市',
                'parentId' => '510000',
                'level' => '2',
            ),
            476 => 
            array (
                'id' => 2477,
                'code' => '510903',
                'name' => '船山区',
                'parentId' => '510900',
                'level' => '3',
            ),
            477 => 
            array (
                'id' => 2478,
                'code' => '510904',
                'name' => '安居区',
                'parentId' => '510900',
                'level' => '3',
            ),
            478 => 
            array (
                'id' => 2479,
                'code' => '510921',
                'name' => '蓬溪县',
                'parentId' => '510900',
                'level' => '3',
            ),
            479 => 
            array (
                'id' => 2480,
                'code' => '510922',
                'name' => '射洪县',
                'parentId' => '510900',
                'level' => '3',
            ),
            480 => 
            array (
                'id' => 2481,
                'code' => '510923',
                'name' => '大英县',
                'parentId' => '510900',
                'level' => '3',
            ),
            481 => 
            array (
                'id' => 2482,
                'code' => '511000',
                'name' => '内江市',
                'parentId' => '510000',
                'level' => '2',
            ),
            482 => 
            array (
                'id' => 2483,
                'code' => '511002',
                'name' => '市中区',
                'parentId' => '511000',
                'level' => '3',
            ),
            483 => 
            array (
                'id' => 2484,
                'code' => '511011',
                'name' => '东兴区',
                'parentId' => '511000',
                'level' => '3',
            ),
            484 => 
            array (
                'id' => 2485,
                'code' => '511024',
                'name' => '威远县',
                'parentId' => '511000',
                'level' => '3',
            ),
            485 => 
            array (
                'id' => 2486,
                'code' => '511025',
                'name' => '资中县',
                'parentId' => '511000',
                'level' => '3',
            ),
            486 => 
            array (
                'id' => 2487,
                'code' => '511028',
                'name' => '隆昌县',
                'parentId' => '511000',
                'level' => '3',
            ),
            487 => 
            array (
                'id' => 2488,
                'code' => '511100',
                'name' => '乐山市',
                'parentId' => '510000',
                'level' => '2',
            ),
            488 => 
            array (
                'id' => 2489,
                'code' => '511102',
                'name' => '市中区',
                'parentId' => '511100',
                'level' => '3',
            ),
            489 => 
            array (
                'id' => 2490,
                'code' => '511111',
                'name' => '沙湾区',
                'parentId' => '511100',
                'level' => '3',
            ),
            490 => 
            array (
                'id' => 2491,
                'code' => '511112',
                'name' => '五通桥区',
                'parentId' => '511100',
                'level' => '3',
            ),
            491 => 
            array (
                'id' => 2492,
                'code' => '511113',
                'name' => '金口河区',
                'parentId' => '511100',
                'level' => '3',
            ),
            492 => 
            array (
                'id' => 2493,
                'code' => '511123',
                'name' => '犍为县',
                'parentId' => '511100',
                'level' => '3',
            ),
            493 => 
            array (
                'id' => 2494,
                'code' => '511124',
                'name' => '井研县',
                'parentId' => '511100',
                'level' => '3',
            ),
            494 => 
            array (
                'id' => 2495,
                'code' => '511126',
                'name' => '夹江县',
                'parentId' => '511100',
                'level' => '3',
            ),
            495 => 
            array (
                'id' => 2496,
                'code' => '511129',
                'name' => '沐川县',
                'parentId' => '511100',
                'level' => '3',
            ),
            496 => 
            array (
                'id' => 2497,
                'code' => '511132',
                'name' => '峨边彝族自治县',
                'parentId' => '511100',
                'level' => '3',
            ),
            497 => 
            array (
                'id' => 2498,
                'code' => '511133',
                'name' => '马边彝族自治县',
                'parentId' => '511100',
                'level' => '3',
            ),
            498 => 
            array (
                'id' => 2499,
                'code' => '511181',
                'name' => '峨眉山市',
                'parentId' => '511100',
                'level' => '3',
            ),
            499 => 
            array (
                'id' => 2500,
                'code' => '511300',
                'name' => '南充市',
                'parentId' => '510000',
                'level' => '2',
            ),
        ));
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'code' => '511302',
                'name' => '顺庆区',
                'parentId' => '511300',
                'level' => '3',
            ),
            1 => 
            array (
                'id' => 2502,
                'code' => '511303',
                'name' => '高坪区',
                'parentId' => '511300',
                'level' => '3',
            ),
            2 => 
            array (
                'id' => 2503,
                'code' => '511304',
                'name' => '嘉陵区',
                'parentId' => '511300',
                'level' => '3',
            ),
            3 => 
            array (
                'id' => 2504,
                'code' => '511321',
                'name' => '南部县',
                'parentId' => '511300',
                'level' => '3',
            ),
            4 => 
            array (
                'id' => 2505,
                'code' => '511322',
                'name' => '营山县',
                'parentId' => '511300',
                'level' => '3',
            ),
            5 => 
            array (
                'id' => 2506,
                'code' => '511323',
                'name' => '蓬安县',
                'parentId' => '511300',
                'level' => '3',
            ),
            6 => 
            array (
                'id' => 2507,
                'code' => '511324',
                'name' => '仪陇县',
                'parentId' => '511300',
                'level' => '3',
            ),
            7 => 
            array (
                'id' => 2508,
                'code' => '511325',
                'name' => '西充县',
                'parentId' => '511300',
                'level' => '3',
            ),
            8 => 
            array (
                'id' => 2509,
                'code' => '511381',
                'name' => '阆中市',
                'parentId' => '511300',
                'level' => '3',
            ),
            9 => 
            array (
                'id' => 2510,
                'code' => '511400',
                'name' => '眉山市',
                'parentId' => '510000',
                'level' => '2',
            ),
            10 => 
            array (
                'id' => 2511,
                'code' => '511402',
                'name' => '东坡区',
                'parentId' => '511400',
                'level' => '3',
            ),
            11 => 
            array (
                'id' => 2512,
                'code' => '511403',
                'name' => '彭山区',
                'parentId' => '511400',
                'level' => '3',
            ),
            12 => 
            array (
                'id' => 2513,
                'code' => '511421',
                'name' => '仁寿县',
                'parentId' => '511400',
                'level' => '3',
            ),
            13 => 
            array (
                'id' => 2514,
                'code' => '511423',
                'name' => '洪雅县',
                'parentId' => '511400',
                'level' => '3',
            ),
            14 => 
            array (
                'id' => 2515,
                'code' => '511424',
                'name' => '丹棱县',
                'parentId' => '511400',
                'level' => '3',
            ),
            15 => 
            array (
                'id' => 2516,
                'code' => '511425',
                'name' => '青神县',
                'parentId' => '511400',
                'level' => '3',
            ),
            16 => 
            array (
                'id' => 2517,
                'code' => '511500',
                'name' => '宜宾市',
                'parentId' => '510000',
                'level' => '2',
            ),
            17 => 
            array (
                'id' => 2518,
                'code' => '511502',
                'name' => '翠屏区',
                'parentId' => '511500',
                'level' => '3',
            ),
            18 => 
            array (
                'id' => 2519,
                'code' => '511503',
                'name' => '南溪区',
                'parentId' => '511500',
                'level' => '3',
            ),
            19 => 
            array (
                'id' => 2520,
                'code' => '511521',
                'name' => '宜宾县',
                'parentId' => '511500',
                'level' => '3',
            ),
            20 => 
            array (
                'id' => 2521,
                'code' => '511523',
                'name' => '江安县',
                'parentId' => '511500',
                'level' => '3',
            ),
            21 => 
            array (
                'id' => 2522,
                'code' => '511524',
                'name' => '长宁县',
                'parentId' => '511500',
                'level' => '3',
            ),
            22 => 
            array (
                'id' => 2523,
                'code' => '511525',
                'name' => '高县',
                'parentId' => '511500',
                'level' => '3',
            ),
            23 => 
            array (
                'id' => 2524,
                'code' => '511526',
                'name' => '珙县',
                'parentId' => '511500',
                'level' => '3',
            ),
            24 => 
            array (
                'id' => 2525,
                'code' => '511527',
                'name' => '筠连县',
                'parentId' => '511500',
                'level' => '3',
            ),
            25 => 
            array (
                'id' => 2526,
                'code' => '511528',
                'name' => '兴文县',
                'parentId' => '511500',
                'level' => '3',
            ),
            26 => 
            array (
                'id' => 2527,
                'code' => '511529',
                'name' => '屏山县',
                'parentId' => '511500',
                'level' => '3',
            ),
            27 => 
            array (
                'id' => 2528,
                'code' => '511600',
                'name' => '广安市',
                'parentId' => '510000',
                'level' => '2',
            ),
            28 => 
            array (
                'id' => 2529,
                'code' => '511602',
                'name' => '广安区',
                'parentId' => '511600',
                'level' => '3',
            ),
            29 => 
            array (
                'id' => 2530,
                'code' => '511603',
                'name' => '前锋区',
                'parentId' => '511600',
                'level' => '3',
            ),
            30 => 
            array (
                'id' => 2531,
                'code' => '511621',
                'name' => '岳池县',
                'parentId' => '511600',
                'level' => '3',
            ),
            31 => 
            array (
                'id' => 2532,
                'code' => '511622',
                'name' => '武胜县',
                'parentId' => '511600',
                'level' => '3',
            ),
            32 => 
            array (
                'id' => 2533,
                'code' => '511623',
                'name' => '邻水县',
                'parentId' => '511600',
                'level' => '3',
            ),
            33 => 
            array (
                'id' => 2534,
                'code' => '511681',
                'name' => '华蓥市',
                'parentId' => '511600',
                'level' => '3',
            ),
            34 => 
            array (
                'id' => 2535,
                'code' => '511700',
                'name' => '达州市',
                'parentId' => '510000',
                'level' => '2',
            ),
            35 => 
            array (
                'id' => 2536,
                'code' => '511702',
                'name' => '通川区',
                'parentId' => '511700',
                'level' => '3',
            ),
            36 => 
            array (
                'id' => 2537,
                'code' => '511703',
                'name' => '达川区',
                'parentId' => '511700',
                'level' => '3',
            ),
            37 => 
            array (
                'id' => 2538,
                'code' => '511722',
                'name' => '宣汉县',
                'parentId' => '511700',
                'level' => '3',
            ),
            38 => 
            array (
                'id' => 2539,
                'code' => '511723',
                'name' => '开江县',
                'parentId' => '511700',
                'level' => '3',
            ),
            39 => 
            array (
                'id' => 2540,
                'code' => '511724',
                'name' => '大竹县',
                'parentId' => '511700',
                'level' => '3',
            ),
            40 => 
            array (
                'id' => 2541,
                'code' => '511725',
                'name' => '渠县',
                'parentId' => '511700',
                'level' => '3',
            ),
            41 => 
            array (
                'id' => 2542,
                'code' => '511781',
                'name' => '万源市',
                'parentId' => '511700',
                'level' => '3',
            ),
            42 => 
            array (
                'id' => 2543,
                'code' => '511800',
                'name' => '雅安市',
                'parentId' => '510000',
                'level' => '2',
            ),
            43 => 
            array (
                'id' => 2544,
                'code' => '511802',
                'name' => '雨城区',
                'parentId' => '511800',
                'level' => '3',
            ),
            44 => 
            array (
                'id' => 2545,
                'code' => '511803',
                'name' => '名山区',
                'parentId' => '511800',
                'level' => '3',
            ),
            45 => 
            array (
                'id' => 2546,
                'code' => '511822',
                'name' => '荥经县',
                'parentId' => '511800',
                'level' => '3',
            ),
            46 => 
            array (
                'id' => 2547,
                'code' => '511823',
                'name' => '汉源县',
                'parentId' => '511800',
                'level' => '3',
            ),
            47 => 
            array (
                'id' => 2548,
                'code' => '511824',
                'name' => '石棉县',
                'parentId' => '511800',
                'level' => '3',
            ),
            48 => 
            array (
                'id' => 2549,
                'code' => '511825',
                'name' => '天全县',
                'parentId' => '511800',
                'level' => '3',
            ),
            49 => 
            array (
                'id' => 2550,
                'code' => '511826',
                'name' => '芦山县',
                'parentId' => '511800',
                'level' => '3',
            ),
            50 => 
            array (
                'id' => 2551,
                'code' => '511827',
                'name' => '宝兴县',
                'parentId' => '511800',
                'level' => '3',
            ),
            51 => 
            array (
                'id' => 2552,
                'code' => '511900',
                'name' => '巴中市',
                'parentId' => '510000',
                'level' => '2',
            ),
            52 => 
            array (
                'id' => 2553,
                'code' => '511902',
                'name' => '巴州区',
                'parentId' => '511900',
                'level' => '3',
            ),
            53 => 
            array (
                'id' => 2554,
                'code' => '511903',
                'name' => '恩阳区',
                'parentId' => '511900',
                'level' => '3',
            ),
            54 => 
            array (
                'id' => 2555,
                'code' => '511921',
                'name' => '通江县',
                'parentId' => '511900',
                'level' => '3',
            ),
            55 => 
            array (
                'id' => 2556,
                'code' => '511922',
                'name' => '南江县',
                'parentId' => '511900',
                'level' => '3',
            ),
            56 => 
            array (
                'id' => 2557,
                'code' => '511923',
                'name' => '平昌县',
                'parentId' => '511900',
                'level' => '3',
            ),
            57 => 
            array (
                'id' => 2558,
                'code' => '512000',
                'name' => '资阳市',
                'parentId' => '510000',
                'level' => '2',
            ),
            58 => 
            array (
                'id' => 2559,
                'code' => '512002',
                'name' => '雁江区',
                'parentId' => '512000',
                'level' => '3',
            ),
            59 => 
            array (
                'id' => 2560,
                'code' => '512021',
                'name' => '安岳县',
                'parentId' => '512000',
                'level' => '3',
            ),
            60 => 
            array (
                'id' => 2561,
                'code' => '512022',
                'name' => '乐至县',
                'parentId' => '512000',
                'level' => '3',
            ),
            61 => 
            array (
                'id' => 2562,
                'code' => '512081',
                'name' => '简阳市',
                'parentId' => '512000',
                'level' => '3',
            ),
            62 => 
            array (
                'id' => 2563,
                'code' => '513200',
                'name' => '阿坝藏族羌族自治州',
                'parentId' => '510000',
                'level' => '2',
            ),
            63 => 
            array (
                'id' => 2564,
                'code' => '513221',
                'name' => '汶川县',
                'parentId' => '513200',
                'level' => '3',
            ),
            64 => 
            array (
                'id' => 2565,
                'code' => '513222',
                'name' => '理县',
                'parentId' => '513200',
                'level' => '3',
            ),
            65 => 
            array (
                'id' => 2566,
                'code' => '513223',
                'name' => '茂县',
                'parentId' => '513200',
                'level' => '3',
            ),
            66 => 
            array (
                'id' => 2567,
                'code' => '513224',
                'name' => '松潘县',
                'parentId' => '513200',
                'level' => '3',
            ),
            67 => 
            array (
                'id' => 2568,
                'code' => '513225',
                'name' => '九寨沟县',
                'parentId' => '513200',
                'level' => '3',
            ),
            68 => 
            array (
                'id' => 2569,
                'code' => '513226',
                'name' => '金川县',
                'parentId' => '513200',
                'level' => '3',
            ),
            69 => 
            array (
                'id' => 2570,
                'code' => '513227',
                'name' => '小金县',
                'parentId' => '513200',
                'level' => '3',
            ),
            70 => 
            array (
                'id' => 2571,
                'code' => '513228',
                'name' => '黑水县',
                'parentId' => '513200',
                'level' => '3',
            ),
            71 => 
            array (
                'id' => 2572,
                'code' => '513229',
                'name' => '马尔康县',
                'parentId' => '513200',
                'level' => '3',
            ),
            72 => 
            array (
                'id' => 2573,
                'code' => '513230',
                'name' => '壤塘县',
                'parentId' => '513200',
                'level' => '3',
            ),
            73 => 
            array (
                'id' => 2574,
                'code' => '513231',
                'name' => '阿坝县',
                'parentId' => '513200',
                'level' => '3',
            ),
            74 => 
            array (
                'id' => 2575,
                'code' => '513232',
                'name' => '若尔盖县',
                'parentId' => '513200',
                'level' => '3',
            ),
            75 => 
            array (
                'id' => 2576,
                'code' => '513233',
                'name' => '红原县',
                'parentId' => '513200',
                'level' => '3',
            ),
            76 => 
            array (
                'id' => 2577,
                'code' => '513300',
                'name' => '甘孜藏族自治州',
                'parentId' => '510000',
                'level' => '2',
            ),
            77 => 
            array (
                'id' => 2578,
                'code' => '513301',
                'name' => '康定市',
                'parentId' => '513300',
                'level' => '3',
            ),
            78 => 
            array (
                'id' => 2579,
                'code' => '513322',
                'name' => '泸定县',
                'parentId' => '513300',
                'level' => '3',
            ),
            79 => 
            array (
                'id' => 2580,
                'code' => '513323',
                'name' => '丹巴县',
                'parentId' => '513300',
                'level' => '3',
            ),
            80 => 
            array (
                'id' => 2581,
                'code' => '513324',
                'name' => '九龙县',
                'parentId' => '513300',
                'level' => '3',
            ),
            81 => 
            array (
                'id' => 2582,
                'code' => '513325',
                'name' => '雅江县',
                'parentId' => '513300',
                'level' => '3',
            ),
            82 => 
            array (
                'id' => 2583,
                'code' => '513326',
                'name' => '道孚县',
                'parentId' => '513300',
                'level' => '3',
            ),
            83 => 
            array (
                'id' => 2584,
                'code' => '513327',
                'name' => '炉霍县',
                'parentId' => '513300',
                'level' => '3',
            ),
            84 => 
            array (
                'id' => 2585,
                'code' => '513328',
                'name' => '甘孜县',
                'parentId' => '513300',
                'level' => '3',
            ),
            85 => 
            array (
                'id' => 2586,
                'code' => '513329',
                'name' => '新龙县',
                'parentId' => '513300',
                'level' => '3',
            ),
            86 => 
            array (
                'id' => 2587,
                'code' => '513330',
                'name' => '德格县',
                'parentId' => '513300',
                'level' => '3',
            ),
            87 => 
            array (
                'id' => 2588,
                'code' => '513331',
                'name' => '白玉县',
                'parentId' => '513300',
                'level' => '3',
            ),
            88 => 
            array (
                'id' => 2589,
                'code' => '513332',
                'name' => '石渠县',
                'parentId' => '513300',
                'level' => '3',
            ),
            89 => 
            array (
                'id' => 2590,
                'code' => '513333',
                'name' => '色达县',
                'parentId' => '513300',
                'level' => '3',
            ),
            90 => 
            array (
                'id' => 2591,
                'code' => '513334',
                'name' => '理塘县',
                'parentId' => '513300',
                'level' => '3',
            ),
            91 => 
            array (
                'id' => 2592,
                'code' => '513335',
                'name' => '巴塘县',
                'parentId' => '513300',
                'level' => '3',
            ),
            92 => 
            array (
                'id' => 2593,
                'code' => '513336',
                'name' => '乡城县',
                'parentId' => '513300',
                'level' => '3',
            ),
            93 => 
            array (
                'id' => 2594,
                'code' => '513337',
                'name' => '稻城县',
                'parentId' => '513300',
                'level' => '3',
            ),
            94 => 
            array (
                'id' => 2595,
                'code' => '513338',
                'name' => '得荣县',
                'parentId' => '513300',
                'level' => '3',
            ),
            95 => 
            array (
                'id' => 2596,
                'code' => '513400',
                'name' => '凉山彝族自治州',
                'parentId' => '510000',
                'level' => '2',
            ),
            96 => 
            array (
                'id' => 2597,
                'code' => '513401',
                'name' => '西昌市',
                'parentId' => '513400',
                'level' => '3',
            ),
            97 => 
            array (
                'id' => 2598,
                'code' => '513422',
                'name' => '木里藏族自治县',
                'parentId' => '513400',
                'level' => '3',
            ),
            98 => 
            array (
                'id' => 2599,
                'code' => '513423',
                'name' => '盐源县',
                'parentId' => '513400',
                'level' => '3',
            ),
            99 => 
            array (
                'id' => 2600,
                'code' => '513424',
                'name' => '德昌县',
                'parentId' => '513400',
                'level' => '3',
            ),
            100 => 
            array (
                'id' => 2601,
                'code' => '513425',
                'name' => '会理县',
                'parentId' => '513400',
                'level' => '3',
            ),
            101 => 
            array (
                'id' => 2602,
                'code' => '513426',
                'name' => '会东县',
                'parentId' => '513400',
                'level' => '3',
            ),
            102 => 
            array (
                'id' => 2603,
                'code' => '513427',
                'name' => '宁南县',
                'parentId' => '513400',
                'level' => '3',
            ),
            103 => 
            array (
                'id' => 2604,
                'code' => '513428',
                'name' => '普格县',
                'parentId' => '513400',
                'level' => '3',
            ),
            104 => 
            array (
                'id' => 2605,
                'code' => '513429',
                'name' => '布拖县',
                'parentId' => '513400',
                'level' => '3',
            ),
            105 => 
            array (
                'id' => 2606,
                'code' => '513430',
                'name' => '金阳县',
                'parentId' => '513400',
                'level' => '3',
            ),
            106 => 
            array (
                'id' => 2607,
                'code' => '513431',
                'name' => '昭觉县',
                'parentId' => '513400',
                'level' => '3',
            ),
            107 => 
            array (
                'id' => 2608,
                'code' => '513432',
                'name' => '喜德县',
                'parentId' => '513400',
                'level' => '3',
            ),
            108 => 
            array (
                'id' => 2609,
                'code' => '513433',
                'name' => '冕宁县',
                'parentId' => '513400',
                'level' => '3',
            ),
            109 => 
            array (
                'id' => 2610,
                'code' => '513434',
                'name' => '越西县',
                'parentId' => '513400',
                'level' => '3',
            ),
            110 => 
            array (
                'id' => 2611,
                'code' => '513435',
                'name' => '甘洛县',
                'parentId' => '513400',
                'level' => '3',
            ),
            111 => 
            array (
                'id' => 2612,
                'code' => '513436',
                'name' => '美姑县',
                'parentId' => '513400',
                'level' => '3',
            ),
            112 => 
            array (
                'id' => 2613,
                'code' => '513437',
                'name' => '雷波县',
                'parentId' => '513400',
                'level' => '3',
            ),
            113 => 
            array (
                'id' => 2614,
                'code' => '520000',
                'name' => '贵州省',
                'parentId' => '100000',
                'level' => '1',
            ),
            114 => 
            array (
                'id' => 2615,
                'code' => '520100',
                'name' => '贵阳市',
                'parentId' => '520000',
                'level' => '2',
            ),
            115 => 
            array (
                'id' => 2616,
                'code' => '520102',
                'name' => '南明区',
                'parentId' => '520100',
                'level' => '3',
            ),
            116 => 
            array (
                'id' => 2617,
                'code' => '520103',
                'name' => '云岩区',
                'parentId' => '520100',
                'level' => '3',
            ),
            117 => 
            array (
                'id' => 2618,
                'code' => '520111',
                'name' => '花溪区',
                'parentId' => '520100',
                'level' => '3',
            ),
            118 => 
            array (
                'id' => 2619,
                'code' => '520112',
                'name' => '乌当区',
                'parentId' => '520100',
                'level' => '3',
            ),
            119 => 
            array (
                'id' => 2620,
                'code' => '520113',
                'name' => '白云区',
                'parentId' => '520100',
                'level' => '3',
            ),
            120 => 
            array (
                'id' => 2621,
                'code' => '520115',
                'name' => '观山湖区',
                'parentId' => '520100',
                'level' => '3',
            ),
            121 => 
            array (
                'id' => 2622,
                'code' => '520121',
                'name' => '开阳县',
                'parentId' => '520100',
                'level' => '3',
            ),
            122 => 
            array (
                'id' => 2623,
                'code' => '520122',
                'name' => '息烽县',
                'parentId' => '520100',
                'level' => '3',
            ),
            123 => 
            array (
                'id' => 2624,
                'code' => '520123',
                'name' => '修文县',
                'parentId' => '520100',
                'level' => '3',
            ),
            124 => 
            array (
                'id' => 2625,
                'code' => '520181',
                'name' => '清镇市',
                'parentId' => '520100',
                'level' => '3',
            ),
            125 => 
            array (
                'id' => 2626,
                'code' => '520182',
                'name' => '贵安新区',
                'parentId' => '520100',
                'level' => '3',
            ),
            126 => 
            array (
                'id' => 2627,
                'code' => '520200',
                'name' => '六盘水市',
                'parentId' => '520000',
                'level' => '2',
            ),
            127 => 
            array (
                'id' => 2628,
                'code' => '520201',
                'name' => '钟山区',
                'parentId' => '520200',
                'level' => '3',
            ),
            128 => 
            array (
                'id' => 2629,
                'code' => '520203',
                'name' => '六枝特区',
                'parentId' => '520200',
                'level' => '3',
            ),
            129 => 
            array (
                'id' => 2630,
                'code' => '520221',
                'name' => '水城县',
                'parentId' => '520200',
                'level' => '3',
            ),
            130 => 
            array (
                'id' => 2631,
                'code' => '520222',
                'name' => '盘县',
                'parentId' => '520200',
                'level' => '3',
            ),
            131 => 
            array (
                'id' => 2632,
                'code' => '520300',
                'name' => '遵义市',
                'parentId' => '520000',
                'level' => '2',
            ),
            132 => 
            array (
                'id' => 2633,
                'code' => '520302',
                'name' => '红花岗区',
                'parentId' => '520300',
                'level' => '3',
            ),
            133 => 
            array (
                'id' => 2634,
                'code' => '520303',
                'name' => '汇川区',
                'parentId' => '520300',
                'level' => '3',
            ),
            134 => 
            array (
                'id' => 2635,
                'code' => '520321',
                'name' => '遵义县',
                'parentId' => '520300',
                'level' => '3',
            ),
            135 => 
            array (
                'id' => 2636,
                'code' => '520322',
                'name' => '桐梓县',
                'parentId' => '520300',
                'level' => '3',
            ),
            136 => 
            array (
                'id' => 2637,
                'code' => '520323',
                'name' => '绥阳县',
                'parentId' => '520300',
                'level' => '3',
            ),
            137 => 
            array (
                'id' => 2638,
                'code' => '520324',
                'name' => '正安县',
                'parentId' => '520300',
                'level' => '3',
            ),
            138 => 
            array (
                'id' => 2639,
                'code' => '520325',
                'name' => '道真仡佬族苗族自治县',
                'parentId' => '520300',
                'level' => '3',
            ),
            139 => 
            array (
                'id' => 2640,
                'code' => '520326',
                'name' => '务川仡佬族苗族自治县',
                'parentId' => '520300',
                'level' => '3',
            ),
            140 => 
            array (
                'id' => 2641,
                'code' => '520327',
                'name' => '凤冈县',
                'parentId' => '520300',
                'level' => '3',
            ),
            141 => 
            array (
                'id' => 2642,
                'code' => '520328',
                'name' => '湄潭县',
                'parentId' => '520300',
                'level' => '3',
            ),
            142 => 
            array (
                'id' => 2643,
                'code' => '520329',
                'name' => '余庆县',
                'parentId' => '520300',
                'level' => '3',
            ),
            143 => 
            array (
                'id' => 2644,
                'code' => '520330',
                'name' => '习水县',
                'parentId' => '520300',
                'level' => '3',
            ),
            144 => 
            array (
                'id' => 2645,
                'code' => '520381',
                'name' => '赤水市',
                'parentId' => '520300',
                'level' => '3',
            ),
            145 => 
            array (
                'id' => 2646,
                'code' => '520382',
                'name' => '仁怀市',
                'parentId' => '520300',
                'level' => '3',
            ),
            146 => 
            array (
                'id' => 2647,
                'code' => '520400',
                'name' => '安顺市',
                'parentId' => '520000',
                'level' => '2',
            ),
            147 => 
            array (
                'id' => 2648,
                'code' => '520402',
                'name' => '西秀区',
                'parentId' => '520400',
                'level' => '3',
            ),
            148 => 
            array (
                'id' => 2649,
                'code' => '520403',
                'name' => '平坝区',
                'parentId' => '520400',
                'level' => '3',
            ),
            149 => 
            array (
                'id' => 2650,
                'code' => '520422',
                'name' => '普定县',
                'parentId' => '520400',
                'level' => '3',
            ),
            150 => 
            array (
                'id' => 2651,
                'code' => '520423',
                'name' => '镇宁布依族苗族自治县',
                'parentId' => '520400',
                'level' => '3',
            ),
            151 => 
            array (
                'id' => 2652,
                'code' => '520424',
                'name' => '关岭布依族苗族自治县',
                'parentId' => '520400',
                'level' => '3',
            ),
            152 => 
            array (
                'id' => 2653,
                'code' => '520425',
                'name' => '紫云苗族布依族自治县',
                'parentId' => '520400',
                'level' => '3',
            ),
            153 => 
            array (
                'id' => 2654,
                'code' => '520500',
                'name' => '毕节市',
                'parentId' => '520000',
                'level' => '2',
            ),
            154 => 
            array (
                'id' => 2655,
                'code' => '520502',
                'name' => '七星关区',
                'parentId' => '520500',
                'level' => '3',
            ),
            155 => 
            array (
                'id' => 2656,
                'code' => '520521',
                'name' => '大方县',
                'parentId' => '520500',
                'level' => '3',
            ),
            156 => 
            array (
                'id' => 2657,
                'code' => '520522',
                'name' => '黔西县',
                'parentId' => '520500',
                'level' => '3',
            ),
            157 => 
            array (
                'id' => 2658,
                'code' => '520523',
                'name' => '金沙县',
                'parentId' => '520500',
                'level' => '3',
            ),
            158 => 
            array (
                'id' => 2659,
                'code' => '520524',
                'name' => '织金县',
                'parentId' => '520500',
                'level' => '3',
            ),
            159 => 
            array (
                'id' => 2660,
                'code' => '520525',
                'name' => '纳雍县',
                'parentId' => '520500',
                'level' => '3',
            ),
            160 => 
            array (
                'id' => 2661,
                'code' => '520526',
                'name' => '威宁彝族回族苗族自治县',
                'parentId' => '520500',
                'level' => '3',
            ),
            161 => 
            array (
                'id' => 2662,
                'code' => '520527',
                'name' => '赫章县',
                'parentId' => '520500',
                'level' => '3',
            ),
            162 => 
            array (
                'id' => 2663,
                'code' => '520600',
                'name' => '铜仁市',
                'parentId' => '520000',
                'level' => '2',
            ),
            163 => 
            array (
                'id' => 2664,
                'code' => '520602',
                'name' => '碧江区',
                'parentId' => '520600',
                'level' => '3',
            ),
            164 => 
            array (
                'id' => 2665,
                'code' => '520603',
                'name' => '万山区',
                'parentId' => '520600',
                'level' => '3',
            ),
            165 => 
            array (
                'id' => 2666,
                'code' => '520621',
                'name' => '江口县',
                'parentId' => '520600',
                'level' => '3',
            ),
            166 => 
            array (
                'id' => 2667,
                'code' => '520622',
                'name' => '玉屏侗族自治县',
                'parentId' => '520600',
                'level' => '3',
            ),
            167 => 
            array (
                'id' => 2668,
                'code' => '520623',
                'name' => '石阡县',
                'parentId' => '520600',
                'level' => '3',
            ),
            168 => 
            array (
                'id' => 2669,
                'code' => '520624',
                'name' => '思南县',
                'parentId' => '520600',
                'level' => '3',
            ),
            169 => 
            array (
                'id' => 2670,
                'code' => '520625',
                'name' => '印江土家族苗族自治县',
                'parentId' => '520600',
                'level' => '3',
            ),
            170 => 
            array (
                'id' => 2671,
                'code' => '520626',
                'name' => '德江县',
                'parentId' => '520600',
                'level' => '3',
            ),
            171 => 
            array (
                'id' => 2672,
                'code' => '520627',
                'name' => '沿河土家族自治县',
                'parentId' => '520600',
                'level' => '3',
            ),
            172 => 
            array (
                'id' => 2673,
                'code' => '520628',
                'name' => '松桃苗族自治县',
                'parentId' => '520600',
                'level' => '3',
            ),
            173 => 
            array (
                'id' => 2674,
                'code' => '522300',
                'name' => '黔西南布依族苗族自治州',
                'parentId' => '520000',
                'level' => '2',
            ),
            174 => 
            array (
                'id' => 2675,
                'code' => '522301',
                'name' => '兴义市 ',
                'parentId' => '522300',
                'level' => '3',
            ),
            175 => 
            array (
                'id' => 2676,
                'code' => '522322',
                'name' => '兴仁县',
                'parentId' => '522300',
                'level' => '3',
            ),
            176 => 
            array (
                'id' => 2677,
                'code' => '522323',
                'name' => '普安县',
                'parentId' => '522300',
                'level' => '3',
            ),
            177 => 
            array (
                'id' => 2678,
                'code' => '522324',
                'name' => '晴隆县',
                'parentId' => '522300',
                'level' => '3',
            ),
            178 => 
            array (
                'id' => 2679,
                'code' => '522325',
                'name' => '贞丰县',
                'parentId' => '522300',
                'level' => '3',
            ),
            179 => 
            array (
                'id' => 2680,
                'code' => '522326',
                'name' => '望谟县',
                'parentId' => '522300',
                'level' => '3',
            ),
            180 => 
            array (
                'id' => 2681,
                'code' => '522327',
                'name' => '册亨县',
                'parentId' => '522300',
                'level' => '3',
            ),
            181 => 
            array (
                'id' => 2682,
                'code' => '522328',
                'name' => '安龙县',
                'parentId' => '522300',
                'level' => '3',
            ),
            182 => 
            array (
                'id' => 2683,
                'code' => '522600',
                'name' => '黔东南苗族侗族自治州',
                'parentId' => '520000',
                'level' => '2',
            ),
            183 => 
            array (
                'id' => 2684,
                'code' => '522601',
                'name' => '凯里市',
                'parentId' => '522600',
                'level' => '3',
            ),
            184 => 
            array (
                'id' => 2685,
                'code' => '522622',
                'name' => '黄平县',
                'parentId' => '522600',
                'level' => '3',
            ),
            185 => 
            array (
                'id' => 2686,
                'code' => '522623',
                'name' => '施秉县',
                'parentId' => '522600',
                'level' => '3',
            ),
            186 => 
            array (
                'id' => 2687,
                'code' => '522624',
                'name' => '三穗县',
                'parentId' => '522600',
                'level' => '3',
            ),
            187 => 
            array (
                'id' => 2688,
                'code' => '522625',
                'name' => '镇远县',
                'parentId' => '522600',
                'level' => '3',
            ),
            188 => 
            array (
                'id' => 2689,
                'code' => '522626',
                'name' => '岑巩县',
                'parentId' => '522600',
                'level' => '3',
            ),
            189 => 
            array (
                'id' => 2690,
                'code' => '522627',
                'name' => '天柱县',
                'parentId' => '522600',
                'level' => '3',
            ),
            190 => 
            array (
                'id' => 2691,
                'code' => '522628',
                'name' => '锦屏县',
                'parentId' => '522600',
                'level' => '3',
            ),
            191 => 
            array (
                'id' => 2692,
                'code' => '522629',
                'name' => '剑河县',
                'parentId' => '522600',
                'level' => '3',
            ),
            192 => 
            array (
                'id' => 2693,
                'code' => '522630',
                'name' => '台江县',
                'parentId' => '522600',
                'level' => '3',
            ),
            193 => 
            array (
                'id' => 2694,
                'code' => '522631',
                'name' => '黎平县',
                'parentId' => '522600',
                'level' => '3',
            ),
            194 => 
            array (
                'id' => 2695,
                'code' => '522632',
                'name' => '榕江县',
                'parentId' => '522600',
                'level' => '3',
            ),
            195 => 
            array (
                'id' => 2696,
                'code' => '522633',
                'name' => '从江县',
                'parentId' => '522600',
                'level' => '3',
            ),
            196 => 
            array (
                'id' => 2697,
                'code' => '522634',
                'name' => '雷山县',
                'parentId' => '522600',
                'level' => '3',
            ),
            197 => 
            array (
                'id' => 2698,
                'code' => '522635',
                'name' => '麻江县',
                'parentId' => '522600',
                'level' => '3',
            ),
            198 => 
            array (
                'id' => 2699,
                'code' => '522636',
                'name' => '丹寨县',
                'parentId' => '522600',
                'level' => '3',
            ),
            199 => 
            array (
                'id' => 2700,
                'code' => '522700',
                'name' => '黔南布依族苗族自治州',
                'parentId' => '520000',
                'level' => '2',
            ),
            200 => 
            array (
                'id' => 2701,
                'code' => '522701',
                'name' => '都匀市',
                'parentId' => '522700',
                'level' => '3',
            ),
            201 => 
            array (
                'id' => 2702,
                'code' => '522702',
                'name' => '福泉市',
                'parentId' => '522700',
                'level' => '3',
            ),
            202 => 
            array (
                'id' => 2703,
                'code' => '522722',
                'name' => '荔波县',
                'parentId' => '522700',
                'level' => '3',
            ),
            203 => 
            array (
                'id' => 2704,
                'code' => '522723',
                'name' => '贵定县',
                'parentId' => '522700',
                'level' => '3',
            ),
            204 => 
            array (
                'id' => 2705,
                'code' => '522725',
                'name' => '瓮安县',
                'parentId' => '522700',
                'level' => '3',
            ),
            205 => 
            array (
                'id' => 2706,
                'code' => '522726',
                'name' => '独山县',
                'parentId' => '522700',
                'level' => '3',
            ),
            206 => 
            array (
                'id' => 2707,
                'code' => '522727',
                'name' => '平塘县',
                'parentId' => '522700',
                'level' => '3',
            ),
            207 => 
            array (
                'id' => 2708,
                'code' => '522728',
                'name' => '罗甸县',
                'parentId' => '522700',
                'level' => '3',
            ),
            208 => 
            array (
                'id' => 2709,
                'code' => '522729',
                'name' => '长顺县',
                'parentId' => '522700',
                'level' => '3',
            ),
            209 => 
            array (
                'id' => 2710,
                'code' => '522730',
                'name' => '龙里县',
                'parentId' => '522700',
                'level' => '3',
            ),
            210 => 
            array (
                'id' => 2711,
                'code' => '522731',
                'name' => '惠水县',
                'parentId' => '522700',
                'level' => '3',
            ),
            211 => 
            array (
                'id' => 2712,
                'code' => '522732',
                'name' => '三都水族自治县',
                'parentId' => '522700',
                'level' => '3',
            ),
            212 => 
            array (
                'id' => 2713,
                'code' => '530000',
                'name' => '云南省',
                'parentId' => '100000',
                'level' => '1',
            ),
            213 => 
            array (
                'id' => 2714,
                'code' => '530100',
                'name' => '昆明市',
                'parentId' => '530000',
                'level' => '2',
            ),
            214 => 
            array (
                'id' => 2715,
                'code' => '530102',
                'name' => '五华区',
                'parentId' => '530100',
                'level' => '3',
            ),
            215 => 
            array (
                'id' => 2716,
                'code' => '530103',
                'name' => '盘龙区',
                'parentId' => '530100',
                'level' => '3',
            ),
            216 => 
            array (
                'id' => 2717,
                'code' => '530111',
                'name' => '官渡区',
                'parentId' => '530100',
                'level' => '3',
            ),
            217 => 
            array (
                'id' => 2718,
                'code' => '530112',
                'name' => '西山区',
                'parentId' => '530100',
                'level' => '3',
            ),
            218 => 
            array (
                'id' => 2719,
                'code' => '530113',
                'name' => '东川区',
                'parentId' => '530100',
                'level' => '3',
            ),
            219 => 
            array (
                'id' => 2720,
                'code' => '530114',
                'name' => '呈贡区',
                'parentId' => '530100',
                'level' => '3',
            ),
            220 => 
            array (
                'id' => 2721,
                'code' => '530122',
                'name' => '晋宁县',
                'parentId' => '530100',
                'level' => '3',
            ),
            221 => 
            array (
                'id' => 2722,
                'code' => '530124',
                'name' => '富民县',
                'parentId' => '530100',
                'level' => '3',
            ),
            222 => 
            array (
                'id' => 2723,
                'code' => '530125',
                'name' => '宜良县',
                'parentId' => '530100',
                'level' => '3',
            ),
            223 => 
            array (
                'id' => 2724,
                'code' => '530126',
                'name' => '石林彝族自治县',
                'parentId' => '530100',
                'level' => '3',
            ),
            224 => 
            array (
                'id' => 2725,
                'code' => '530127',
                'name' => '嵩明县',
                'parentId' => '530100',
                'level' => '3',
            ),
            225 => 
            array (
                'id' => 2726,
                'code' => '530128',
                'name' => '禄劝彝族苗族自治县',
                'parentId' => '530100',
                'level' => '3',
            ),
            226 => 
            array (
                'id' => 2727,
                'code' => '530129',
                'name' => '寻甸回族彝族自治县 ',
                'parentId' => '530100',
                'level' => '3',
            ),
            227 => 
            array (
                'id' => 2728,
                'code' => '530181',
                'name' => '安宁市',
                'parentId' => '530100',
                'level' => '3',
            ),
            228 => 
            array (
                'id' => 2729,
                'code' => '530300',
                'name' => '曲靖市',
                'parentId' => '530000',
                'level' => '2',
            ),
            229 => 
            array (
                'id' => 2730,
                'code' => '530302',
                'name' => '麒麟区',
                'parentId' => '530300',
                'level' => '3',
            ),
            230 => 
            array (
                'id' => 2731,
                'code' => '530321',
                'name' => '马龙县',
                'parentId' => '530300',
                'level' => '3',
            ),
            231 => 
            array (
                'id' => 2732,
                'code' => '530322',
                'name' => '陆良县',
                'parentId' => '530300',
                'level' => '3',
            ),
            232 => 
            array (
                'id' => 2733,
                'code' => '530323',
                'name' => '师宗县',
                'parentId' => '530300',
                'level' => '3',
            ),
            233 => 
            array (
                'id' => 2734,
                'code' => '530324',
                'name' => '罗平县',
                'parentId' => '530300',
                'level' => '3',
            ),
            234 => 
            array (
                'id' => 2735,
                'code' => '530325',
                'name' => '富源县',
                'parentId' => '530300',
                'level' => '3',
            ),
            235 => 
            array (
                'id' => 2736,
                'code' => '530326',
                'name' => '会泽县',
                'parentId' => '530300',
                'level' => '3',
            ),
            236 => 
            array (
                'id' => 2737,
                'code' => '530328',
                'name' => '沾益县',
                'parentId' => '530300',
                'level' => '3',
            ),
            237 => 
            array (
                'id' => 2738,
                'code' => '530381',
                'name' => '宣威市',
                'parentId' => '530300',
                'level' => '3',
            ),
            238 => 
            array (
                'id' => 2739,
                'code' => '530400',
                'name' => '玉溪市',
                'parentId' => '530000',
                'level' => '2',
            ),
            239 => 
            array (
                'id' => 2740,
                'code' => '530402',
                'name' => '红塔区',
                'parentId' => '530400',
                'level' => '3',
            ),
            240 => 
            array (
                'id' => 2741,
                'code' => '530421',
                'name' => '江川县',
                'parentId' => '530400',
                'level' => '3',
            ),
            241 => 
            array (
                'id' => 2742,
                'code' => '530422',
                'name' => '澄江县',
                'parentId' => '530400',
                'level' => '3',
            ),
            242 => 
            array (
                'id' => 2743,
                'code' => '530423',
                'name' => '通海县',
                'parentId' => '530400',
                'level' => '3',
            ),
            243 => 
            array (
                'id' => 2744,
                'code' => '530424',
                'name' => '华宁县',
                'parentId' => '530400',
                'level' => '3',
            ),
            244 => 
            array (
                'id' => 2745,
                'code' => '530425',
                'name' => '易门县',
                'parentId' => '530400',
                'level' => '3',
            ),
            245 => 
            array (
                'id' => 2746,
                'code' => '530426',
                'name' => '峨山彝族自治县',
                'parentId' => '530400',
                'level' => '3',
            ),
            246 => 
            array (
                'id' => 2747,
                'code' => '530427',
                'name' => '新平彝族傣族自治县',
                'parentId' => '530400',
                'level' => '3',
            ),
            247 => 
            array (
                'id' => 2748,
                'code' => '530428',
                'name' => '元江哈尼族彝族傣族自治县',
                'parentId' => '530400',
                'level' => '3',
            ),
            248 => 
            array (
                'id' => 2749,
                'code' => '530500',
                'name' => '保山市',
                'parentId' => '530000',
                'level' => '2',
            ),
            249 => 
            array (
                'id' => 2750,
                'code' => '530502',
                'name' => '隆阳区',
                'parentId' => '530500',
                'level' => '3',
            ),
            250 => 
            array (
                'id' => 2751,
                'code' => '530521',
                'name' => '施甸县',
                'parentId' => '530500',
                'level' => '3',
            ),
            251 => 
            array (
                'id' => 2752,
                'code' => '530523',
                'name' => '龙陵县',
                'parentId' => '530500',
                'level' => '3',
            ),
            252 => 
            array (
                'id' => 2753,
                'code' => '530524',
                'name' => '昌宁县',
                'parentId' => '530500',
                'level' => '3',
            ),
            253 => 
            array (
                'id' => 2754,
                'code' => '530581',
                'name' => '腾冲市',
                'parentId' => '530500',
                'level' => '3',
            ),
            254 => 
            array (
                'id' => 2755,
                'code' => '530600',
                'name' => '昭通市',
                'parentId' => '530000',
                'level' => '2',
            ),
            255 => 
            array (
                'id' => 2756,
                'code' => '530602',
                'name' => '昭阳区',
                'parentId' => '530600',
                'level' => '3',
            ),
            256 => 
            array (
                'id' => 2757,
                'code' => '530621',
                'name' => '鲁甸县',
                'parentId' => '530600',
                'level' => '3',
            ),
            257 => 
            array (
                'id' => 2758,
                'code' => '530622',
                'name' => '巧家县',
                'parentId' => '530600',
                'level' => '3',
            ),
            258 => 
            array (
                'id' => 2759,
                'code' => '530623',
                'name' => '盐津县',
                'parentId' => '530600',
                'level' => '3',
            ),
            259 => 
            array (
                'id' => 2760,
                'code' => '530624',
                'name' => '大关县',
                'parentId' => '530600',
                'level' => '3',
            ),
            260 => 
            array (
                'id' => 2761,
                'code' => '530625',
                'name' => '永善县',
                'parentId' => '530600',
                'level' => '3',
            ),
            261 => 
            array (
                'id' => 2762,
                'code' => '530626',
                'name' => '绥江县',
                'parentId' => '530600',
                'level' => '3',
            ),
            262 => 
            array (
                'id' => 2763,
                'code' => '530627',
                'name' => '镇雄县',
                'parentId' => '530600',
                'level' => '3',
            ),
            263 => 
            array (
                'id' => 2764,
                'code' => '530628',
                'name' => '彝良县',
                'parentId' => '530600',
                'level' => '3',
            ),
            264 => 
            array (
                'id' => 2765,
                'code' => '530629',
                'name' => '威信县',
                'parentId' => '530600',
                'level' => '3',
            ),
            265 => 
            array (
                'id' => 2766,
                'code' => '530630',
                'name' => '水富县',
                'parentId' => '530600',
                'level' => '3',
            ),
            266 => 
            array (
                'id' => 2767,
                'code' => '530700',
                'name' => '丽江市',
                'parentId' => '530000',
                'level' => '2',
            ),
            267 => 
            array (
                'id' => 2768,
                'code' => '530702',
                'name' => '古城区',
                'parentId' => '530700',
                'level' => '3',
            ),
            268 => 
            array (
                'id' => 2769,
                'code' => '530721',
                'name' => '玉龙纳西族自治县',
                'parentId' => '530700',
                'level' => '3',
            ),
            269 => 
            array (
                'id' => 2770,
                'code' => '530722',
                'name' => '永胜县',
                'parentId' => '530700',
                'level' => '3',
            ),
            270 => 
            array (
                'id' => 2771,
                'code' => '530723',
                'name' => '华坪县',
                'parentId' => '530700',
                'level' => '3',
            ),
            271 => 
            array (
                'id' => 2772,
                'code' => '530724',
                'name' => '宁蒗彝族自治县',
                'parentId' => '530700',
                'level' => '3',
            ),
            272 => 
            array (
                'id' => 2773,
                'code' => '530800',
                'name' => '普洱市',
                'parentId' => '530000',
                'level' => '2',
            ),
            273 => 
            array (
                'id' => 2774,
                'code' => '530802',
                'name' => '思茅区',
                'parentId' => '530800',
                'level' => '3',
            ),
            274 => 
            array (
                'id' => 2775,
                'code' => '530821',
                'name' => '宁洱哈尼族彝族自治县',
                'parentId' => '530800',
                'level' => '3',
            ),
            275 => 
            array (
                'id' => 2776,
                'code' => '530822',
                'name' => '墨江哈尼族自治县',
                'parentId' => '530800',
                'level' => '3',
            ),
            276 => 
            array (
                'id' => 2777,
                'code' => '530823',
                'name' => '景东彝族自治县',
                'parentId' => '530800',
                'level' => '3',
            ),
            277 => 
            array (
                'id' => 2778,
                'code' => '530824',
                'name' => '景谷傣族彝族自治县',
                'parentId' => '530800',
                'level' => '3',
            ),
            278 => 
            array (
                'id' => 2779,
                'code' => '530825',
                'name' => '镇沅彝族哈尼族拉祜族自治县',
                'parentId' => '530800',
                'level' => '3',
            ),
            279 => 
            array (
                'id' => 2780,
                'code' => '530826',
                'name' => '江城哈尼族彝族自治县',
                'parentId' => '530800',
                'level' => '3',
            ),
            280 => 
            array (
                'id' => 2781,
                'code' => '530827',
                'name' => '孟连傣族拉祜族佤族自治县',
                'parentId' => '530800',
                'level' => '3',
            ),
            281 => 
            array (
                'id' => 2782,
                'code' => '530828',
                'name' => '澜沧拉祜族自治县',
                'parentId' => '530800',
                'level' => '3',
            ),
            282 => 
            array (
                'id' => 2783,
                'code' => '530829',
                'name' => '西盟佤族自治县',
                'parentId' => '530800',
                'level' => '3',
            ),
            283 => 
            array (
                'id' => 2784,
                'code' => '530900',
                'name' => '临沧市',
                'parentId' => '530000',
                'level' => '2',
            ),
            284 => 
            array (
                'id' => 2785,
                'code' => '530902',
                'name' => '临翔区',
                'parentId' => '530900',
                'level' => '3',
            ),
            285 => 
            array (
                'id' => 2786,
                'code' => '530921',
                'name' => '凤庆县',
                'parentId' => '530900',
                'level' => '3',
            ),
            286 => 
            array (
                'id' => 2787,
                'code' => '530922',
                'name' => '云县',
                'parentId' => '530900',
                'level' => '3',
            ),
            287 => 
            array (
                'id' => 2788,
                'code' => '530923',
                'name' => '永德县',
                'parentId' => '530900',
                'level' => '3',
            ),
            288 => 
            array (
                'id' => 2789,
                'code' => '530924',
                'name' => '镇康县',
                'parentId' => '530900',
                'level' => '3',
            ),
            289 => 
            array (
                'id' => 2790,
                'code' => '530925',
                'name' => '双江拉祜族佤族布朗族傣族自治县',
                'parentId' => '530900',
                'level' => '3',
            ),
            290 => 
            array (
                'id' => 2791,
                'code' => '530926',
                'name' => '耿马傣族佤族自治县',
                'parentId' => '530900',
                'level' => '3',
            ),
            291 => 
            array (
                'id' => 2792,
                'code' => '530927',
                'name' => '沧源佤族自治县',
                'parentId' => '530900',
                'level' => '3',
            ),
            292 => 
            array (
                'id' => 2793,
                'code' => '532300',
                'name' => '楚雄彝族自治州',
                'parentId' => '530000',
                'level' => '2',
            ),
            293 => 
            array (
                'id' => 2794,
                'code' => '532301',
                'name' => '楚雄市',
                'parentId' => '532300',
                'level' => '3',
            ),
            294 => 
            array (
                'id' => 2795,
                'code' => '532322',
                'name' => '双柏县',
                'parentId' => '532300',
                'level' => '3',
            ),
            295 => 
            array (
                'id' => 2796,
                'code' => '532323',
                'name' => '牟定县',
                'parentId' => '532300',
                'level' => '3',
            ),
            296 => 
            array (
                'id' => 2797,
                'code' => '532324',
                'name' => '南华县',
                'parentId' => '532300',
                'level' => '3',
            ),
            297 => 
            array (
                'id' => 2798,
                'code' => '532325',
                'name' => '姚安县',
                'parentId' => '532300',
                'level' => '3',
            ),
            298 => 
            array (
                'id' => 2799,
                'code' => '532326',
                'name' => '大姚县',
                'parentId' => '532300',
                'level' => '3',
            ),
            299 => 
            array (
                'id' => 2800,
                'code' => '532327',
                'name' => '永仁县',
                'parentId' => '532300',
                'level' => '3',
            ),
            300 => 
            array (
                'id' => 2801,
                'code' => '532328',
                'name' => '元谋县',
                'parentId' => '532300',
                'level' => '3',
            ),
            301 => 
            array (
                'id' => 2802,
                'code' => '532329',
                'name' => '武定县',
                'parentId' => '532300',
                'level' => '3',
            ),
            302 => 
            array (
                'id' => 2803,
                'code' => '532331',
                'name' => '禄丰县',
                'parentId' => '532300',
                'level' => '3',
            ),
            303 => 
            array (
                'id' => 2804,
                'code' => '532500',
                'name' => '红河哈尼族彝族自治州',
                'parentId' => '530000',
                'level' => '2',
            ),
            304 => 
            array (
                'id' => 2805,
                'code' => '532501',
                'name' => '个旧市',
                'parentId' => '532500',
                'level' => '3',
            ),
            305 => 
            array (
                'id' => 2806,
                'code' => '532502',
                'name' => '开远市',
                'parentId' => '532500',
                'level' => '3',
            ),
            306 => 
            array (
                'id' => 2807,
                'code' => '532503',
                'name' => '蒙自市',
                'parentId' => '532500',
                'level' => '3',
            ),
            307 => 
            array (
                'id' => 2808,
                'code' => '532504',
                'name' => '弥勒市',
                'parentId' => '532500',
                'level' => '3',
            ),
            308 => 
            array (
                'id' => 2809,
                'code' => '532523',
                'name' => '屏边苗族自治县',
                'parentId' => '532500',
                'level' => '3',
            ),
            309 => 
            array (
                'id' => 2810,
                'code' => '532524',
                'name' => '建水县',
                'parentId' => '532500',
                'level' => '3',
            ),
            310 => 
            array (
                'id' => 2811,
                'code' => '532525',
                'name' => '石屏县',
                'parentId' => '532500',
                'level' => '3',
            ),
            311 => 
            array (
                'id' => 2812,
                'code' => '532527',
                'name' => '泸西县',
                'parentId' => '532500',
                'level' => '3',
            ),
            312 => 
            array (
                'id' => 2813,
                'code' => '532528',
                'name' => '元阳县',
                'parentId' => '532500',
                'level' => '3',
            ),
            313 => 
            array (
                'id' => 2814,
                'code' => '532529',
                'name' => '红河县',
                'parentId' => '532500',
                'level' => '3',
            ),
            314 => 
            array (
                'id' => 2815,
                'code' => '532530',
                'name' => '金平苗族瑶族傣族自治县',
                'parentId' => '532500',
                'level' => '3',
            ),
            315 => 
            array (
                'id' => 2816,
                'code' => '532531',
                'name' => '绿春县',
                'parentId' => '532500',
                'level' => '3',
            ),
            316 => 
            array (
                'id' => 2817,
                'code' => '532532',
                'name' => '河口瑶族自治县',
                'parentId' => '532500',
                'level' => '3',
            ),
            317 => 
            array (
                'id' => 2818,
                'code' => '532600',
                'name' => '文山壮族苗族自治州',
                'parentId' => '530000',
                'level' => '2',
            ),
            318 => 
            array (
                'id' => 2819,
                'code' => '532601',
                'name' => '文山市',
                'parentId' => '532600',
                'level' => '3',
            ),
            319 => 
            array (
                'id' => 2820,
                'code' => '532622',
                'name' => '砚山县',
                'parentId' => '532600',
                'level' => '3',
            ),
            320 => 
            array (
                'id' => 2821,
                'code' => '532623',
                'name' => '西畴县',
                'parentId' => '532600',
                'level' => '3',
            ),
            321 => 
            array (
                'id' => 2822,
                'code' => '532624',
                'name' => '麻栗坡县',
                'parentId' => '532600',
                'level' => '3',
            ),
            322 => 
            array (
                'id' => 2823,
                'code' => '532625',
                'name' => '马关县',
                'parentId' => '532600',
                'level' => '3',
            ),
            323 => 
            array (
                'id' => 2824,
                'code' => '532626',
                'name' => '丘北县',
                'parentId' => '532600',
                'level' => '3',
            ),
            324 => 
            array (
                'id' => 2825,
                'code' => '532627',
                'name' => '广南县',
                'parentId' => '532600',
                'level' => '3',
            ),
            325 => 
            array (
                'id' => 2826,
                'code' => '532628',
                'name' => '富宁县',
                'parentId' => '532600',
                'level' => '3',
            ),
            326 => 
            array (
                'id' => 2827,
                'code' => '532800',
                'name' => '西双版纳傣族自治州',
                'parentId' => '530000',
                'level' => '2',
            ),
            327 => 
            array (
                'id' => 2828,
                'code' => '532801',
                'name' => '景洪市',
                'parentId' => '532800',
                'level' => '3',
            ),
            328 => 
            array (
                'id' => 2829,
                'code' => '532822',
                'name' => '勐海县',
                'parentId' => '532800',
                'level' => '3',
            ),
            329 => 
            array (
                'id' => 2830,
                'code' => '532823',
                'name' => '勐腊县',
                'parentId' => '532800',
                'level' => '3',
            ),
            330 => 
            array (
                'id' => 2831,
                'code' => '532900',
                'name' => '大理白族自治州',
                'parentId' => '530000',
                'level' => '2',
            ),
            331 => 
            array (
                'id' => 2832,
                'code' => '532901',
                'name' => '大理市',
                'parentId' => '532900',
                'level' => '3',
            ),
            332 => 
            array (
                'id' => 2833,
                'code' => '532922',
                'name' => '漾濞彝族自治县',
                'parentId' => '532900',
                'level' => '3',
            ),
            333 => 
            array (
                'id' => 2834,
                'code' => '532923',
                'name' => '祥云县',
                'parentId' => '532900',
                'level' => '3',
            ),
            334 => 
            array (
                'id' => 2835,
                'code' => '532924',
                'name' => '宾川县',
                'parentId' => '532900',
                'level' => '3',
            ),
            335 => 
            array (
                'id' => 2836,
                'code' => '532925',
                'name' => '弥渡县',
                'parentId' => '532900',
                'level' => '3',
            ),
            336 => 
            array (
                'id' => 2837,
                'code' => '532926',
                'name' => '南涧彝族自治县',
                'parentId' => '532900',
                'level' => '3',
            ),
            337 => 
            array (
                'id' => 2838,
                'code' => '532927',
                'name' => '巍山彝族回族自治县',
                'parentId' => '532900',
                'level' => '3',
            ),
            338 => 
            array (
                'id' => 2839,
                'code' => '532928',
                'name' => '永平县',
                'parentId' => '532900',
                'level' => '3',
            ),
            339 => 
            array (
                'id' => 2840,
                'code' => '532929',
                'name' => '云龙县',
                'parentId' => '532900',
                'level' => '3',
            ),
            340 => 
            array (
                'id' => 2841,
                'code' => '532930',
                'name' => '洱源县',
                'parentId' => '532900',
                'level' => '3',
            ),
            341 => 
            array (
                'id' => 2842,
                'code' => '532931',
                'name' => '剑川县',
                'parentId' => '532900',
                'level' => '3',
            ),
            342 => 
            array (
                'id' => 2843,
                'code' => '532932',
                'name' => '鹤庆县',
                'parentId' => '532900',
                'level' => '3',
            ),
            343 => 
            array (
                'id' => 2844,
                'code' => '533100',
                'name' => '德宏傣族景颇族自治州',
                'parentId' => '530000',
                'level' => '2',
            ),
            344 => 
            array (
                'id' => 2845,
                'code' => '533102',
                'name' => '瑞丽市',
                'parentId' => '533100',
                'level' => '3',
            ),
            345 => 
            array (
                'id' => 2846,
                'code' => '533103',
                'name' => '芒市',
                'parentId' => '533100',
                'level' => '3',
            ),
            346 => 
            array (
                'id' => 2847,
                'code' => '533122',
                'name' => '梁河县',
                'parentId' => '533100',
                'level' => '3',
            ),
            347 => 
            array (
                'id' => 2848,
                'code' => '533123',
                'name' => '盈江县',
                'parentId' => '533100',
                'level' => '3',
            ),
            348 => 
            array (
                'id' => 2849,
                'code' => '533124',
                'name' => '陇川县',
                'parentId' => '533100',
                'level' => '3',
            ),
            349 => 
            array (
                'id' => 2850,
                'code' => '533300',
                'name' => '怒江傈僳族自治州',
                'parentId' => '530000',
                'level' => '2',
            ),
            350 => 
            array (
                'id' => 2851,
                'code' => '533321',
                'name' => '泸水县',
                'parentId' => '533300',
                'level' => '3',
            ),
            351 => 
            array (
                'id' => 2852,
                'code' => '533323',
                'name' => '福贡县',
                'parentId' => '533300',
                'level' => '3',
            ),
            352 => 
            array (
                'id' => 2853,
                'code' => '533324',
                'name' => '贡山独龙族怒族自治县',
                'parentId' => '533300',
                'level' => '3',
            ),
            353 => 
            array (
                'id' => 2854,
                'code' => '533325',
                'name' => '兰坪白族普米族自治县',
                'parentId' => '533300',
                'level' => '3',
            ),
            354 => 
            array (
                'id' => 2855,
                'code' => '533400',
                'name' => '迪庆藏族自治州',
                'parentId' => '530000',
                'level' => '2',
            ),
            355 => 
            array (
                'id' => 2856,
                'code' => '533401',
                'name' => '香格里拉市',
                'parentId' => '533400',
                'level' => '3',
            ),
            356 => 
            array (
                'id' => 2857,
                'code' => '533422',
                'name' => '德钦县',
                'parentId' => '533400',
                'level' => '3',
            ),
            357 => 
            array (
                'id' => 2858,
                'code' => '533423',
                'name' => '维西傈僳族自治县',
                'parentId' => '533400',
                'level' => '3',
            ),
            358 => 
            array (
                'id' => 2859,
                'code' => '540000',
                'name' => '西藏自治区',
                'parentId' => '100000',
                'level' => '1',
            ),
            359 => 
            array (
                'id' => 2860,
                'code' => '540100',
                'name' => '拉萨市',
                'parentId' => '540000',
                'level' => '2',
            ),
            360 => 
            array (
                'id' => 2861,
                'code' => '540102',
                'name' => '城关区',
                'parentId' => '540100',
                'level' => '3',
            ),
            361 => 
            array (
                'id' => 2862,
                'code' => '540121',
                'name' => '林周县',
                'parentId' => '540100',
                'level' => '3',
            ),
            362 => 
            array (
                'id' => 2863,
                'code' => '540122',
                'name' => '当雄县',
                'parentId' => '540100',
                'level' => '3',
            ),
            363 => 
            array (
                'id' => 2864,
                'code' => '540123',
                'name' => '尼木县',
                'parentId' => '540100',
                'level' => '3',
            ),
            364 => 
            array (
                'id' => 2865,
                'code' => '540124',
                'name' => '曲水县',
                'parentId' => '540100',
                'level' => '3',
            ),
            365 => 
            array (
                'id' => 2866,
                'code' => '540125',
                'name' => '堆龙德庆县',
                'parentId' => '540100',
                'level' => '3',
            ),
            366 => 
            array (
                'id' => 2867,
                'code' => '540126',
                'name' => '达孜县',
                'parentId' => '540100',
                'level' => '3',
            ),
            367 => 
            array (
                'id' => 2868,
                'code' => '540127',
                'name' => '墨竹工卡县',
                'parentId' => '540100',
                'level' => '3',
            ),
            368 => 
            array (
                'id' => 2869,
                'code' => '540200',
                'name' => '日喀则市',
                'parentId' => '540000',
                'level' => '2',
            ),
            369 => 
            array (
                'id' => 2870,
                'code' => '540202',
                'name' => '桑珠孜区',
                'parentId' => '540200',
                'level' => '3',
            ),
            370 => 
            array (
                'id' => 2871,
                'code' => '540221',
                'name' => '南木林县',
                'parentId' => '540200',
                'level' => '3',
            ),
            371 => 
            array (
                'id' => 2872,
                'code' => '540222',
                'name' => '江孜县',
                'parentId' => '540200',
                'level' => '3',
            ),
            372 => 
            array (
                'id' => 2873,
                'code' => '540223',
                'name' => '定日县',
                'parentId' => '540200',
                'level' => '3',
            ),
            373 => 
            array (
                'id' => 2874,
                'code' => '540224',
                'name' => '萨迦县',
                'parentId' => '540200',
                'level' => '3',
            ),
            374 => 
            array (
                'id' => 2875,
                'code' => '540225',
                'name' => '拉孜县',
                'parentId' => '540200',
                'level' => '3',
            ),
            375 => 
            array (
                'id' => 2876,
                'code' => '540226',
                'name' => '昂仁县',
                'parentId' => '540200',
                'level' => '3',
            ),
            376 => 
            array (
                'id' => 2877,
                'code' => '540227',
                'name' => '谢通门县',
                'parentId' => '540200',
                'level' => '3',
            ),
            377 => 
            array (
                'id' => 2878,
                'code' => '540228',
                'name' => '白朗县',
                'parentId' => '540200',
                'level' => '3',
            ),
            378 => 
            array (
                'id' => 2879,
                'code' => '540229',
                'name' => '仁布县',
                'parentId' => '540200',
                'level' => '3',
            ),
            379 => 
            array (
                'id' => 2880,
                'code' => '540230',
                'name' => '康马县',
                'parentId' => '540200',
                'level' => '3',
            ),
            380 => 
            array (
                'id' => 2881,
                'code' => '540231',
                'name' => '定结县',
                'parentId' => '540200',
                'level' => '3',
            ),
            381 => 
            array (
                'id' => 2882,
                'code' => '540232',
                'name' => '仲巴县',
                'parentId' => '540200',
                'level' => '3',
            ),
            382 => 
            array (
                'id' => 2883,
                'code' => '540233',
                'name' => '亚东县',
                'parentId' => '540200',
                'level' => '3',
            ),
            383 => 
            array (
                'id' => 2884,
                'code' => '540234',
                'name' => '吉隆县',
                'parentId' => '540200',
                'level' => '3',
            ),
            384 => 
            array (
                'id' => 2885,
                'code' => '540235',
                'name' => '聂拉木县',
                'parentId' => '540200',
                'level' => '3',
            ),
            385 => 
            array (
                'id' => 2886,
                'code' => '540236',
                'name' => '萨嘎县',
                'parentId' => '540200',
                'level' => '3',
            ),
            386 => 
            array (
                'id' => 2887,
                'code' => '540237',
                'name' => '岗巴县',
                'parentId' => '540200',
                'level' => '3',
            ),
            387 => 
            array (
                'id' => 2888,
                'code' => '540300',
                'name' => '昌都市',
                'parentId' => '540000',
                'level' => '2',
            ),
            388 => 
            array (
                'id' => 2889,
                'code' => '540302',
                'name' => '卡若区',
                'parentId' => '540300',
                'level' => '3',
            ),
            389 => 
            array (
                'id' => 2890,
                'code' => '540321',
                'name' => '江达县',
                'parentId' => '540300',
                'level' => '3',
            ),
            390 => 
            array (
                'id' => 2891,
                'code' => '540322',
                'name' => '贡觉县',
                'parentId' => '540300',
                'level' => '3',
            ),
            391 => 
            array (
                'id' => 2892,
                'code' => '540323',
                'name' => '类乌齐县',
                'parentId' => '540300',
                'level' => '3',
            ),
            392 => 
            array (
                'id' => 2893,
                'code' => '540324',
                'name' => '丁青县',
                'parentId' => '540300',
                'level' => '3',
            ),
            393 => 
            array (
                'id' => 2894,
                'code' => '540325',
                'name' => '察雅县',
                'parentId' => '540300',
                'level' => '3',
            ),
            394 => 
            array (
                'id' => 2895,
                'code' => '540326',
                'name' => '八宿县',
                'parentId' => '540300',
                'level' => '3',
            ),
            395 => 
            array (
                'id' => 2896,
                'code' => '540327',
                'name' => '左贡县',
                'parentId' => '540300',
                'level' => '3',
            ),
            396 => 
            array (
                'id' => 2897,
                'code' => '540328',
                'name' => '芒康县',
                'parentId' => '540300',
                'level' => '3',
            ),
            397 => 
            array (
                'id' => 2898,
                'code' => '540329',
                'name' => '洛隆县',
                'parentId' => '540300',
                'level' => '3',
            ),
            398 => 
            array (
                'id' => 2899,
                'code' => '540330',
                'name' => '边坝县',
                'parentId' => '540300',
                'level' => '3',
            ),
            399 => 
            array (
                'id' => 2900,
                'code' => '540400',
                'name' => '林芝市',
                'parentId' => '540000',
                'level' => '2',
            ),
            400 => 
            array (
                'id' => 2901,
                'code' => '540402',
                'name' => '巴宜区',
                'parentId' => '540400',
                'level' => '3',
            ),
            401 => 
            array (
                'id' => 2902,
                'code' => '540421',
                'name' => '工布江达县',
                'parentId' => '540400',
                'level' => '3',
            ),
            402 => 
            array (
                'id' => 2903,
                'code' => '540422',
                'name' => '米林县',
                'parentId' => '540400',
                'level' => '3',
            ),
            403 => 
            array (
                'id' => 2904,
                'code' => '540423',
                'name' => '墨脱县',
                'parentId' => '540400',
                'level' => '3',
            ),
            404 => 
            array (
                'id' => 2905,
                'code' => '540424',
                'name' => '波密县',
                'parentId' => '540400',
                'level' => '3',
            ),
            405 => 
            array (
                'id' => 2906,
                'code' => '540425',
                'name' => '察隅县',
                'parentId' => '540400',
                'level' => '3',
            ),
            406 => 
            array (
                'id' => 2907,
                'code' => '540426',
                'name' => '朗县',
                'parentId' => '540400',
                'level' => '3',
            ),
            407 => 
            array (
                'id' => 2908,
                'code' => '542200',
                'name' => '山南地区',
                'parentId' => '540000',
                'level' => '2',
            ),
            408 => 
            array (
                'id' => 2909,
                'code' => '542221',
                'name' => '乃东县',
                'parentId' => '542200',
                'level' => '3',
            ),
            409 => 
            array (
                'id' => 2910,
                'code' => '542222',
                'name' => '扎囊县',
                'parentId' => '542200',
                'level' => '3',
            ),
            410 => 
            array (
                'id' => 2911,
                'code' => '542223',
                'name' => '贡嘎县',
                'parentId' => '542200',
                'level' => '3',
            ),
            411 => 
            array (
                'id' => 2912,
                'code' => '542224',
                'name' => '桑日县',
                'parentId' => '542200',
                'level' => '3',
            ),
            412 => 
            array (
                'id' => 2913,
                'code' => '542225',
                'name' => '琼结县',
                'parentId' => '542200',
                'level' => '3',
            ),
            413 => 
            array (
                'id' => 2914,
                'code' => '542226',
                'name' => '曲松县',
                'parentId' => '542200',
                'level' => '3',
            ),
            414 => 
            array (
                'id' => 2915,
                'code' => '542227',
                'name' => '措美县',
                'parentId' => '542200',
                'level' => '3',
            ),
            415 => 
            array (
                'id' => 2916,
                'code' => '542228',
                'name' => '洛扎县',
                'parentId' => '542200',
                'level' => '3',
            ),
            416 => 
            array (
                'id' => 2917,
                'code' => '542229',
                'name' => '加查县',
                'parentId' => '542200',
                'level' => '3',
            ),
            417 => 
            array (
                'id' => 2918,
                'code' => '542231',
                'name' => '隆子县',
                'parentId' => '542200',
                'level' => '3',
            ),
            418 => 
            array (
                'id' => 2919,
                'code' => '542232',
                'name' => '错那县',
                'parentId' => '542200',
                'level' => '3',
            ),
            419 => 
            array (
                'id' => 2920,
                'code' => '542233',
                'name' => '浪卡子县',
                'parentId' => '542200',
                'level' => '3',
            ),
            420 => 
            array (
                'id' => 2921,
                'code' => '542400',
                'name' => '那曲地区',
                'parentId' => '540000',
                'level' => '2',
            ),
            421 => 
            array (
                'id' => 2922,
                'code' => '542421',
                'name' => '那曲县',
                'parentId' => '542400',
                'level' => '3',
            ),
            422 => 
            array (
                'id' => 2923,
                'code' => '542422',
                'name' => '嘉黎县',
                'parentId' => '542400',
                'level' => '3',
            ),
            423 => 
            array (
                'id' => 2924,
                'code' => '542423',
                'name' => '比如县',
                'parentId' => '542400',
                'level' => '3',
            ),
            424 => 
            array (
                'id' => 2925,
                'code' => '542424',
                'name' => '聂荣县',
                'parentId' => '542400',
                'level' => '3',
            ),
            425 => 
            array (
                'id' => 2926,
                'code' => '542425',
                'name' => '安多县',
                'parentId' => '542400',
                'level' => '3',
            ),
            426 => 
            array (
                'id' => 2927,
                'code' => '542426',
                'name' => '申扎县',
                'parentId' => '542400',
                'level' => '3',
            ),
            427 => 
            array (
                'id' => 2928,
                'code' => '542427',
                'name' => '索县',
                'parentId' => '542400',
                'level' => '3',
            ),
            428 => 
            array (
                'id' => 2929,
                'code' => '542428',
                'name' => '班戈县',
                'parentId' => '542400',
                'level' => '3',
            ),
            429 => 
            array (
                'id' => 2930,
                'code' => '542429',
                'name' => '巴青县',
                'parentId' => '542400',
                'level' => '3',
            ),
            430 => 
            array (
                'id' => 2931,
                'code' => '542430',
                'name' => '尼玛县',
                'parentId' => '542400',
                'level' => '3',
            ),
            431 => 
            array (
                'id' => 2932,
                'code' => '542431',
                'name' => '双湖县',
                'parentId' => '542400',
                'level' => '3',
            ),
            432 => 
            array (
                'id' => 2933,
                'code' => '542500',
                'name' => '阿里地区',
                'parentId' => '540000',
                'level' => '2',
            ),
            433 => 
            array (
                'id' => 2934,
                'code' => '542521',
                'name' => '普兰县',
                'parentId' => '542500',
                'level' => '3',
            ),
            434 => 
            array (
                'id' => 2935,
                'code' => '542522',
                'name' => '札达县',
                'parentId' => '542500',
                'level' => '3',
            ),
            435 => 
            array (
                'id' => 2936,
                'code' => '542523',
                'name' => '噶尔县',
                'parentId' => '542500',
                'level' => '3',
            ),
            436 => 
            array (
                'id' => 2937,
                'code' => '542524',
                'name' => '日土县',
                'parentId' => '542500',
                'level' => '3',
            ),
            437 => 
            array (
                'id' => 2938,
                'code' => '542525',
                'name' => '革吉县',
                'parentId' => '542500',
                'level' => '3',
            ),
            438 => 
            array (
                'id' => 2939,
                'code' => '542526',
                'name' => '改则县',
                'parentId' => '542500',
                'level' => '3',
            ),
            439 => 
            array (
                'id' => 2940,
                'code' => '542527',
                'name' => '措勤县',
                'parentId' => '542500',
                'level' => '3',
            ),
            440 => 
            array (
                'id' => 2941,
                'code' => '610000',
                'name' => '陕西省',
                'parentId' => '100000',
                'level' => '1',
            ),
            441 => 
            array (
                'id' => 2942,
                'code' => '610100',
                'name' => '西安市',
                'parentId' => '610000',
                'level' => '2',
            ),
            442 => 
            array (
                'id' => 2943,
                'code' => '610102',
                'name' => '新城区',
                'parentId' => '610100',
                'level' => '3',
            ),
            443 => 
            array (
                'id' => 2944,
                'code' => '610103',
                'name' => '碑林区',
                'parentId' => '610100',
                'level' => '3',
            ),
            444 => 
            array (
                'id' => 2945,
                'code' => '610104',
                'name' => '莲湖区',
                'parentId' => '610100',
                'level' => '3',
            ),
            445 => 
            array (
                'id' => 2946,
                'code' => '610111',
                'name' => '灞桥区',
                'parentId' => '610100',
                'level' => '3',
            ),
            446 => 
            array (
                'id' => 2947,
                'code' => '610112',
                'name' => '未央区',
                'parentId' => '610100',
                'level' => '3',
            ),
            447 => 
            array (
                'id' => 2948,
                'code' => '610113',
                'name' => '雁塔区',
                'parentId' => '610100',
                'level' => '3',
            ),
            448 => 
            array (
                'id' => 2949,
                'code' => '610114',
                'name' => '阎良区',
                'parentId' => '610100',
                'level' => '3',
            ),
            449 => 
            array (
                'id' => 2950,
                'code' => '610115',
                'name' => '临潼区',
                'parentId' => '610100',
                'level' => '3',
            ),
            450 => 
            array (
                'id' => 2951,
                'code' => '610116',
                'name' => '长安区',
                'parentId' => '610100',
                'level' => '3',
            ),
            451 => 
            array (
                'id' => 2952,
                'code' => '610117',
                'name' => '高陵区',
                'parentId' => '610100',
                'level' => '3',
            ),
            452 => 
            array (
                'id' => 2953,
                'code' => '610122',
                'name' => '蓝田县',
                'parentId' => '610100',
                'level' => '3',
            ),
            453 => 
            array (
                'id' => 2954,
                'code' => '610124',
                'name' => '周至县',
                'parentId' => '610100',
                'level' => '3',
            ),
            454 => 
            array (
                'id' => 2955,
                'code' => '610125',
                'name' => '户县',
                'parentId' => '610100',
                'level' => '3',
            ),
            455 => 
            array (
                'id' => 2956,
                'code' => '610127',
                'name' => '曲江新区',
                'parentId' => '610100',
                'level' => '3',
            ),
            456 => 
            array (
                'id' => 2957,
                'code' => '610200',
                'name' => '铜川市',
                'parentId' => '610000',
                'level' => '2',
            ),
            457 => 
            array (
                'id' => 2958,
                'code' => '610202',
                'name' => '王益区',
                'parentId' => '610200',
                'level' => '3',
            ),
            458 => 
            array (
                'id' => 2959,
                'code' => '610203',
                'name' => '印台区',
                'parentId' => '610200',
                'level' => '3',
            ),
            459 => 
            array (
                'id' => 2960,
                'code' => '610204',
                'name' => '耀州区',
                'parentId' => '610200',
                'level' => '3',
            ),
            460 => 
            array (
                'id' => 2961,
                'code' => '610222',
                'name' => '宜君县',
                'parentId' => '610200',
                'level' => '3',
            ),
            461 => 
            array (
                'id' => 2962,
                'code' => '610300',
                'name' => '宝鸡市',
                'parentId' => '610000',
                'level' => '2',
            ),
            462 => 
            array (
                'id' => 2963,
                'code' => '610302',
                'name' => '渭滨区',
                'parentId' => '610300',
                'level' => '3',
            ),
            463 => 
            array (
                'id' => 2964,
                'code' => '610303',
                'name' => '金台区',
                'parentId' => '610300',
                'level' => '3',
            ),
            464 => 
            array (
                'id' => 2965,
                'code' => '610304',
                'name' => '陈仓区',
                'parentId' => '610300',
                'level' => '3',
            ),
            465 => 
            array (
                'id' => 2966,
                'code' => '610322',
                'name' => '凤翔县',
                'parentId' => '610300',
                'level' => '3',
            ),
            466 => 
            array (
                'id' => 2967,
                'code' => '610323',
                'name' => '岐山县',
                'parentId' => '610300',
                'level' => '3',
            ),
            467 => 
            array (
                'id' => 2968,
                'code' => '610324',
                'name' => '扶风县',
                'parentId' => '610300',
                'level' => '3',
            ),
            468 => 
            array (
                'id' => 2969,
                'code' => '610326',
                'name' => '眉县',
                'parentId' => '610300',
                'level' => '3',
            ),
            469 => 
            array (
                'id' => 2970,
                'code' => '610327',
                'name' => '陇县',
                'parentId' => '610300',
                'level' => '3',
            ),
            470 => 
            array (
                'id' => 2971,
                'code' => '610328',
                'name' => '千阳县',
                'parentId' => '610300',
                'level' => '3',
            ),
            471 => 
            array (
                'id' => 2972,
                'code' => '610329',
                'name' => '麟游县',
                'parentId' => '610300',
                'level' => '3',
            ),
            472 => 
            array (
                'id' => 2973,
                'code' => '610330',
                'name' => '凤县',
                'parentId' => '610300',
                'level' => '3',
            ),
            473 => 
            array (
                'id' => 2974,
                'code' => '610331',
                'name' => '太白县',
                'parentId' => '610300',
                'level' => '3',
            ),
            474 => 
            array (
                'id' => 2975,
                'code' => '610400',
                'name' => '咸阳市',
                'parentId' => '610000',
                'level' => '2',
            ),
            475 => 
            array (
                'id' => 2976,
                'code' => '610402',
                'name' => '秦都区',
                'parentId' => '610400',
                'level' => '3',
            ),
            476 => 
            array (
                'id' => 2977,
                'code' => '610403',
                'name' => '杨陵区',
                'parentId' => '610400',
                'level' => '3',
            ),
            477 => 
            array (
                'id' => 2978,
                'code' => '610404',
                'name' => '渭城区',
                'parentId' => '610400',
                'level' => '3',
            ),
            478 => 
            array (
                'id' => 2979,
                'code' => '610422',
                'name' => '三原县',
                'parentId' => '610400',
                'level' => '3',
            ),
            479 => 
            array (
                'id' => 2980,
                'code' => '610423',
                'name' => '泾阳县',
                'parentId' => '610400',
                'level' => '3',
            ),
            480 => 
            array (
                'id' => 2981,
                'code' => '610424',
                'name' => '乾县',
                'parentId' => '610400',
                'level' => '3',
            ),
            481 => 
            array (
                'id' => 2982,
                'code' => '610425',
                'name' => '礼泉县',
                'parentId' => '610400',
                'level' => '3',
            ),
            482 => 
            array (
                'id' => 2983,
                'code' => '610426',
                'name' => '永寿县',
                'parentId' => '610400',
                'level' => '3',
            ),
            483 => 
            array (
                'id' => 2984,
                'code' => '610427',
                'name' => '彬县',
                'parentId' => '610400',
                'level' => '3',
            ),
            484 => 
            array (
                'id' => 2985,
                'code' => '610428',
                'name' => '长武县',
                'parentId' => '610400',
                'level' => '3',
            ),
            485 => 
            array (
                'id' => 2986,
                'code' => '610429',
                'name' => '旬邑县',
                'parentId' => '610400',
                'level' => '3',
            ),
            486 => 
            array (
                'id' => 2987,
                'code' => '610430',
                'name' => '淳化县',
                'parentId' => '610400',
                'level' => '3',
            ),
            487 => 
            array (
                'id' => 2988,
                'code' => '610431',
                'name' => '武功县',
                'parentId' => '610400',
                'level' => '3',
            ),
            488 => 
            array (
                'id' => 2989,
                'code' => '610481',
                'name' => '兴平市',
                'parentId' => '610400',
                'level' => '3',
            ),
            489 => 
            array (
                'id' => 2990,
                'code' => '610500',
                'name' => '渭南市',
                'parentId' => '610000',
                'level' => '2',
            ),
            490 => 
            array (
                'id' => 2991,
                'code' => '610502',
                'name' => '临渭区',
                'parentId' => '610500',
                'level' => '3',
            ),
            491 => 
            array (
                'id' => 2992,
                'code' => '610521',
                'name' => '华县',
                'parentId' => '610500',
                'level' => '3',
            ),
            492 => 
            array (
                'id' => 2993,
                'code' => '610522',
                'name' => '潼关县',
                'parentId' => '610500',
                'level' => '3',
            ),
            493 => 
            array (
                'id' => 2994,
                'code' => '610523',
                'name' => '大荔县',
                'parentId' => '610500',
                'level' => '3',
            ),
            494 => 
            array (
                'id' => 2995,
                'code' => '610524',
                'name' => '合阳县',
                'parentId' => '610500',
                'level' => '3',
            ),
            495 => 
            array (
                'id' => 2996,
                'code' => '610525',
                'name' => '澄城县',
                'parentId' => '610500',
                'level' => '3',
            ),
            496 => 
            array (
                'id' => 2997,
                'code' => '610526',
                'name' => '蒲城县',
                'parentId' => '610500',
                'level' => '3',
            ),
            497 => 
            array (
                'id' => 2998,
                'code' => '610527',
                'name' => '白水县',
                'parentId' => '610500',
                'level' => '3',
            ),
            498 => 
            array (
                'id' => 2999,
                'code' => '610528',
                'name' => '富平县',
                'parentId' => '610500',
                'level' => '3',
            ),
            499 => 
            array (
                'id' => 3000,
                'code' => '610581',
                'name' => '韩城市',
                'parentId' => '610500',
                'level' => '3',
            ),
        ));
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 3001,
                'code' => '610582',
                'name' => '华阴市',
                'parentId' => '610500',
                'level' => '3',
            ),
            1 => 
            array (
                'id' => 3002,
                'code' => '610600',
                'name' => '延安市',
                'parentId' => '610000',
                'level' => '2',
            ),
            2 => 
            array (
                'id' => 3003,
                'code' => '610602',
                'name' => '宝塔区',
                'parentId' => '610600',
                'level' => '3',
            ),
            3 => 
            array (
                'id' => 3004,
                'code' => '610621',
                'name' => '延长县',
                'parentId' => '610600',
                'level' => '3',
            ),
            4 => 
            array (
                'id' => 3005,
                'code' => '610622',
                'name' => '延川县',
                'parentId' => '610600',
                'level' => '3',
            ),
            5 => 
            array (
                'id' => 3006,
                'code' => '610623',
                'name' => '子长县',
                'parentId' => '610600',
                'level' => '3',
            ),
            6 => 
            array (
                'id' => 3007,
                'code' => '610624',
                'name' => '安塞县',
                'parentId' => '610600',
                'level' => '3',
            ),
            7 => 
            array (
                'id' => 3008,
                'code' => '610625',
                'name' => '志丹县',
                'parentId' => '610600',
                'level' => '3',
            ),
            8 => 
            array (
                'id' => 3009,
                'code' => '610626',
                'name' => '吴起县',
                'parentId' => '610600',
                'level' => '3',
            ),
            9 => 
            array (
                'id' => 3010,
                'code' => '610627',
                'name' => '甘泉县',
                'parentId' => '610600',
                'level' => '3',
            ),
            10 => 
            array (
                'id' => 3011,
                'code' => '610628',
                'name' => '富县',
                'parentId' => '610600',
                'level' => '3',
            ),
            11 => 
            array (
                'id' => 3012,
                'code' => '610629',
                'name' => '洛川县',
                'parentId' => '610600',
                'level' => '3',
            ),
            12 => 
            array (
                'id' => 3013,
                'code' => '610630',
                'name' => '宜川县',
                'parentId' => '610600',
                'level' => '3',
            ),
            13 => 
            array (
                'id' => 3014,
                'code' => '610631',
                'name' => '黄龙县',
                'parentId' => '610600',
                'level' => '3',
            ),
            14 => 
            array (
                'id' => 3015,
                'code' => '610632',
                'name' => '黄陵县',
                'parentId' => '610600',
                'level' => '3',
            ),
            15 => 
            array (
                'id' => 3016,
                'code' => '610700',
                'name' => '汉中市',
                'parentId' => '610000',
                'level' => '2',
            ),
            16 => 
            array (
                'id' => 3017,
                'code' => '610702',
                'name' => '汉台区',
                'parentId' => '610700',
                'level' => '3',
            ),
            17 => 
            array (
                'id' => 3018,
                'code' => '610721',
                'name' => '南郑县',
                'parentId' => '610700',
                'level' => '3',
            ),
            18 => 
            array (
                'id' => 3019,
                'code' => '610722',
                'name' => '城固县',
                'parentId' => '610700',
                'level' => '3',
            ),
            19 => 
            array (
                'id' => 3020,
                'code' => '610723',
                'name' => '洋县',
                'parentId' => '610700',
                'level' => '3',
            ),
            20 => 
            array (
                'id' => 3021,
                'code' => '610724',
                'name' => '西乡县',
                'parentId' => '610700',
                'level' => '3',
            ),
            21 => 
            array (
                'id' => 3022,
                'code' => '610725',
                'name' => '勉县',
                'parentId' => '610700',
                'level' => '3',
            ),
            22 => 
            array (
                'id' => 3023,
                'code' => '610726',
                'name' => '宁强县',
                'parentId' => '610700',
                'level' => '3',
            ),
            23 => 
            array (
                'id' => 3024,
                'code' => '610727',
                'name' => '略阳县',
                'parentId' => '610700',
                'level' => '3',
            ),
            24 => 
            array (
                'id' => 3025,
                'code' => '610728',
                'name' => '镇巴县',
                'parentId' => '610700',
                'level' => '3',
            ),
            25 => 
            array (
                'id' => 3026,
                'code' => '610729',
                'name' => '留坝县',
                'parentId' => '610700',
                'level' => '3',
            ),
            26 => 
            array (
                'id' => 3027,
                'code' => '610730',
                'name' => '佛坪县',
                'parentId' => '610700',
                'level' => '3',
            ),
            27 => 
            array (
                'id' => 3028,
                'code' => '610800',
                'name' => '榆林市',
                'parentId' => '610000',
                'level' => '2',
            ),
            28 => 
            array (
                'id' => 3029,
                'code' => '610802',
                'name' => '榆阳区',
                'parentId' => '610800',
                'level' => '3',
            ),
            29 => 
            array (
                'id' => 3030,
                'code' => '610821',
                'name' => '神木县',
                'parentId' => '610800',
                'level' => '3',
            ),
            30 => 
            array (
                'id' => 3031,
                'code' => '610822',
                'name' => '府谷县',
                'parentId' => '610800',
                'level' => '3',
            ),
            31 => 
            array (
                'id' => 3032,
                'code' => '610823',
                'name' => '横山县',
                'parentId' => '610800',
                'level' => '3',
            ),
            32 => 
            array (
                'id' => 3033,
                'code' => '610824',
                'name' => '靖边县',
                'parentId' => '610800',
                'level' => '3',
            ),
            33 => 
            array (
                'id' => 3034,
                'code' => '610825',
                'name' => '定边县',
                'parentId' => '610800',
                'level' => '3',
            ),
            34 => 
            array (
                'id' => 3035,
                'code' => '610826',
                'name' => '绥德县',
                'parentId' => '610800',
                'level' => '3',
            ),
            35 => 
            array (
                'id' => 3036,
                'code' => '610827',
                'name' => '米脂县',
                'parentId' => '610800',
                'level' => '3',
            ),
            36 => 
            array (
                'id' => 3037,
                'code' => '610828',
                'name' => '佳县',
                'parentId' => '610800',
                'level' => '3',
            ),
            37 => 
            array (
                'id' => 3038,
                'code' => '610829',
                'name' => '吴堡县',
                'parentId' => '610800',
                'level' => '3',
            ),
            38 => 
            array (
                'id' => 3039,
                'code' => '610830',
                'name' => '清涧县',
                'parentId' => '610800',
                'level' => '3',
            ),
            39 => 
            array (
                'id' => 3040,
                'code' => '610831',
                'name' => '子洲县',
                'parentId' => '610800',
                'level' => '3',
            ),
            40 => 
            array (
                'id' => 3041,
                'code' => '610900',
                'name' => '安康市',
                'parentId' => '610000',
                'level' => '2',
            ),
            41 => 
            array (
                'id' => 3042,
                'code' => '610902',
                'name' => '汉滨区',
                'parentId' => '610900',
                'level' => '3',
            ),
            42 => 
            array (
                'id' => 3043,
                'code' => '610921',
                'name' => '汉阴县',
                'parentId' => '610900',
                'level' => '3',
            ),
            43 => 
            array (
                'id' => 3044,
                'code' => '610922',
                'name' => '石泉县',
                'parentId' => '610900',
                'level' => '3',
            ),
            44 => 
            array (
                'id' => 3045,
                'code' => '610923',
                'name' => '宁陕县',
                'parentId' => '610900',
                'level' => '3',
            ),
            45 => 
            array (
                'id' => 3046,
                'code' => '610924',
                'name' => '紫阳县',
                'parentId' => '610900',
                'level' => '3',
            ),
            46 => 
            array (
                'id' => 3047,
                'code' => '610925',
                'name' => '岚皋县',
                'parentId' => '610900',
                'level' => '3',
            ),
            47 => 
            array (
                'id' => 3048,
                'code' => '610926',
                'name' => '平利县',
                'parentId' => '610900',
                'level' => '3',
            ),
            48 => 
            array (
                'id' => 3049,
                'code' => '610927',
                'name' => '镇坪县',
                'parentId' => '610900',
                'level' => '3',
            ),
            49 => 
            array (
                'id' => 3050,
                'code' => '610928',
                'name' => '旬阳县',
                'parentId' => '610900',
                'level' => '3',
            ),
            50 => 
            array (
                'id' => 3051,
                'code' => '610929',
                'name' => '白河县',
                'parentId' => '610900',
                'level' => '3',
            ),
            51 => 
            array (
                'id' => 3052,
                'code' => '611000',
                'name' => '商洛市',
                'parentId' => '610000',
                'level' => '2',
            ),
            52 => 
            array (
                'id' => 3053,
                'code' => '611002',
                'name' => '商州区',
                'parentId' => '611000',
                'level' => '3',
            ),
            53 => 
            array (
                'id' => 3054,
                'code' => '611021',
                'name' => '洛南县',
                'parentId' => '611000',
                'level' => '3',
            ),
            54 => 
            array (
                'id' => 3055,
                'code' => '611022',
                'name' => '丹凤县',
                'parentId' => '611000',
                'level' => '3',
            ),
            55 => 
            array (
                'id' => 3056,
                'code' => '611023',
                'name' => '商南县',
                'parentId' => '611000',
                'level' => '3',
            ),
            56 => 
            array (
                'id' => 3057,
                'code' => '611024',
                'name' => '山阳县',
                'parentId' => '611000',
                'level' => '3',
            ),
            57 => 
            array (
                'id' => 3058,
                'code' => '611025',
                'name' => '镇安县',
                'parentId' => '611000',
                'level' => '3',
            ),
            58 => 
            array (
                'id' => 3059,
                'code' => '611026',
                'name' => '柞水县',
                'parentId' => '611000',
                'level' => '3',
            ),
            59 => 
            array (
                'id' => 3060,
                'code' => '611100',
                'name' => '西咸新区',
                'parentId' => '610000',
                'level' => '2',
            ),
            60 => 
            array (
                'id' => 3061,
                'code' => '611101',
                'name' => '空港新城',
                'parentId' => '611100',
                'level' => '3',
            ),
            61 => 
            array (
                'id' => 3062,
                'code' => '611102',
                'name' => '沣东新城',
                'parentId' => '611100',
                'level' => '3',
            ),
            62 => 
            array (
                'id' => 3063,
                'code' => '611103',
                'name' => '秦汉新城',
                'parentId' => '611100',
                'level' => '3',
            ),
            63 => 
            array (
                'id' => 3064,
                'code' => '611104',
                'name' => '沣西新城',
                'parentId' => '611100',
                'level' => '3',
            ),
            64 => 
            array (
                'id' => 3065,
                'code' => '611105',
                'name' => '泾河新城',
                'parentId' => '611100',
                'level' => '3',
            ),
            65 => 
            array (
                'id' => 3066,
                'code' => '620000',
                'name' => '甘肃省',
                'parentId' => '100000',
                'level' => '1',
            ),
            66 => 
            array (
                'id' => 3067,
                'code' => '620100',
                'name' => '兰州市',
                'parentId' => '620000',
                'level' => '2',
            ),
            67 => 
            array (
                'id' => 3068,
                'code' => '620102',
                'name' => '城关区',
                'parentId' => '620100',
                'level' => '3',
            ),
            68 => 
            array (
                'id' => 3069,
                'code' => '620103',
                'name' => '七里河区',
                'parentId' => '620100',
                'level' => '3',
            ),
            69 => 
            array (
                'id' => 3070,
                'code' => '620104',
                'name' => '西固区',
                'parentId' => '620100',
                'level' => '3',
            ),
            70 => 
            array (
                'id' => 3071,
                'code' => '620105',
                'name' => '安宁区',
                'parentId' => '620100',
                'level' => '3',
            ),
            71 => 
            array (
                'id' => 3072,
                'code' => '620111',
                'name' => '红古区',
                'parentId' => '620100',
                'level' => '3',
            ),
            72 => 
            array (
                'id' => 3073,
                'code' => '620121',
                'name' => '永登县',
                'parentId' => '620100',
                'level' => '3',
            ),
            73 => 
            array (
                'id' => 3074,
                'code' => '620122',
                'name' => '皋兰县',
                'parentId' => '620100',
                'level' => '3',
            ),
            74 => 
            array (
                'id' => 3075,
                'code' => '620123',
                'name' => '榆中县',
                'parentId' => '620100',
                'level' => '3',
            ),
            75 => 
            array (
                'id' => 3076,
                'code' => '620124',
                'name' => '兰州新区',
                'parentId' => '620100',
                'level' => '3',
            ),
            76 => 
            array (
                'id' => 3077,
                'code' => '620200',
                'name' => '嘉峪关市',
                'parentId' => '620000',
                'level' => '2',
            ),
            77 => 
            array (
                'id' => 3078,
                'code' => '620201',
                'name' => '雄关区',
                'parentId' => '620200',
                'level' => '3',
            ),
            78 => 
            array (
                'id' => 3079,
                'code' => '620202',
                'name' => '长城区',
                'parentId' => '620200',
                'level' => '3',
            ),
            79 => 
            array (
                'id' => 3080,
                'code' => '620203',
                'name' => '镜铁区',
                'parentId' => '620200',
                'level' => '3',
            ),
            80 => 
            array (
                'id' => 3081,
                'code' => '620300',
                'name' => '金昌市',
                'parentId' => '620000',
                'level' => '2',
            ),
            81 => 
            array (
                'id' => 3082,
                'code' => '620302',
                'name' => '金川区',
                'parentId' => '620300',
                'level' => '3',
            ),
            82 => 
            array (
                'id' => 3083,
                'code' => '620321',
                'name' => '永昌县',
                'parentId' => '620300',
                'level' => '3',
            ),
            83 => 
            array (
                'id' => 3084,
                'code' => '620400',
                'name' => '白银市',
                'parentId' => '620000',
                'level' => '2',
            ),
            84 => 
            array (
                'id' => 3085,
                'code' => '620402',
                'name' => '白银区',
                'parentId' => '620400',
                'level' => '3',
            ),
            85 => 
            array (
                'id' => 3086,
                'code' => '620403',
                'name' => '平川区',
                'parentId' => '620400',
                'level' => '3',
            ),
            86 => 
            array (
                'id' => 3087,
                'code' => '620421',
                'name' => '靖远县',
                'parentId' => '620400',
                'level' => '3',
            ),
            87 => 
            array (
                'id' => 3088,
                'code' => '620422',
                'name' => '会宁县',
                'parentId' => '620400',
                'level' => '3',
            ),
            88 => 
            array (
                'id' => 3089,
                'code' => '620423',
                'name' => '景泰县',
                'parentId' => '620400',
                'level' => '3',
            ),
            89 => 
            array (
                'id' => 3090,
                'code' => '620500',
                'name' => '天水市',
                'parentId' => '620000',
                'level' => '2',
            ),
            90 => 
            array (
                'id' => 3091,
                'code' => '620502',
                'name' => '秦州区',
                'parentId' => '620500',
                'level' => '3',
            ),
            91 => 
            array (
                'id' => 3092,
                'code' => '620503',
                'name' => '麦积区',
                'parentId' => '620500',
                'level' => '3',
            ),
            92 => 
            array (
                'id' => 3093,
                'code' => '620521',
                'name' => '清水县',
                'parentId' => '620500',
                'level' => '3',
            ),
            93 => 
            array (
                'id' => 3094,
                'code' => '620522',
                'name' => '秦安县',
                'parentId' => '620500',
                'level' => '3',
            ),
            94 => 
            array (
                'id' => 3095,
                'code' => '620523',
                'name' => '甘谷县',
                'parentId' => '620500',
                'level' => '3',
            ),
            95 => 
            array (
                'id' => 3096,
                'code' => '620524',
                'name' => '武山县',
                'parentId' => '620500',
                'level' => '3',
            ),
            96 => 
            array (
                'id' => 3097,
                'code' => '620525',
                'name' => '张家川回族自治县',
                'parentId' => '620500',
                'level' => '3',
            ),
            97 => 
            array (
                'id' => 3098,
                'code' => '620600',
                'name' => '武威市',
                'parentId' => '620000',
                'level' => '2',
            ),
            98 => 
            array (
                'id' => 3099,
                'code' => '620602',
                'name' => '凉州区',
                'parentId' => '620600',
                'level' => '3',
            ),
            99 => 
            array (
                'id' => 3100,
                'code' => '620621',
                'name' => '民勤县',
                'parentId' => '620600',
                'level' => '3',
            ),
            100 => 
            array (
                'id' => 3101,
                'code' => '620622',
                'name' => '古浪县',
                'parentId' => '620600',
                'level' => '3',
            ),
            101 => 
            array (
                'id' => 3102,
                'code' => '620623',
                'name' => '天祝藏族自治县',
                'parentId' => '620600',
                'level' => '3',
            ),
            102 => 
            array (
                'id' => 3103,
                'code' => '620700',
                'name' => '张掖市',
                'parentId' => '620000',
                'level' => '2',
            ),
            103 => 
            array (
                'id' => 3104,
                'code' => '620702',
                'name' => '甘州区',
                'parentId' => '620700',
                'level' => '3',
            ),
            104 => 
            array (
                'id' => 3105,
                'code' => '620721',
                'name' => '肃南裕固族自治县',
                'parentId' => '620700',
                'level' => '3',
            ),
            105 => 
            array (
                'id' => 3106,
                'code' => '620722',
                'name' => '民乐县',
                'parentId' => '620700',
                'level' => '3',
            ),
            106 => 
            array (
                'id' => 3107,
                'code' => '620723',
                'name' => '临泽县',
                'parentId' => '620700',
                'level' => '3',
            ),
            107 => 
            array (
                'id' => 3108,
                'code' => '620724',
                'name' => '高台县',
                'parentId' => '620700',
                'level' => '3',
            ),
            108 => 
            array (
                'id' => 3109,
                'code' => '620725',
                'name' => '山丹县',
                'parentId' => '620700',
                'level' => '3',
            ),
            109 => 
            array (
                'id' => 3110,
                'code' => '620800',
                'name' => '平凉市',
                'parentId' => '620000',
                'level' => '2',
            ),
            110 => 
            array (
                'id' => 3111,
                'code' => '620802',
                'name' => '崆峒区',
                'parentId' => '620800',
                'level' => '3',
            ),
            111 => 
            array (
                'id' => 3112,
                'code' => '620821',
                'name' => '泾川县',
                'parentId' => '620800',
                'level' => '3',
            ),
            112 => 
            array (
                'id' => 3113,
                'code' => '620822',
                'name' => '灵台县',
                'parentId' => '620800',
                'level' => '3',
            ),
            113 => 
            array (
                'id' => 3114,
                'code' => '620823',
                'name' => '崇信县',
                'parentId' => '620800',
                'level' => '3',
            ),
            114 => 
            array (
                'id' => 3115,
                'code' => '620824',
                'name' => '华亭县',
                'parentId' => '620800',
                'level' => '3',
            ),
            115 => 
            array (
                'id' => 3116,
                'code' => '620825',
                'name' => '庄浪县',
                'parentId' => '620800',
                'level' => '3',
            ),
            116 => 
            array (
                'id' => 3117,
                'code' => '620826',
                'name' => '静宁县',
                'parentId' => '620800',
                'level' => '3',
            ),
            117 => 
            array (
                'id' => 3118,
                'code' => '620900',
                'name' => '酒泉市',
                'parentId' => '620000',
                'level' => '2',
            ),
            118 => 
            array (
                'id' => 3119,
                'code' => '620902',
                'name' => '肃州区',
                'parentId' => '620900',
                'level' => '3',
            ),
            119 => 
            array (
                'id' => 3120,
                'code' => '620921',
                'name' => '金塔县',
                'parentId' => '620900',
                'level' => '3',
            ),
            120 => 
            array (
                'id' => 3121,
                'code' => '620922',
                'name' => '瓜州县',
                'parentId' => '620900',
                'level' => '3',
            ),
            121 => 
            array (
                'id' => 3122,
                'code' => '620923',
                'name' => '肃北蒙古族自治县',
                'parentId' => '620900',
                'level' => '3',
            ),
            122 => 
            array (
                'id' => 3123,
                'code' => '620924',
                'name' => '阿克塞哈萨克族自治县',
                'parentId' => '620900',
                'level' => '3',
            ),
            123 => 
            array (
                'id' => 3124,
                'code' => '620981',
                'name' => '玉门市',
                'parentId' => '620900',
                'level' => '3',
            ),
            124 => 
            array (
                'id' => 3125,
                'code' => '620982',
                'name' => '敦煌市',
                'parentId' => '620900',
                'level' => '3',
            ),
            125 => 
            array (
                'id' => 3126,
                'code' => '621000',
                'name' => '庆阳市',
                'parentId' => '620000',
                'level' => '2',
            ),
            126 => 
            array (
                'id' => 3127,
                'code' => '621002',
                'name' => '西峰区',
                'parentId' => '621000',
                'level' => '3',
            ),
            127 => 
            array (
                'id' => 3128,
                'code' => '621021',
                'name' => '庆城县',
                'parentId' => '621000',
                'level' => '3',
            ),
            128 => 
            array (
                'id' => 3129,
                'code' => '621022',
                'name' => '环县',
                'parentId' => '621000',
                'level' => '3',
            ),
            129 => 
            array (
                'id' => 3130,
                'code' => '621023',
                'name' => '华池县',
                'parentId' => '621000',
                'level' => '3',
            ),
            130 => 
            array (
                'id' => 3131,
                'code' => '621024',
                'name' => '合水县',
                'parentId' => '621000',
                'level' => '3',
            ),
            131 => 
            array (
                'id' => 3132,
                'code' => '621025',
                'name' => '正宁县',
                'parentId' => '621000',
                'level' => '3',
            ),
            132 => 
            array (
                'id' => 3133,
                'code' => '621026',
                'name' => '宁县',
                'parentId' => '621000',
                'level' => '3',
            ),
            133 => 
            array (
                'id' => 3134,
                'code' => '621027',
                'name' => '镇原县',
                'parentId' => '621000',
                'level' => '3',
            ),
            134 => 
            array (
                'id' => 3135,
                'code' => '621100',
                'name' => '定西市',
                'parentId' => '620000',
                'level' => '2',
            ),
            135 => 
            array (
                'id' => 3136,
                'code' => '621102',
                'name' => '安定区',
                'parentId' => '621100',
                'level' => '3',
            ),
            136 => 
            array (
                'id' => 3137,
                'code' => '621121',
                'name' => '通渭县',
                'parentId' => '621100',
                'level' => '3',
            ),
            137 => 
            array (
                'id' => 3138,
                'code' => '621122',
                'name' => '陇西县',
                'parentId' => '621100',
                'level' => '3',
            ),
            138 => 
            array (
                'id' => 3139,
                'code' => '621123',
                'name' => '渭源县',
                'parentId' => '621100',
                'level' => '3',
            ),
            139 => 
            array (
                'id' => 3140,
                'code' => '621124',
                'name' => '临洮县',
                'parentId' => '621100',
                'level' => '3',
            ),
            140 => 
            array (
                'id' => 3141,
                'code' => '621125',
                'name' => '漳县',
                'parentId' => '621100',
                'level' => '3',
            ),
            141 => 
            array (
                'id' => 3142,
                'code' => '621126',
                'name' => '岷县',
                'parentId' => '621100',
                'level' => '3',
            ),
            142 => 
            array (
                'id' => 3143,
                'code' => '621200',
                'name' => '陇南市',
                'parentId' => '620000',
                'level' => '2',
            ),
            143 => 
            array (
                'id' => 3144,
                'code' => '621202',
                'name' => '武都区',
                'parentId' => '621200',
                'level' => '3',
            ),
            144 => 
            array (
                'id' => 3145,
                'code' => '621221',
                'name' => '成县',
                'parentId' => '621200',
                'level' => '3',
            ),
            145 => 
            array (
                'id' => 3146,
                'code' => '621222',
                'name' => '文县',
                'parentId' => '621200',
                'level' => '3',
            ),
            146 => 
            array (
                'id' => 3147,
                'code' => '621223',
                'name' => '宕昌县',
                'parentId' => '621200',
                'level' => '3',
            ),
            147 => 
            array (
                'id' => 3148,
                'code' => '621224',
                'name' => '康县',
                'parentId' => '621200',
                'level' => '3',
            ),
            148 => 
            array (
                'id' => 3149,
                'code' => '621225',
                'name' => '西和县',
                'parentId' => '621200',
                'level' => '3',
            ),
            149 => 
            array (
                'id' => 3150,
                'code' => '621226',
                'name' => '礼县',
                'parentId' => '621200',
                'level' => '3',
            ),
            150 => 
            array (
                'id' => 3151,
                'code' => '621227',
                'name' => '徽县',
                'parentId' => '621200',
                'level' => '3',
            ),
            151 => 
            array (
                'id' => 3152,
                'code' => '621228',
                'name' => '两当县',
                'parentId' => '621200',
                'level' => '3',
            ),
            152 => 
            array (
                'id' => 3153,
                'code' => '622900',
                'name' => '临夏回族自治州',
                'parentId' => '620000',
                'level' => '2',
            ),
            153 => 
            array (
                'id' => 3154,
                'code' => '622901',
                'name' => '临夏市',
                'parentId' => '622900',
                'level' => '3',
            ),
            154 => 
            array (
                'id' => 3155,
                'code' => '622921',
                'name' => '临夏县',
                'parentId' => '622900',
                'level' => '3',
            ),
            155 => 
            array (
                'id' => 3156,
                'code' => '622922',
                'name' => '康乐县',
                'parentId' => '622900',
                'level' => '3',
            ),
            156 => 
            array (
                'id' => 3157,
                'code' => '622923',
                'name' => '永靖县',
                'parentId' => '622900',
                'level' => '3',
            ),
            157 => 
            array (
                'id' => 3158,
                'code' => '622924',
                'name' => '广河县',
                'parentId' => '622900',
                'level' => '3',
            ),
            158 => 
            array (
                'id' => 3159,
                'code' => '622925',
                'name' => '和政县',
                'parentId' => '622900',
                'level' => '3',
            ),
            159 => 
            array (
                'id' => 3160,
                'code' => '622926',
                'name' => '东乡族自治县',
                'parentId' => '622900',
                'level' => '3',
            ),
            160 => 
            array (
                'id' => 3161,
                'code' => '622927',
                'name' => '积石山保安族东乡族撒拉族自治县',
                'parentId' => '622900',
                'level' => '3',
            ),
            161 => 
            array (
                'id' => 3162,
                'code' => '623000',
                'name' => '甘南藏族自治州',
                'parentId' => '620000',
                'level' => '2',
            ),
            162 => 
            array (
                'id' => 3163,
                'code' => '623001',
                'name' => '合作市',
                'parentId' => '623000',
                'level' => '3',
            ),
            163 => 
            array (
                'id' => 3164,
                'code' => '623021',
                'name' => '临潭县',
                'parentId' => '623000',
                'level' => '3',
            ),
            164 => 
            array (
                'id' => 3165,
                'code' => '623022',
                'name' => '卓尼县',
                'parentId' => '623000',
                'level' => '3',
            ),
            165 => 
            array (
                'id' => 3166,
                'code' => '623023',
                'name' => '舟曲县',
                'parentId' => '623000',
                'level' => '3',
            ),
            166 => 
            array (
                'id' => 3167,
                'code' => '623024',
                'name' => '迭部县',
                'parentId' => '623000',
                'level' => '3',
            ),
            167 => 
            array (
                'id' => 3168,
                'code' => '623025',
                'name' => '玛曲县',
                'parentId' => '623000',
                'level' => '3',
            ),
            168 => 
            array (
                'id' => 3169,
                'code' => '623026',
                'name' => '碌曲县',
                'parentId' => '623000',
                'level' => '3',
            ),
            169 => 
            array (
                'id' => 3170,
                'code' => '623027',
                'name' => '夏河县',
                'parentId' => '623000',
                'level' => '3',
            ),
            170 => 
            array (
                'id' => 3171,
                'code' => '630000',
                'name' => '青海省',
                'parentId' => '100000',
                'level' => '1',
            ),
            171 => 
            array (
                'id' => 3172,
                'code' => '630100',
                'name' => '西宁市',
                'parentId' => '630000',
                'level' => '2',
            ),
            172 => 
            array (
                'id' => 3173,
                'code' => '630102',
                'name' => '城东区',
                'parentId' => '630100',
                'level' => '3',
            ),
            173 => 
            array (
                'id' => 3174,
                'code' => '630103',
                'name' => '城中区',
                'parentId' => '630100',
                'level' => '3',
            ),
            174 => 
            array (
                'id' => 3175,
                'code' => '630104',
                'name' => '城西区',
                'parentId' => '630100',
                'level' => '3',
            ),
            175 => 
            array (
                'id' => 3176,
                'code' => '630105',
                'name' => '城北区',
                'parentId' => '630100',
                'level' => '3',
            ),
            176 => 
            array (
                'id' => 3177,
                'code' => '630121',
                'name' => '大通回族土族自治县',
                'parentId' => '630100',
                'level' => '3',
            ),
            177 => 
            array (
                'id' => 3178,
                'code' => '630122',
                'name' => '湟中县',
                'parentId' => '630100',
                'level' => '3',
            ),
            178 => 
            array (
                'id' => 3179,
                'code' => '630123',
                'name' => '湟源县',
                'parentId' => '630100',
                'level' => '3',
            ),
            179 => 
            array (
                'id' => 3180,
                'code' => '630200',
                'name' => '海东市',
                'parentId' => '630000',
                'level' => '2',
            ),
            180 => 
            array (
                'id' => 3181,
                'code' => '630202',
                'name' => '乐都区',
                'parentId' => '630200',
                'level' => '3',
            ),
            181 => 
            array (
                'id' => 3182,
                'code' => '630203',
                'name' => '平安区',
                'parentId' => '630200',
                'level' => '3',
            ),
            182 => 
            array (
                'id' => 3183,
                'code' => '630222',
                'name' => '民和回族土族自治县',
                'parentId' => '630200',
                'level' => '3',
            ),
            183 => 
            array (
                'id' => 3184,
                'code' => '630223',
                'name' => '互助土族自治县',
                'parentId' => '630200',
                'level' => '3',
            ),
            184 => 
            array (
                'id' => 3185,
                'code' => '630224',
                'name' => '化隆回族自治县',
                'parentId' => '630200',
                'level' => '3',
            ),
            185 => 
            array (
                'id' => 3186,
                'code' => '630225',
                'name' => '循化撒拉族自治县',
                'parentId' => '630200',
                'level' => '3',
            ),
            186 => 
            array (
                'id' => 3187,
                'code' => '632200',
                'name' => '海北藏族自治州',
                'parentId' => '630000',
                'level' => '2',
            ),
            187 => 
            array (
                'id' => 3188,
                'code' => '632221',
                'name' => '门源回族自治县',
                'parentId' => '632200',
                'level' => '3',
            ),
            188 => 
            array (
                'id' => 3189,
                'code' => '632222',
                'name' => '祁连县',
                'parentId' => '632200',
                'level' => '3',
            ),
            189 => 
            array (
                'id' => 3190,
                'code' => '632223',
                'name' => '海晏县',
                'parentId' => '632200',
                'level' => '3',
            ),
            190 => 
            array (
                'id' => 3191,
                'code' => '632224',
                'name' => '刚察县',
                'parentId' => '632200',
                'level' => '3',
            ),
            191 => 
            array (
                'id' => 3192,
                'code' => '632300',
                'name' => '黄南藏族自治州',
                'parentId' => '630000',
                'level' => '2',
            ),
            192 => 
            array (
                'id' => 3193,
                'code' => '632321',
                'name' => '同仁县',
                'parentId' => '632300',
                'level' => '3',
            ),
            193 => 
            array (
                'id' => 3194,
                'code' => '632322',
                'name' => '尖扎县',
                'parentId' => '632300',
                'level' => '3',
            ),
            194 => 
            array (
                'id' => 3195,
                'code' => '632323',
                'name' => '泽库县',
                'parentId' => '632300',
                'level' => '3',
            ),
            195 => 
            array (
                'id' => 3196,
                'code' => '632324',
                'name' => '河南蒙古族自治县',
                'parentId' => '632300',
                'level' => '3',
            ),
            196 => 
            array (
                'id' => 3197,
                'code' => '632500',
                'name' => '海南藏族自治州',
                'parentId' => '630000',
                'level' => '2',
            ),
            197 => 
            array (
                'id' => 3198,
                'code' => '632521',
                'name' => '共和县',
                'parentId' => '632500',
                'level' => '3',
            ),
            198 => 
            array (
                'id' => 3199,
                'code' => '632522',
                'name' => '同德县',
                'parentId' => '632500',
                'level' => '3',
            ),
            199 => 
            array (
                'id' => 3200,
                'code' => '632523',
                'name' => '贵德县',
                'parentId' => '632500',
                'level' => '3',
            ),
            200 => 
            array (
                'id' => 3201,
                'code' => '632524',
                'name' => '兴海县',
                'parentId' => '632500',
                'level' => '3',
            ),
            201 => 
            array (
                'id' => 3202,
                'code' => '632525',
                'name' => '贵南县',
                'parentId' => '632500',
                'level' => '3',
            ),
            202 => 
            array (
                'id' => 3203,
                'code' => '632600',
                'name' => '果洛藏族自治州',
                'parentId' => '630000',
                'level' => '2',
            ),
            203 => 
            array (
                'id' => 3204,
                'code' => '632621',
                'name' => '玛沁县',
                'parentId' => '632600',
                'level' => '3',
            ),
            204 => 
            array (
                'id' => 3205,
                'code' => '632622',
                'name' => '班玛县',
                'parentId' => '632600',
                'level' => '3',
            ),
            205 => 
            array (
                'id' => 3206,
                'code' => '632623',
                'name' => '甘德县',
                'parentId' => '632600',
                'level' => '3',
            ),
            206 => 
            array (
                'id' => 3207,
                'code' => '632624',
                'name' => '达日县',
                'parentId' => '632600',
                'level' => '3',
            ),
            207 => 
            array (
                'id' => 3208,
                'code' => '632625',
                'name' => '久治县',
                'parentId' => '632600',
                'level' => '3',
            ),
            208 => 
            array (
                'id' => 3209,
                'code' => '632626',
                'name' => '玛多县',
                'parentId' => '632600',
                'level' => '3',
            ),
            209 => 
            array (
                'id' => 3210,
                'code' => '632700',
                'name' => '玉树藏族自治州',
                'parentId' => '630000',
                'level' => '2',
            ),
            210 => 
            array (
                'id' => 3211,
                'code' => '632701',
                'name' => '玉树市',
                'parentId' => '632700',
                'level' => '3',
            ),
            211 => 
            array (
                'id' => 3212,
                'code' => '632722',
                'name' => '杂多县',
                'parentId' => '632700',
                'level' => '3',
            ),
            212 => 
            array (
                'id' => 3213,
                'code' => '632723',
                'name' => '称多县',
                'parentId' => '632700',
                'level' => '3',
            ),
            213 => 
            array (
                'id' => 3214,
                'code' => '632724',
                'name' => '治多县',
                'parentId' => '632700',
                'level' => '3',
            ),
            214 => 
            array (
                'id' => 3215,
                'code' => '632725',
                'name' => '囊谦县',
                'parentId' => '632700',
                'level' => '3',
            ),
            215 => 
            array (
                'id' => 3216,
                'code' => '632726',
                'name' => '曲麻莱县',
                'parentId' => '632700',
                'level' => '3',
            ),
            216 => 
            array (
                'id' => 3217,
                'code' => '632800',
                'name' => '海西蒙古族藏族自治州',
                'parentId' => '630000',
                'level' => '2',
            ),
            217 => 
            array (
                'id' => 3218,
                'code' => '632801',
                'name' => '格尔木市',
                'parentId' => '632800',
                'level' => '3',
            ),
            218 => 
            array (
                'id' => 3219,
                'code' => '632802',
                'name' => '德令哈市',
                'parentId' => '632800',
                'level' => '3',
            ),
            219 => 
            array (
                'id' => 3220,
                'code' => '632821',
                'name' => '乌兰县',
                'parentId' => '632800',
                'level' => '3',
            ),
            220 => 
            array (
                'id' => 3221,
                'code' => '632822',
                'name' => '都兰县',
                'parentId' => '632800',
                'level' => '3',
            ),
            221 => 
            array (
                'id' => 3222,
                'code' => '632823',
                'name' => '天峻县',
                'parentId' => '632800',
                'level' => '3',
            ),
            222 => 
            array (
                'id' => 3223,
                'code' => '640000',
                'name' => '宁夏回族自治区',
                'parentId' => '100000',
                'level' => '1',
            ),
            223 => 
            array (
                'id' => 3224,
                'code' => '640100',
                'name' => '银川市',
                'parentId' => '640000',
                'level' => '2',
            ),
            224 => 
            array (
                'id' => 3225,
                'code' => '640104',
                'name' => '兴庆区',
                'parentId' => '640100',
                'level' => '3',
            ),
            225 => 
            array (
                'id' => 3226,
                'code' => '640105',
                'name' => '西夏区',
                'parentId' => '640100',
                'level' => '3',
            ),
            226 => 
            array (
                'id' => 3227,
                'code' => '640106',
                'name' => '金凤区',
                'parentId' => '640100',
                'level' => '3',
            ),
            227 => 
            array (
                'id' => 3228,
                'code' => '640121',
                'name' => '永宁县',
                'parentId' => '640100',
                'level' => '3',
            ),
            228 => 
            array (
                'id' => 3229,
                'code' => '640122',
                'name' => '贺兰县',
                'parentId' => '640100',
                'level' => '3',
            ),
            229 => 
            array (
                'id' => 3230,
                'code' => '640181',
                'name' => '灵武市',
                'parentId' => '640100',
                'level' => '3',
            ),
            230 => 
            array (
                'id' => 3231,
                'code' => '640200',
                'name' => '石嘴山市',
                'parentId' => '640000',
                'level' => '2',
            ),
            231 => 
            array (
                'id' => 3232,
                'code' => '640202',
                'name' => '大武口区',
                'parentId' => '640200',
                'level' => '3',
            ),
            232 => 
            array (
                'id' => 3233,
                'code' => '640205',
                'name' => '惠农区',
                'parentId' => '640200',
                'level' => '3',
            ),
            233 => 
            array (
                'id' => 3234,
                'code' => '640221',
                'name' => '平罗县',
                'parentId' => '640200',
                'level' => '3',
            ),
            234 => 
            array (
                'id' => 3235,
                'code' => '640300',
                'name' => '吴忠市',
                'parentId' => '640000',
                'level' => '2',
            ),
            235 => 
            array (
                'id' => 3236,
                'code' => '640302',
                'name' => '利通区',
                'parentId' => '640300',
                'level' => '3',
            ),
            236 => 
            array (
                'id' => 3237,
                'code' => '640303',
                'name' => '红寺堡区',
                'parentId' => '640300',
                'level' => '3',
            ),
            237 => 
            array (
                'id' => 3238,
                'code' => '640323',
                'name' => '盐池县',
                'parentId' => '640300',
                'level' => '3',
            ),
            238 => 
            array (
                'id' => 3239,
                'code' => '640324',
                'name' => '同心县',
                'parentId' => '640300',
                'level' => '3',
            ),
            239 => 
            array (
                'id' => 3240,
                'code' => '640381',
                'name' => '青铜峡市',
                'parentId' => '640300',
                'level' => '3',
            ),
            240 => 
            array (
                'id' => 3241,
                'code' => '640400',
                'name' => '固原市',
                'parentId' => '640000',
                'level' => '2',
            ),
            241 => 
            array (
                'id' => 3242,
                'code' => '640402',
                'name' => '原州区',
                'parentId' => '640400',
                'level' => '3',
            ),
            242 => 
            array (
                'id' => 3243,
                'code' => '640422',
                'name' => '西吉县',
                'parentId' => '640400',
                'level' => '3',
            ),
            243 => 
            array (
                'id' => 3244,
                'code' => '640423',
                'name' => '隆德县',
                'parentId' => '640400',
                'level' => '3',
            ),
            244 => 
            array (
                'id' => 3245,
                'code' => '640424',
                'name' => '泾源县',
                'parentId' => '640400',
                'level' => '3',
            ),
            245 => 
            array (
                'id' => 3246,
                'code' => '640425',
                'name' => '彭阳县',
                'parentId' => '640400',
                'level' => '3',
            ),
            246 => 
            array (
                'id' => 3247,
                'code' => '640500',
                'name' => '中卫市',
                'parentId' => '640000',
                'level' => '2',
            ),
            247 => 
            array (
                'id' => 3248,
                'code' => '640502',
                'name' => '沙坡头区',
                'parentId' => '640500',
                'level' => '3',
            ),
            248 => 
            array (
                'id' => 3249,
                'code' => '640521',
                'name' => '中宁县',
                'parentId' => '640500',
                'level' => '3',
            ),
            249 => 
            array (
                'id' => 3250,
                'code' => '640522',
                'name' => '海原县',
                'parentId' => '640500',
                'level' => '3',
            ),
            250 => 
            array (
                'id' => 3251,
                'code' => '650000',
                'name' => '新疆维吾尔自治区',
                'parentId' => '100000',
                'level' => '1',
            ),
            251 => 
            array (
                'id' => 3252,
                'code' => '650100',
                'name' => '乌鲁木齐市',
                'parentId' => '650000',
                'level' => '2',
            ),
            252 => 
            array (
                'id' => 3253,
                'code' => '650102',
                'name' => '天山区',
                'parentId' => '650100',
                'level' => '3',
            ),
            253 => 
            array (
                'id' => 3254,
                'code' => '650103',
                'name' => '沙依巴克区',
                'parentId' => '650100',
                'level' => '3',
            ),
            254 => 
            array (
                'id' => 3255,
                'code' => '650104',
                'name' => '新市区',
                'parentId' => '650100',
                'level' => '3',
            ),
            255 => 
            array (
                'id' => 3256,
                'code' => '650105',
                'name' => '水磨沟区',
                'parentId' => '650100',
                'level' => '3',
            ),
            256 => 
            array (
                'id' => 3257,
                'code' => '650106',
                'name' => '头屯河区',
                'parentId' => '650100',
                'level' => '3',
            ),
            257 => 
            array (
                'id' => 3258,
                'code' => '650107',
                'name' => '达坂城区',
                'parentId' => '650100',
                'level' => '3',
            ),
            258 => 
            array (
                'id' => 3259,
                'code' => '650109',
                'name' => '米东区',
                'parentId' => '650100',
                'level' => '3',
            ),
            259 => 
            array (
                'id' => 3260,
                'code' => '650121',
                'name' => '乌鲁木齐县',
                'parentId' => '650100',
                'level' => '3',
            ),
            260 => 
            array (
                'id' => 3261,
                'code' => '650200',
                'name' => '克拉玛依市',
                'parentId' => '650000',
                'level' => '2',
            ),
            261 => 
            array (
                'id' => 3262,
                'code' => '650202',
                'name' => '独山子区',
                'parentId' => '650200',
                'level' => '3',
            ),
            262 => 
            array (
                'id' => 3263,
                'code' => '650203',
                'name' => '克拉玛依区',
                'parentId' => '650200',
                'level' => '3',
            ),
            263 => 
            array (
                'id' => 3264,
                'code' => '650204',
                'name' => '白碱滩区',
                'parentId' => '650200',
                'level' => '3',
            ),
            264 => 
            array (
                'id' => 3265,
                'code' => '650205',
                'name' => '乌尔禾区',
                'parentId' => '650200',
                'level' => '3',
            ),
            265 => 
            array (
                'id' => 3266,
                'code' => '650400',
                'name' => '吐鲁番市',
                'parentId' => '650000',
                'level' => '2',
            ),
            266 => 
            array (
                'id' => 3267,
                'code' => '650402',
                'name' => '高昌区',
                'parentId' => '650400',
                'level' => '3',
            ),
            267 => 
            array (
                'id' => 3268,
                'code' => '650421',
                'name' => '鄯善县',
                'parentId' => '650400',
                'level' => '3',
            ),
            268 => 
            array (
                'id' => 3269,
                'code' => '650422',
                'name' => '托克逊县',
                'parentId' => '650400',
                'level' => '3',
            ),
            269 => 
            array (
                'id' => 3270,
                'code' => '652200',
                'name' => '哈密地区',
                'parentId' => '650000',
                'level' => '2',
            ),
            270 => 
            array (
                'id' => 3271,
                'code' => '652201',
                'name' => '哈密市',
                'parentId' => '652200',
                'level' => '3',
            ),
            271 => 
            array (
                'id' => 3272,
                'code' => '652222',
                'name' => '巴里坤哈萨克自治县',
                'parentId' => '652200',
                'level' => '3',
            ),
            272 => 
            array (
                'id' => 3273,
                'code' => '652223',
                'name' => '伊吾县',
                'parentId' => '652200',
                'level' => '3',
            ),
            273 => 
            array (
                'id' => 3274,
                'code' => '652300',
                'name' => '昌吉回族自治州',
                'parentId' => '650000',
                'level' => '2',
            ),
            274 => 
            array (
                'id' => 3275,
                'code' => '652301',
                'name' => '昌吉市',
                'parentId' => '652300',
                'level' => '3',
            ),
            275 => 
            array (
                'id' => 3276,
                'code' => '652302',
                'name' => '阜康市',
                'parentId' => '652300',
                'level' => '3',
            ),
            276 => 
            array (
                'id' => 3277,
                'code' => '652323',
                'name' => '呼图壁县',
                'parentId' => '652300',
                'level' => '3',
            ),
            277 => 
            array (
                'id' => 3278,
                'code' => '652324',
                'name' => '玛纳斯县',
                'parentId' => '652300',
                'level' => '3',
            ),
            278 => 
            array (
                'id' => 3279,
                'code' => '652325',
                'name' => '奇台县',
                'parentId' => '652300',
                'level' => '3',
            ),
            279 => 
            array (
                'id' => 3280,
                'code' => '652327',
                'name' => '吉木萨尔县',
                'parentId' => '652300',
                'level' => '3',
            ),
            280 => 
            array (
                'id' => 3281,
                'code' => '652328',
                'name' => '木垒哈萨克自治县',
                'parentId' => '652300',
                'level' => '3',
            ),
            281 => 
            array (
                'id' => 3282,
                'code' => '652700',
                'name' => '博尔塔拉蒙古自治州',
                'parentId' => '650000',
                'level' => '2',
            ),
            282 => 
            array (
                'id' => 3283,
                'code' => '652701',
                'name' => '博乐市',
                'parentId' => '652700',
                'level' => '3',
            ),
            283 => 
            array (
                'id' => 3284,
                'code' => '652702',
                'name' => '阿拉山口市',
                'parentId' => '652700',
                'level' => '3',
            ),
            284 => 
            array (
                'id' => 3285,
                'code' => '652722',
                'name' => '精河县',
                'parentId' => '652700',
                'level' => '3',
            ),
            285 => 
            array (
                'id' => 3286,
                'code' => '652723',
                'name' => '温泉县',
                'parentId' => '652700',
                'level' => '3',
            ),
            286 => 
            array (
                'id' => 3287,
                'code' => '652800',
                'name' => '巴音郭楞蒙古自治州',
                'parentId' => '650000',
                'level' => '2',
            ),
            287 => 
            array (
                'id' => 3288,
                'code' => '652801',
                'name' => '库尔勒市',
                'parentId' => '652800',
                'level' => '3',
            ),
            288 => 
            array (
                'id' => 3289,
                'code' => '652822',
                'name' => '轮台县',
                'parentId' => '652800',
                'level' => '3',
            ),
            289 => 
            array (
                'id' => 3290,
                'code' => '652823',
                'name' => '尉犁县',
                'parentId' => '652800',
                'level' => '3',
            ),
            290 => 
            array (
                'id' => 3291,
                'code' => '652824',
                'name' => '若羌县',
                'parentId' => '652800',
                'level' => '3',
            ),
            291 => 
            array (
                'id' => 3292,
                'code' => '652825',
                'name' => '且末县',
                'parentId' => '652800',
                'level' => '3',
            ),
            292 => 
            array (
                'id' => 3293,
                'code' => '652826',
                'name' => '焉耆回族自治县',
                'parentId' => '652800',
                'level' => '3',
            ),
            293 => 
            array (
                'id' => 3294,
                'code' => '652827',
                'name' => '和静县',
                'parentId' => '652800',
                'level' => '3',
            ),
            294 => 
            array (
                'id' => 3295,
                'code' => '652828',
                'name' => '和硕县',
                'parentId' => '652800',
                'level' => '3',
            ),
            295 => 
            array (
                'id' => 3296,
                'code' => '652829',
                'name' => '博湖县',
                'parentId' => '652800',
                'level' => '3',
            ),
            296 => 
            array (
                'id' => 3297,
                'code' => '652900',
                'name' => '阿克苏地区',
                'parentId' => '650000',
                'level' => '2',
            ),
            297 => 
            array (
                'id' => 3298,
                'code' => '652901',
                'name' => '阿克苏市',
                'parentId' => '652900',
                'level' => '3',
            ),
            298 => 
            array (
                'id' => 3299,
                'code' => '652922',
                'name' => '温宿县',
                'parentId' => '652900',
                'level' => '3',
            ),
            299 => 
            array (
                'id' => 3300,
                'code' => '652923',
                'name' => '库车县',
                'parentId' => '652900',
                'level' => '3',
            ),
            300 => 
            array (
                'id' => 3301,
                'code' => '652924',
                'name' => '沙雅县',
                'parentId' => '652900',
                'level' => '3',
            ),
            301 => 
            array (
                'id' => 3302,
                'code' => '652925',
                'name' => '新和县',
                'parentId' => '652900',
                'level' => '3',
            ),
            302 => 
            array (
                'id' => 3303,
                'code' => '652926',
                'name' => '拜城县',
                'parentId' => '652900',
                'level' => '3',
            ),
            303 => 
            array (
                'id' => 3304,
                'code' => '652927',
                'name' => '乌什县',
                'parentId' => '652900',
                'level' => '3',
            ),
            304 => 
            array (
                'id' => 3305,
                'code' => '652928',
                'name' => '阿瓦提县',
                'parentId' => '652900',
                'level' => '3',
            ),
            305 => 
            array (
                'id' => 3306,
                'code' => '652929',
                'name' => '柯坪县',
                'parentId' => '652900',
                'level' => '3',
            ),
            306 => 
            array (
                'id' => 3307,
                'code' => '653000',
                'name' => '克孜勒苏柯尔克孜自治州',
                'parentId' => '650000',
                'level' => '2',
            ),
            307 => 
            array (
                'id' => 3308,
                'code' => '653001',
                'name' => '阿图什市',
                'parentId' => '653000',
                'level' => '3',
            ),
            308 => 
            array (
                'id' => 3309,
                'code' => '653022',
                'name' => '阿克陶县',
                'parentId' => '653000',
                'level' => '3',
            ),
            309 => 
            array (
                'id' => 3310,
                'code' => '653023',
                'name' => '阿合奇县',
                'parentId' => '653000',
                'level' => '3',
            ),
            310 => 
            array (
                'id' => 3311,
                'code' => '653024',
                'name' => '乌恰县',
                'parentId' => '653000',
                'level' => '3',
            ),
            311 => 
            array (
                'id' => 3312,
                'code' => '653100',
                'name' => '喀什地区',
                'parentId' => '650000',
                'level' => '2',
            ),
            312 => 
            array (
                'id' => 3313,
                'code' => '653101',
                'name' => '喀什市',
                'parentId' => '653100',
                'level' => '3',
            ),
            313 => 
            array (
                'id' => 3314,
                'code' => '653121',
                'name' => '疏附县',
                'parentId' => '653100',
                'level' => '3',
            ),
            314 => 
            array (
                'id' => 3315,
                'code' => '653122',
                'name' => '疏勒县',
                'parentId' => '653100',
                'level' => '3',
            ),
            315 => 
            array (
                'id' => 3316,
                'code' => '653123',
                'name' => '英吉沙县',
                'parentId' => '653100',
                'level' => '3',
            ),
            316 => 
            array (
                'id' => 3317,
                'code' => '653124',
                'name' => '泽普县',
                'parentId' => '653100',
                'level' => '3',
            ),
            317 => 
            array (
                'id' => 3318,
                'code' => '653125',
                'name' => '莎车县',
                'parentId' => '653100',
                'level' => '3',
            ),
            318 => 
            array (
                'id' => 3319,
                'code' => '653126',
                'name' => '叶城县',
                'parentId' => '653100',
                'level' => '3',
            ),
            319 => 
            array (
                'id' => 3320,
                'code' => '653127',
                'name' => '麦盖提县',
                'parentId' => '653100',
                'level' => '3',
            ),
            320 => 
            array (
                'id' => 3321,
                'code' => '653128',
                'name' => '岳普湖县',
                'parentId' => '653100',
                'level' => '3',
            ),
            321 => 
            array (
                'id' => 3322,
                'code' => '653129',
                'name' => '伽师县',
                'parentId' => '653100',
                'level' => '3',
            ),
            322 => 
            array (
                'id' => 3323,
                'code' => '653130',
                'name' => '巴楚县',
                'parentId' => '653100',
                'level' => '3',
            ),
            323 => 
            array (
                'id' => 3324,
                'code' => '653131',
                'name' => '塔什库尔干塔吉克自治县',
                'parentId' => '653100',
                'level' => '3',
            ),
            324 => 
            array (
                'id' => 3325,
                'code' => '653200',
                'name' => '和田地区',
                'parentId' => '650000',
                'level' => '2',
            ),
            325 => 
            array (
                'id' => 3326,
                'code' => '653201',
                'name' => '和田市',
                'parentId' => '653200',
                'level' => '3',
            ),
            326 => 
            array (
                'id' => 3327,
                'code' => '653221',
                'name' => '和田县',
                'parentId' => '653200',
                'level' => '3',
            ),
            327 => 
            array (
                'id' => 3328,
                'code' => '653222',
                'name' => '墨玉县',
                'parentId' => '653200',
                'level' => '3',
            ),
            328 => 
            array (
                'id' => 3329,
                'code' => '653223',
                'name' => '皮山县',
                'parentId' => '653200',
                'level' => '3',
            ),
            329 => 
            array (
                'id' => 3330,
                'code' => '653224',
                'name' => '洛浦县',
                'parentId' => '653200',
                'level' => '3',
            ),
            330 => 
            array (
                'id' => 3331,
                'code' => '653225',
                'name' => '策勒县',
                'parentId' => '653200',
                'level' => '3',
            ),
            331 => 
            array (
                'id' => 3332,
                'code' => '653226',
                'name' => '于田县',
                'parentId' => '653200',
                'level' => '3',
            ),
            332 => 
            array (
                'id' => 3333,
                'code' => '653227',
                'name' => '民丰县',
                'parentId' => '653200',
                'level' => '3',
            ),
            333 => 
            array (
                'id' => 3334,
                'code' => '654000',
                'name' => '伊犁哈萨克自治州',
                'parentId' => '650000',
                'level' => '2',
            ),
            334 => 
            array (
                'id' => 3335,
                'code' => '654002',
                'name' => '伊宁市',
                'parentId' => '654000',
                'level' => '3',
            ),
            335 => 
            array (
                'id' => 3336,
                'code' => '654003',
                'name' => '奎屯市',
                'parentId' => '654000',
                'level' => '3',
            ),
            336 => 
            array (
                'id' => 3337,
                'code' => '654004',
                'name' => '霍尔果斯市',
                'parentId' => '654000',
                'level' => '3',
            ),
            337 => 
            array (
                'id' => 3338,
                'code' => '654021',
                'name' => '伊宁县',
                'parentId' => '654000',
                'level' => '3',
            ),
            338 => 
            array (
                'id' => 3339,
                'code' => '654022',
                'name' => '察布查尔锡伯自治县',
                'parentId' => '654000',
                'level' => '3',
            ),
            339 => 
            array (
                'id' => 3340,
                'code' => '654023',
                'name' => '霍城县',
                'parentId' => '654000',
                'level' => '3',
            ),
            340 => 
            array (
                'id' => 3341,
                'code' => '654024',
                'name' => '巩留县',
                'parentId' => '654000',
                'level' => '3',
            ),
            341 => 
            array (
                'id' => 3342,
                'code' => '654025',
                'name' => '新源县',
                'parentId' => '654000',
                'level' => '3',
            ),
            342 => 
            array (
                'id' => 3343,
                'code' => '654026',
                'name' => '昭苏县',
                'parentId' => '654000',
                'level' => '3',
            ),
            343 => 
            array (
                'id' => 3344,
                'code' => '654027',
                'name' => '特克斯县',
                'parentId' => '654000',
                'level' => '3',
            ),
            344 => 
            array (
                'id' => 3345,
                'code' => '654028',
                'name' => '尼勒克县',
                'parentId' => '654000',
                'level' => '3',
            ),
            345 => 
            array (
                'id' => 3346,
                'code' => '654200',
                'name' => '塔城地区',
                'parentId' => '650000',
                'level' => '2',
            ),
            346 => 
            array (
                'id' => 3347,
                'code' => '654201',
                'name' => '塔城市',
                'parentId' => '654200',
                'level' => '3',
            ),
            347 => 
            array (
                'id' => 3348,
                'code' => '654202',
                'name' => '乌苏市',
                'parentId' => '654200',
                'level' => '3',
            ),
            348 => 
            array (
                'id' => 3349,
                'code' => '654221',
                'name' => '额敏县',
                'parentId' => '654200',
                'level' => '3',
            ),
            349 => 
            array (
                'id' => 3350,
                'code' => '654223',
                'name' => '沙湾县',
                'parentId' => '654200',
                'level' => '3',
            ),
            350 => 
            array (
                'id' => 3351,
                'code' => '654224',
                'name' => '托里县',
                'parentId' => '654200',
                'level' => '3',
            ),
            351 => 
            array (
                'id' => 3352,
                'code' => '654225',
                'name' => '裕民县',
                'parentId' => '654200',
                'level' => '3',
            ),
            352 => 
            array (
                'id' => 3353,
                'code' => '654226',
                'name' => '和布克赛尔蒙古自治县',
                'parentId' => '654200',
                'level' => '3',
            ),
            353 => 
            array (
                'id' => 3354,
                'code' => '654300',
                'name' => '阿勒泰地区',
                'parentId' => '650000',
                'level' => '2',
            ),
            354 => 
            array (
                'id' => 3355,
                'code' => '654301',
                'name' => '阿勒泰市',
                'parentId' => '654300',
                'level' => '3',
            ),
            355 => 
            array (
                'id' => 3356,
                'code' => '654321',
                'name' => '布尔津县',
                'parentId' => '654300',
                'level' => '3',
            ),
            356 => 
            array (
                'id' => 3357,
                'code' => '654322',
                'name' => '富蕴县',
                'parentId' => '654300',
                'level' => '3',
            ),
            357 => 
            array (
                'id' => 3358,
                'code' => '654323',
                'name' => '福海县',
                'parentId' => '654300',
                'level' => '3',
            ),
            358 => 
            array (
                'id' => 3359,
                'code' => '654324',
                'name' => '哈巴河县',
                'parentId' => '654300',
                'level' => '3',
            ),
            359 => 
            array (
                'id' => 3360,
                'code' => '654325',
                'name' => '青河县',
                'parentId' => '654300',
                'level' => '3',
            ),
            360 => 
            array (
                'id' => 3361,
                'code' => '654326',
                'name' => '吉木乃县',
                'parentId' => '654300',
                'level' => '3',
            ),
            361 => 
            array (
                'id' => 3362,
                'code' => '659000',
                'name' => '直辖县级',
                'parentId' => '650000',
                'level' => '2',
            ),
            362 => 
            array (
                'id' => 3363,
                'code' => '659001',
                'name' => '石河子市',
                'parentId' => '659000',
                'level' => '3',
            ),
            363 => 
            array (
                'id' => 3364,
                'code' => '659002',
                'name' => '阿拉尔市',
                'parentId' => '659000',
                'level' => '3',
            ),
            364 => 
            array (
                'id' => 3365,
                'code' => '659003',
                'name' => '图木舒克市',
                'parentId' => '659000',
                'level' => '3',
            ),
            365 => 
            array (
                'id' => 3366,
                'code' => '659004',
                'name' => '五家渠市',
                'parentId' => '659000',
                'level' => '3',
            ),
            366 => 
            array (
                'id' => 3367,
                'code' => '659005',
                'name' => '北屯市',
                'parentId' => '659000',
                'level' => '3',
            ),
            367 => 
            array (
                'id' => 3368,
                'code' => '659006',
                'name' => '铁门关市',
                'parentId' => '659000',
                'level' => '3',
            ),
            368 => 
            array (
                'id' => 3369,
                'code' => '659007',
                'name' => '双河市',
                'parentId' => '659000',
                'level' => '3',
            ),
            369 => 
            array (
                'id' => 3370,
                'code' => '659008',
                'name' => '可克达拉市',
                'parentId' => '659000',
                'level' => '3',
            ),
            370 => 
            array (
                'id' => 3371,
                'code' => '710000',
                'name' => '台湾',
                'parentId' => '100000',
                'level' => '1',
            ),
            371 => 
            array (
                'id' => 3372,
                'code' => '710100',
                'name' => '台北市',
                'parentId' => '710000',
                'level' => '2',
            ),
            372 => 
            array (
                'id' => 3373,
                'code' => '710101',
                'name' => '松山区',
                'parentId' => '710100',
                'level' => '3',
            ),
            373 => 
            array (
                'id' => 3374,
                'code' => '710102',
                'name' => '信义区',
                'parentId' => '710100',
                'level' => '3',
            ),
            374 => 
            array (
                'id' => 3375,
                'code' => '710103',
                'name' => '大安区',
                'parentId' => '710100',
                'level' => '3',
            ),
            375 => 
            array (
                'id' => 3376,
                'code' => '710104',
                'name' => '中山区',
                'parentId' => '710100',
                'level' => '3',
            ),
            376 => 
            array (
                'id' => 3377,
                'code' => '710105',
                'name' => '中正区',
                'parentId' => '710100',
                'level' => '3',
            ),
            377 => 
            array (
                'id' => 3378,
                'code' => '710106',
                'name' => '大同区',
                'parentId' => '710100',
                'level' => '3',
            ),
            378 => 
            array (
                'id' => 3379,
                'code' => '710107',
                'name' => '万华区',
                'parentId' => '710100',
                'level' => '3',
            ),
            379 => 
            array (
                'id' => 3380,
                'code' => '710108',
                'name' => '文山区',
                'parentId' => '710100',
                'level' => '3',
            ),
            380 => 
            array (
                'id' => 3381,
                'code' => '710109',
                'name' => '南港区',
                'parentId' => '710100',
                'level' => '3',
            ),
            381 => 
            array (
                'id' => 3382,
                'code' => '710110',
                'name' => '内湖区',
                'parentId' => '710100',
                'level' => '3',
            ),
            382 => 
            array (
                'id' => 3383,
                'code' => '710111',
                'name' => '士林区',
                'parentId' => '710100',
                'level' => '3',
            ),
            383 => 
            array (
                'id' => 3384,
                'code' => '710112',
                'name' => '北投区',
                'parentId' => '710100',
                'level' => '3',
            ),
            384 => 
            array (
                'id' => 3385,
                'code' => '710200',
                'name' => '高雄市',
                'parentId' => '710000',
                'level' => '2',
            ),
            385 => 
            array (
                'id' => 3386,
                'code' => '710201',
                'name' => '盐埕区',
                'parentId' => '710200',
                'level' => '3',
            ),
            386 => 
            array (
                'id' => 3387,
                'code' => '710202',
                'name' => '鼓山区',
                'parentId' => '710200',
                'level' => '3',
            ),
            387 => 
            array (
                'id' => 3388,
                'code' => '710203',
                'name' => '左营区',
                'parentId' => '710200',
                'level' => '3',
            ),
            388 => 
            array (
                'id' => 3389,
                'code' => '710204',
                'name' => '楠梓区',
                'parentId' => '710200',
                'level' => '3',
            ),
            389 => 
            array (
                'id' => 3390,
                'code' => '710205',
                'name' => '三民区',
                'parentId' => '710200',
                'level' => '3',
            ),
            390 => 
            array (
                'id' => 3391,
                'code' => '710206',
                'name' => '新兴区',
                'parentId' => '710200',
                'level' => '3',
            ),
            391 => 
            array (
                'id' => 3392,
                'code' => '710207',
                'name' => '前金区',
                'parentId' => '710200',
                'level' => '3',
            ),
            392 => 
            array (
                'id' => 3393,
                'code' => '710208',
                'name' => '苓雅区',
                'parentId' => '710200',
                'level' => '3',
            ),
            393 => 
            array (
                'id' => 3394,
                'code' => '710209',
                'name' => '前镇区',
                'parentId' => '710200',
                'level' => '3',
            ),
            394 => 
            array (
                'id' => 3395,
                'code' => '710210',
                'name' => '旗津区',
                'parentId' => '710200',
                'level' => '3',
            ),
            395 => 
            array (
                'id' => 3396,
                'code' => '710211',
                'name' => '小港区',
                'parentId' => '710200',
                'level' => '3',
            ),
            396 => 
            array (
                'id' => 3397,
                'code' => '710212',
                'name' => '凤山区',
                'parentId' => '710200',
                'level' => '3',
            ),
            397 => 
            array (
                'id' => 3398,
                'code' => '710213',
                'name' => '林园区',
                'parentId' => '710200',
                'level' => '3',
            ),
            398 => 
            array (
                'id' => 3399,
                'code' => '710214',
                'name' => '大寮区',
                'parentId' => '710200',
                'level' => '3',
            ),
            399 => 
            array (
                'id' => 3400,
                'code' => '710215',
                'name' => '大树区',
                'parentId' => '710200',
                'level' => '3',
            ),
            400 => 
            array (
                'id' => 3401,
                'code' => '710216',
                'name' => '大社区',
                'parentId' => '710200',
                'level' => '3',
            ),
            401 => 
            array (
                'id' => 3402,
                'code' => '710217',
                'name' => '仁武区',
                'parentId' => '710200',
                'level' => '3',
            ),
            402 => 
            array (
                'id' => 3403,
                'code' => '710218',
                'name' => '鸟松区',
                'parentId' => '710200',
                'level' => '3',
            ),
            403 => 
            array (
                'id' => 3404,
                'code' => '710219',
                'name' => '冈山区',
                'parentId' => '710200',
                'level' => '3',
            ),
            404 => 
            array (
                'id' => 3405,
                'code' => '710220',
                'name' => '桥头区',
                'parentId' => '710200',
                'level' => '3',
            ),
            405 => 
            array (
                'id' => 3406,
                'code' => '710221',
                'name' => '燕巢区',
                'parentId' => '710200',
                'level' => '3',
            ),
            406 => 
            array (
                'id' => 3407,
                'code' => '710222',
                'name' => '田寮区',
                'parentId' => '710200',
                'level' => '3',
            ),
            407 => 
            array (
                'id' => 3408,
                'code' => '710223',
                'name' => '阿莲区',
                'parentId' => '710200',
                'level' => '3',
            ),
            408 => 
            array (
                'id' => 3409,
                'code' => '710224',
                'name' => '路竹区',
                'parentId' => '710200',
                'level' => '3',
            ),
            409 => 
            array (
                'id' => 3410,
                'code' => '710225',
                'name' => '湖内区',
                'parentId' => '710200',
                'level' => '3',
            ),
            410 => 
            array (
                'id' => 3411,
                'code' => '710226',
                'name' => '茄萣区',
                'parentId' => '710200',
                'level' => '3',
            ),
            411 => 
            array (
                'id' => 3412,
                'code' => '710227',
                'name' => '永安区',
                'parentId' => '710200',
                'level' => '3',
            ),
            412 => 
            array (
                'id' => 3413,
                'code' => '710228',
                'name' => '弥陀区',
                'parentId' => '710200',
                'level' => '3',
            ),
            413 => 
            array (
                'id' => 3414,
                'code' => '710229',
                'name' => '梓官区',
                'parentId' => '710200',
                'level' => '3',
            ),
            414 => 
            array (
                'id' => 3415,
                'code' => '710230',
                'name' => '旗山区',
                'parentId' => '710200',
                'level' => '3',
            ),
            415 => 
            array (
                'id' => 3416,
                'code' => '710231',
                'name' => '美浓区',
                'parentId' => '710200',
                'level' => '3',
            ),
            416 => 
            array (
                'id' => 3417,
                'code' => '710232',
                'name' => '六龟区',
                'parentId' => '710200',
                'level' => '3',
            ),
            417 => 
            array (
                'id' => 3418,
                'code' => '710233',
                'name' => '甲仙区',
                'parentId' => '710200',
                'level' => '3',
            ),
            418 => 
            array (
                'id' => 3419,
                'code' => '710234',
                'name' => '杉林区',
                'parentId' => '710200',
                'level' => '3',
            ),
            419 => 
            array (
                'id' => 3420,
                'code' => '710235',
                'name' => '内门区',
                'parentId' => '710200',
                'level' => '3',
            ),
            420 => 
            array (
                'id' => 3421,
                'code' => '710236',
                'name' => '茂林区',
                'parentId' => '710200',
                'level' => '3',
            ),
            421 => 
            array (
                'id' => 3422,
                'code' => '710237',
                'name' => '桃源区',
                'parentId' => '710200',
                'level' => '3',
            ),
            422 => 
            array (
                'id' => 3423,
                'code' => '710238',
                'name' => '那玛夏区',
                'parentId' => '710200',
                'level' => '3',
            ),
            423 => 
            array (
                'id' => 3424,
                'code' => '710300',
                'name' => '基隆市',
                'parentId' => '710000',
                'level' => '2',
            ),
            424 => 
            array (
                'id' => 3425,
                'code' => '710301',
                'name' => '中正区',
                'parentId' => '710300',
                'level' => '3',
            ),
            425 => 
            array (
                'id' => 3426,
                'code' => '710302',
                'name' => '七堵区',
                'parentId' => '710300',
                'level' => '3',
            ),
            426 => 
            array (
                'id' => 3427,
                'code' => '710303',
                'name' => '暖暖区',
                'parentId' => '710300',
                'level' => '3',
            ),
            427 => 
            array (
                'id' => 3428,
                'code' => '710304',
                'name' => '仁爱区',
                'parentId' => '710300',
                'level' => '3',
            ),
            428 => 
            array (
                'id' => 3429,
                'code' => '710305',
                'name' => '中山区',
                'parentId' => '710300',
                'level' => '3',
            ),
            429 => 
            array (
                'id' => 3430,
                'code' => '710306',
                'name' => '安乐区',
                'parentId' => '710300',
                'level' => '3',
            ),
            430 => 
            array (
                'id' => 3431,
                'code' => '710307',
                'name' => '信义区',
                'parentId' => '710300',
                'level' => '3',
            ),
            431 => 
            array (
                'id' => 3432,
                'code' => '710400',
                'name' => '台中市',
                'parentId' => '710000',
                'level' => '2',
            ),
            432 => 
            array (
                'id' => 3433,
                'code' => '710401',
                'name' => '中区',
                'parentId' => '710400',
                'level' => '3',
            ),
            433 => 
            array (
                'id' => 3434,
                'code' => '710402',
                'name' => '东区',
                'parentId' => '710400',
                'level' => '3',
            ),
            434 => 
            array (
                'id' => 3435,
                'code' => '710403',
                'name' => '南区',
                'parentId' => '710400',
                'level' => '3',
            ),
            435 => 
            array (
                'id' => 3436,
                'code' => '710404',
                'name' => '西区',
                'parentId' => '710400',
                'level' => '3',
            ),
            436 => 
            array (
                'id' => 3437,
                'code' => '710405',
                'name' => '北区',
                'parentId' => '710400',
                'level' => '3',
            ),
            437 => 
            array (
                'id' => 3438,
                'code' => '710406',
                'name' => '西屯区',
                'parentId' => '710400',
                'level' => '3',
            ),
            438 => 
            array (
                'id' => 3439,
                'code' => '710407',
                'name' => '南屯区',
                'parentId' => '710400',
                'level' => '3',
            ),
            439 => 
            array (
                'id' => 3440,
                'code' => '710408',
                'name' => '北屯区',
                'parentId' => '710400',
                'level' => '3',
            ),
            440 => 
            array (
                'id' => 3441,
                'code' => '710409',
                'name' => '丰原区',
                'parentId' => '710400',
                'level' => '3',
            ),
            441 => 
            array (
                'id' => 3442,
                'code' => '710410',
                'name' => '东势区',
                'parentId' => '710400',
                'level' => '3',
            ),
            442 => 
            array (
                'id' => 3443,
                'code' => '710411',
                'name' => '大甲区',
                'parentId' => '710400',
                'level' => '3',
            ),
            443 => 
            array (
                'id' => 3444,
                'code' => '710412',
                'name' => '清水区',
                'parentId' => '710400',
                'level' => '3',
            ),
            444 => 
            array (
                'id' => 3445,
                'code' => '710413',
                'name' => '沙鹿区',
                'parentId' => '710400',
                'level' => '3',
            ),
            445 => 
            array (
                'id' => 3446,
                'code' => '710414',
                'name' => '梧栖区',
                'parentId' => '710400',
                'level' => '3',
            ),
            446 => 
            array (
                'id' => 3447,
                'code' => '710415',
                'name' => '后里区',
                'parentId' => '710400',
                'level' => '3',
            ),
            447 => 
            array (
                'id' => 3448,
                'code' => '710416',
                'name' => '神冈区',
                'parentId' => '710400',
                'level' => '3',
            ),
            448 => 
            array (
                'id' => 3449,
                'code' => '710417',
                'name' => '潭子区',
                'parentId' => '710400',
                'level' => '3',
            ),
            449 => 
            array (
                'id' => 3450,
                'code' => '710418',
                'name' => '大雅区',
                'parentId' => '710400',
                'level' => '3',
            ),
            450 => 
            array (
                'id' => 3451,
                'code' => '710419',
                'name' => '新社区',
                'parentId' => '710400',
                'level' => '3',
            ),
            451 => 
            array (
                'id' => 3452,
                'code' => '710420',
                'name' => '石冈区',
                'parentId' => '710400',
                'level' => '3',
            ),
            452 => 
            array (
                'id' => 3453,
                'code' => '710421',
                'name' => '外埔区',
                'parentId' => '710400',
                'level' => '3',
            ),
            453 => 
            array (
                'id' => 3454,
                'code' => '710422',
                'name' => '大安区',
                'parentId' => '710400',
                'level' => '3',
            ),
            454 => 
            array (
                'id' => 3455,
                'code' => '710423',
                'name' => '乌日区',
                'parentId' => '710400',
                'level' => '3',
            ),
            455 => 
            array (
                'id' => 3456,
                'code' => '710424',
                'name' => '大肚区',
                'parentId' => '710400',
                'level' => '3',
            ),
            456 => 
            array (
                'id' => 3457,
                'code' => '710425',
                'name' => '龙井区',
                'parentId' => '710400',
                'level' => '3',
            ),
            457 => 
            array (
                'id' => 3458,
                'code' => '710426',
                'name' => '雾峰区',
                'parentId' => '710400',
                'level' => '3',
            ),
            458 => 
            array (
                'id' => 3459,
                'code' => '710427',
                'name' => '太平区',
                'parentId' => '710400',
                'level' => '3',
            ),
            459 => 
            array (
                'id' => 3460,
                'code' => '710428',
                'name' => '大里区',
                'parentId' => '710400',
                'level' => '3',
            ),
            460 => 
            array (
                'id' => 3461,
                'code' => '710429',
                'name' => '和平区',
                'parentId' => '710400',
                'level' => '3',
            ),
            461 => 
            array (
                'id' => 3462,
                'code' => '710500',
                'name' => '台南市',
                'parentId' => '710000',
                'level' => '2',
            ),
            462 => 
            array (
                'id' => 3463,
                'code' => '710501',
                'name' => '东区',
                'parentId' => '710500',
                'level' => '3',
            ),
            463 => 
            array (
                'id' => 3464,
                'code' => '710502',
                'name' => '南区',
                'parentId' => '710500',
                'level' => '3',
            ),
            464 => 
            array (
                'id' => 3465,
                'code' => '710504',
                'name' => '北区',
                'parentId' => '710500',
                'level' => '3',
            ),
            465 => 
            array (
                'id' => 3466,
                'code' => '710506',
                'name' => '安南区',
                'parentId' => '710500',
                'level' => '3',
            ),
            466 => 
            array (
                'id' => 3467,
                'code' => '710507',
                'name' => '安平区',
                'parentId' => '710500',
                'level' => '3',
            ),
            467 => 
            array (
                'id' => 3468,
                'code' => '710508',
                'name' => '中西区',
                'parentId' => '710500',
                'level' => '3',
            ),
            468 => 
            array (
                'id' => 3469,
                'code' => '710509',
                'name' => '新营区',
                'parentId' => '710500',
                'level' => '3',
            ),
            469 => 
            array (
                'id' => 3470,
                'code' => '710510',
                'name' => '盐水区',
                'parentId' => '710500',
                'level' => '3',
            ),
            470 => 
            array (
                'id' => 3471,
                'code' => '710511',
                'name' => '白河区',
                'parentId' => '710500',
                'level' => '3',
            ),
            471 => 
            array (
                'id' => 3472,
                'code' => '710512',
                'name' => '柳营区',
                'parentId' => '710500',
                'level' => '3',
            ),
            472 => 
            array (
                'id' => 3473,
                'code' => '710513',
                'name' => '后壁区',
                'parentId' => '710500',
                'level' => '3',
            ),
            473 => 
            array (
                'id' => 3474,
                'code' => '710514',
                'name' => '东山区',
                'parentId' => '710500',
                'level' => '3',
            ),
            474 => 
            array (
                'id' => 3475,
                'code' => '710515',
                'name' => '麻豆区',
                'parentId' => '710500',
                'level' => '3',
            ),
            475 => 
            array (
                'id' => 3476,
                'code' => '710516',
                'name' => '下营区',
                'parentId' => '710500',
                'level' => '3',
            ),
            476 => 
            array (
                'id' => 3477,
                'code' => '710517',
                'name' => '六甲区',
                'parentId' => '710500',
                'level' => '3',
            ),
            477 => 
            array (
                'id' => 3478,
                'code' => '710518',
                'name' => '官田区',
                'parentId' => '710500',
                'level' => '3',
            ),
            478 => 
            array (
                'id' => 3479,
                'code' => '710519',
                'name' => '大内区',
                'parentId' => '710500',
                'level' => '3',
            ),
            479 => 
            array (
                'id' => 3480,
                'code' => '710520',
                'name' => '佳里区',
                'parentId' => '710500',
                'level' => '3',
            ),
            480 => 
            array (
                'id' => 3481,
                'code' => '710521',
                'name' => '学甲区',
                'parentId' => '710500',
                'level' => '3',
            ),
            481 => 
            array (
                'id' => 3482,
                'code' => '710522',
                'name' => '西港区',
                'parentId' => '710500',
                'level' => '3',
            ),
            482 => 
            array (
                'id' => 3483,
                'code' => '710523',
                'name' => '七股区',
                'parentId' => '710500',
                'level' => '3',
            ),
            483 => 
            array (
                'id' => 3484,
                'code' => '710524',
                'name' => '将军区',
                'parentId' => '710500',
                'level' => '3',
            ),
            484 => 
            array (
                'id' => 3485,
                'code' => '710525',
                'name' => '北门区',
                'parentId' => '710500',
                'level' => '3',
            ),
            485 => 
            array (
                'id' => 3486,
                'code' => '710526',
                'name' => '新化区',
                'parentId' => '710500',
                'level' => '3',
            ),
            486 => 
            array (
                'id' => 3487,
                'code' => '710527',
                'name' => '善化区',
                'parentId' => '710500',
                'level' => '3',
            ),
            487 => 
            array (
                'id' => 3488,
                'code' => '710528',
                'name' => '新市区',
                'parentId' => '710500',
                'level' => '3',
            ),
            488 => 
            array (
                'id' => 3489,
                'code' => '710529',
                'name' => '安定区',
                'parentId' => '710500',
                'level' => '3',
            ),
            489 => 
            array (
                'id' => 3490,
                'code' => '710530',
                'name' => '山上区',
                'parentId' => '710500',
                'level' => '3',
            ),
            490 => 
            array (
                'id' => 3491,
                'code' => '710531',
                'name' => '玉井区',
                'parentId' => '710500',
                'level' => '3',
            ),
            491 => 
            array (
                'id' => 3492,
                'code' => '710532',
                'name' => '楠西区',
                'parentId' => '710500',
                'level' => '3',
            ),
            492 => 
            array (
                'id' => 3493,
                'code' => '710533',
                'name' => '南化区',
                'parentId' => '710500',
                'level' => '3',
            ),
            493 => 
            array (
                'id' => 3494,
                'code' => '710534',
                'name' => '左镇区',
                'parentId' => '710500',
                'level' => '3',
            ),
            494 => 
            array (
                'id' => 3495,
                'code' => '710535',
                'name' => '仁德区',
                'parentId' => '710500',
                'level' => '3',
            ),
            495 => 
            array (
                'id' => 3496,
                'code' => '710536',
                'name' => '归仁区',
                'parentId' => '710500',
                'level' => '3',
            ),
            496 => 
            array (
                'id' => 3497,
                'code' => '710537',
                'name' => '关庙区',
                'parentId' => '710500',
                'level' => '3',
            ),
            497 => 
            array (
                'id' => 3498,
                'code' => '710538',
                'name' => '龙崎区',
                'parentId' => '710500',
                'level' => '3',
            ),
            498 => 
            array (
                'id' => 3499,
                'code' => '710539',
                'name' => '永康区',
                'parentId' => '710500',
                'level' => '3',
            ),
            499 => 
            array (
                'id' => 3500,
                'code' => '710600',
                'name' => '新竹市',
                'parentId' => '710000',
                'level' => '2',
            ),
        ));
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 3501,
                'code' => '710601',
                'name' => '东区',
                'parentId' => '710600',
                'level' => '3',
            ),
            1 => 
            array (
                'id' => 3502,
                'code' => '710602',
                'name' => '北区',
                'parentId' => '710600',
                'level' => '3',
            ),
            2 => 
            array (
                'id' => 3503,
                'code' => '710603',
                'name' => '香山区',
                'parentId' => '710600',
                'level' => '3',
            ),
            3 => 
            array (
                'id' => 3504,
                'code' => '710700',
                'name' => '嘉义市',
                'parentId' => '710000',
                'level' => '2',
            ),
            4 => 
            array (
                'id' => 3505,
                'code' => '710701',
                'name' => '东区',
                'parentId' => '710700',
                'level' => '3',
            ),
            5 => 
            array (
                'id' => 3506,
                'code' => '710702',
                'name' => '西区',
                'parentId' => '710700',
                'level' => '3',
            ),
            6 => 
            array (
                'id' => 3507,
                'code' => '710800',
                'name' => '新北市',
                'parentId' => '710000',
                'level' => '2',
            ),
            7 => 
            array (
                'id' => 3508,
                'code' => '710801',
                'name' => '板桥区',
                'parentId' => '710800',
                'level' => '3',
            ),
            8 => 
            array (
                'id' => 3509,
                'code' => '710802',
                'name' => '三重区',
                'parentId' => '710800',
                'level' => '3',
            ),
            9 => 
            array (
                'id' => 3510,
                'code' => '710803',
                'name' => '中和区',
                'parentId' => '710800',
                'level' => '3',
            ),
            10 => 
            array (
                'id' => 3511,
                'code' => '710804',
                'name' => '永和区',
                'parentId' => '710800',
                'level' => '3',
            ),
            11 => 
            array (
                'id' => 3512,
                'code' => '710805',
                'name' => '新庄区',
                'parentId' => '710800',
                'level' => '3',
            ),
            12 => 
            array (
                'id' => 3513,
                'code' => '710806',
                'name' => '新店区',
                'parentId' => '710800',
                'level' => '3',
            ),
            13 => 
            array (
                'id' => 3514,
                'code' => '710807',
                'name' => '树林区',
                'parentId' => '710800',
                'level' => '3',
            ),
            14 => 
            array (
                'id' => 3515,
                'code' => '710808',
                'name' => '莺歌区',
                'parentId' => '710800',
                'level' => '3',
            ),
            15 => 
            array (
                'id' => 3516,
                'code' => '710809',
                'name' => '三峡区',
                'parentId' => '710800',
                'level' => '3',
            ),
            16 => 
            array (
                'id' => 3517,
                'code' => '710810',
                'name' => '淡水区',
                'parentId' => '710800',
                'level' => '3',
            ),
            17 => 
            array (
                'id' => 3518,
                'code' => '710811',
                'name' => '汐止区',
                'parentId' => '710800',
                'level' => '3',
            ),
            18 => 
            array (
                'id' => 3519,
                'code' => '710812',
                'name' => '瑞芳区',
                'parentId' => '710800',
                'level' => '3',
            ),
            19 => 
            array (
                'id' => 3520,
                'code' => '710813',
                'name' => '土城区',
                'parentId' => '710800',
                'level' => '3',
            ),
            20 => 
            array (
                'id' => 3521,
                'code' => '710814',
                'name' => '芦洲区',
                'parentId' => '710800',
                'level' => '3',
            ),
            21 => 
            array (
                'id' => 3522,
                'code' => '710815',
                'name' => '五股区',
                'parentId' => '710800',
                'level' => '3',
            ),
            22 => 
            array (
                'id' => 3523,
                'code' => '710816',
                'name' => '泰山区',
                'parentId' => '710800',
                'level' => '3',
            ),
            23 => 
            array (
                'id' => 3524,
                'code' => '710817',
                'name' => '林口区',
                'parentId' => '710800',
                'level' => '3',
            ),
            24 => 
            array (
                'id' => 3525,
                'code' => '710818',
                'name' => '深坑区',
                'parentId' => '710800',
                'level' => '3',
            ),
            25 => 
            array (
                'id' => 3526,
                'code' => '710819',
                'name' => '石碇区',
                'parentId' => '710800',
                'level' => '3',
            ),
            26 => 
            array (
                'id' => 3527,
                'code' => '710820',
                'name' => '坪林区',
                'parentId' => '710800',
                'level' => '3',
            ),
            27 => 
            array (
                'id' => 3528,
                'code' => '710821',
                'name' => '三芝区',
                'parentId' => '710800',
                'level' => '3',
            ),
            28 => 
            array (
                'id' => 3529,
                'code' => '710822',
                'name' => '石门区',
                'parentId' => '710800',
                'level' => '3',
            ),
            29 => 
            array (
                'id' => 3530,
                'code' => '710823',
                'name' => '八里区',
                'parentId' => '710800',
                'level' => '3',
            ),
            30 => 
            array (
                'id' => 3531,
                'code' => '710824',
                'name' => '平溪区',
                'parentId' => '710800',
                'level' => '3',
            ),
            31 => 
            array (
                'id' => 3532,
                'code' => '710825',
                'name' => '双溪区',
                'parentId' => '710800',
                'level' => '3',
            ),
            32 => 
            array (
                'id' => 3533,
                'code' => '710826',
                'name' => '贡寮区',
                'parentId' => '710800',
                'level' => '3',
            ),
            33 => 
            array (
                'id' => 3534,
                'code' => '710827',
                'name' => '金山区',
                'parentId' => '710800',
                'level' => '3',
            ),
            34 => 
            array (
                'id' => 3535,
                'code' => '710828',
                'name' => '万里区',
                'parentId' => '710800',
                'level' => '3',
            ),
            35 => 
            array (
                'id' => 3536,
                'code' => '710829',
                'name' => '乌来区',
                'parentId' => '710800',
                'level' => '3',
            ),
            36 => 
            array (
                'id' => 3537,
                'code' => '712200',
                'name' => '宜兰县',
                'parentId' => '710000',
                'level' => '2',
            ),
            37 => 
            array (
                'id' => 3538,
                'code' => '712201',
                'name' => '宜兰市',
                'parentId' => '712200',
                'level' => '3',
            ),
            38 => 
            array (
                'id' => 3539,
                'code' => '712221',
                'name' => '罗东镇',
                'parentId' => '712200',
                'level' => '3',
            ),
            39 => 
            array (
                'id' => 3540,
                'code' => '712222',
                'name' => '苏澳镇',
                'parentId' => '712200',
                'level' => '3',
            ),
            40 => 
            array (
                'id' => 3541,
                'code' => '712223',
                'name' => '头城镇',
                'parentId' => '712200',
                'level' => '3',
            ),
            41 => 
            array (
                'id' => 3542,
                'code' => '712224',
                'name' => '礁溪乡',
                'parentId' => '712200',
                'level' => '3',
            ),
            42 => 
            array (
                'id' => 3543,
                'code' => '712225',
                'name' => '壮围乡',
                'parentId' => '712200',
                'level' => '3',
            ),
            43 => 
            array (
                'id' => 3544,
                'code' => '712226',
                'name' => '员山乡',
                'parentId' => '712200',
                'level' => '3',
            ),
            44 => 
            array (
                'id' => 3545,
                'code' => '712227',
                'name' => '冬山乡',
                'parentId' => '712200',
                'level' => '3',
            ),
            45 => 
            array (
                'id' => 3546,
                'code' => '712228',
                'name' => '五结乡',
                'parentId' => '712200',
                'level' => '3',
            ),
            46 => 
            array (
                'id' => 3547,
                'code' => '712229',
                'name' => '三星乡',
                'parentId' => '712200',
                'level' => '3',
            ),
            47 => 
            array (
                'id' => 3548,
                'code' => '712230',
                'name' => '大同乡',
                'parentId' => '712200',
                'level' => '3',
            ),
            48 => 
            array (
                'id' => 3549,
                'code' => '712231',
                'name' => '南澳乡',
                'parentId' => '712200',
                'level' => '3',
            ),
            49 => 
            array (
                'id' => 3550,
                'code' => '712300',
                'name' => '桃园县',
                'parentId' => '710000',
                'level' => '2',
            ),
            50 => 
            array (
                'id' => 3551,
                'code' => '712301',
                'name' => '桃园市',
                'parentId' => '712300',
                'level' => '3',
            ),
            51 => 
            array (
                'id' => 3552,
                'code' => '712302',
                'name' => '中坜市',
                'parentId' => '712300',
                'level' => '3',
            ),
            52 => 
            array (
                'id' => 3553,
                'code' => '712303',
                'name' => '平镇市',
                'parentId' => '712300',
                'level' => '3',
            ),
            53 => 
            array (
                'id' => 3554,
                'code' => '712304',
                'name' => '八德市',
                'parentId' => '712300',
                'level' => '3',
            ),
            54 => 
            array (
                'id' => 3555,
                'code' => '712305',
                'name' => '杨梅市',
                'parentId' => '712300',
                'level' => '3',
            ),
            55 => 
            array (
                'id' => 3556,
                'code' => '712306',
                'name' => '芦竹市',
                'parentId' => '712300',
                'level' => '3',
            ),
            56 => 
            array (
                'id' => 3557,
                'code' => '712321',
                'name' => '大溪镇',
                'parentId' => '712300',
                'level' => '3',
            ),
            57 => 
            array (
                'id' => 3558,
                'code' => '712324',
                'name' => '大园乡',
                'parentId' => '712300',
                'level' => '3',
            ),
            58 => 
            array (
                'id' => 3559,
                'code' => '712325',
                'name' => '龟山乡',
                'parentId' => '712300',
                'level' => '3',
            ),
            59 => 
            array (
                'id' => 3560,
                'code' => '712327',
                'name' => '龙潭乡',
                'parentId' => '712300',
                'level' => '3',
            ),
            60 => 
            array (
                'id' => 3561,
                'code' => '712329',
                'name' => '新屋乡',
                'parentId' => '712300',
                'level' => '3',
            ),
            61 => 
            array (
                'id' => 3562,
                'code' => '712330',
                'name' => '观音乡',
                'parentId' => '712300',
                'level' => '3',
            ),
            62 => 
            array (
                'id' => 3563,
                'code' => '712331',
                'name' => '复兴乡',
                'parentId' => '712300',
                'level' => '3',
            ),
            63 => 
            array (
                'id' => 3564,
                'code' => '712400',
                'name' => '新竹县',
                'parentId' => '710000',
                'level' => '2',
            ),
            64 => 
            array (
                'id' => 3565,
                'code' => '712401',
                'name' => '竹北市',
                'parentId' => '712400',
                'level' => '3',
            ),
            65 => 
            array (
                'id' => 3566,
                'code' => '712421',
                'name' => '竹东镇',
                'parentId' => '712400',
                'level' => '3',
            ),
            66 => 
            array (
                'id' => 3567,
                'code' => '712422',
                'name' => '新埔镇',
                'parentId' => '712400',
                'level' => '3',
            ),
            67 => 
            array (
                'id' => 3568,
                'code' => '712423',
                'name' => '关西镇',
                'parentId' => '712400',
                'level' => '3',
            ),
            68 => 
            array (
                'id' => 3569,
                'code' => '712424',
                'name' => '湖口乡',
                'parentId' => '712400',
                'level' => '3',
            ),
            69 => 
            array (
                'id' => 3570,
                'code' => '712425',
                'name' => '新丰乡',
                'parentId' => '712400',
                'level' => '3',
            ),
            70 => 
            array (
                'id' => 3571,
                'code' => '712426',
                'name' => '芎林乡',
                'parentId' => '712400',
                'level' => '3',
            ),
            71 => 
            array (
                'id' => 3572,
                'code' => '712427',
                'name' => '横山乡',
                'parentId' => '712400',
                'level' => '3',
            ),
            72 => 
            array (
                'id' => 3573,
                'code' => '712428',
                'name' => '北埔乡',
                'parentId' => '712400',
                'level' => '3',
            ),
            73 => 
            array (
                'id' => 3574,
                'code' => '712429',
                'name' => '宝山乡',
                'parentId' => '712400',
                'level' => '3',
            ),
            74 => 
            array (
                'id' => 3575,
                'code' => '712430',
                'name' => '峨眉乡',
                'parentId' => '712400',
                'level' => '3',
            ),
            75 => 
            array (
                'id' => 3576,
                'code' => '712431',
                'name' => '尖石乡',
                'parentId' => '712400',
                'level' => '3',
            ),
            76 => 
            array (
                'id' => 3577,
                'code' => '712432',
                'name' => '五峰乡',
                'parentId' => '712400',
                'level' => '3',
            ),
            77 => 
            array (
                'id' => 3578,
                'code' => '712500',
                'name' => '苗栗县',
                'parentId' => '710000',
                'level' => '2',
            ),
            78 => 
            array (
                'id' => 3579,
                'code' => '712501',
                'name' => '苗栗市',
                'parentId' => '712500',
                'level' => '3',
            ),
            79 => 
            array (
                'id' => 3580,
                'code' => '712521',
                'name' => '苑里镇',
                'parentId' => '712500',
                'level' => '3',
            ),
            80 => 
            array (
                'id' => 3581,
                'code' => '712522',
                'name' => '通霄镇',
                'parentId' => '712500',
                'level' => '3',
            ),
            81 => 
            array (
                'id' => 3582,
                'code' => '712523',
                'name' => '竹南镇',
                'parentId' => '712500',
                'level' => '3',
            ),
            82 => 
            array (
                'id' => 3583,
                'code' => '712524',
                'name' => '头份镇',
                'parentId' => '712500',
                'level' => '3',
            ),
            83 => 
            array (
                'id' => 3584,
                'code' => '712525',
                'name' => '后龙镇',
                'parentId' => '712500',
                'level' => '3',
            ),
            84 => 
            array (
                'id' => 3585,
                'code' => '712526',
                'name' => '卓兰镇',
                'parentId' => '712500',
                'level' => '3',
            ),
            85 => 
            array (
                'id' => 3586,
                'code' => '712527',
                'name' => '大湖乡',
                'parentId' => '712500',
                'level' => '3',
            ),
            86 => 
            array (
                'id' => 3587,
                'code' => '712528',
                'name' => '公馆乡',
                'parentId' => '712500',
                'level' => '3',
            ),
            87 => 
            array (
                'id' => 3588,
                'code' => '712529',
                'name' => '铜锣乡',
                'parentId' => '712500',
                'level' => '3',
            ),
            88 => 
            array (
                'id' => 3589,
                'code' => '712530',
                'name' => '南庄乡',
                'parentId' => '712500',
                'level' => '3',
            ),
            89 => 
            array (
                'id' => 3590,
                'code' => '712531',
                'name' => '头屋乡',
                'parentId' => '712500',
                'level' => '3',
            ),
            90 => 
            array (
                'id' => 3591,
                'code' => '712532',
                'name' => '三义乡',
                'parentId' => '712500',
                'level' => '3',
            ),
            91 => 
            array (
                'id' => 3592,
                'code' => '712533',
                'name' => '西湖乡',
                'parentId' => '712500',
                'level' => '3',
            ),
            92 => 
            array (
                'id' => 3593,
                'code' => '712534',
                'name' => '造桥乡',
                'parentId' => '712500',
                'level' => '3',
            ),
            93 => 
            array (
                'id' => 3594,
                'code' => '712535',
                'name' => '三湾乡',
                'parentId' => '712500',
                'level' => '3',
            ),
            94 => 
            array (
                'id' => 3595,
                'code' => '712536',
                'name' => '狮潭乡',
                'parentId' => '712500',
                'level' => '3',
            ),
            95 => 
            array (
                'id' => 3596,
                'code' => '712537',
                'name' => '泰安乡',
                'parentId' => '712500',
                'level' => '3',
            ),
            96 => 
            array (
                'id' => 3597,
                'code' => '712700',
                'name' => '彰化县',
                'parentId' => '710000',
                'level' => '2',
            ),
            97 => 
            array (
                'id' => 3598,
                'code' => '712701',
                'name' => '彰化市',
                'parentId' => '712700',
                'level' => '3',
            ),
            98 => 
            array (
                'id' => 3599,
                'code' => '712721',
                'name' => '鹿港镇',
                'parentId' => '712700',
                'level' => '3',
            ),
            99 => 
            array (
                'id' => 3600,
                'code' => '712722',
                'name' => '和美镇',
                'parentId' => '712700',
                'level' => '3',
            ),
            100 => 
            array (
                'id' => 3601,
                'code' => '712723',
                'name' => '线西乡',
                'parentId' => '712700',
                'level' => '3',
            ),
            101 => 
            array (
                'id' => 3602,
                'code' => '712724',
                'name' => '伸港乡',
                'parentId' => '712700',
                'level' => '3',
            ),
            102 => 
            array (
                'id' => 3603,
                'code' => '712725',
                'name' => '福兴乡',
                'parentId' => '712700',
                'level' => '3',
            ),
            103 => 
            array (
                'id' => 3604,
                'code' => '712726',
                'name' => '秀水乡',
                'parentId' => '712700',
                'level' => '3',
            ),
            104 => 
            array (
                'id' => 3605,
                'code' => '712727',
                'name' => '花坛乡',
                'parentId' => '712700',
                'level' => '3',
            ),
            105 => 
            array (
                'id' => 3606,
                'code' => '712728',
                'name' => '芬园乡',
                'parentId' => '712700',
                'level' => '3',
            ),
            106 => 
            array (
                'id' => 3607,
                'code' => '712729',
                'name' => '员林镇',
                'parentId' => '712700',
                'level' => '3',
            ),
            107 => 
            array (
                'id' => 3608,
                'code' => '712730',
                'name' => '溪湖镇',
                'parentId' => '712700',
                'level' => '3',
            ),
            108 => 
            array (
                'id' => 3609,
                'code' => '712731',
                'name' => '田中镇',
                'parentId' => '712700',
                'level' => '3',
            ),
            109 => 
            array (
                'id' => 3610,
                'code' => '712732',
                'name' => '大村乡',
                'parentId' => '712700',
                'level' => '3',
            ),
            110 => 
            array (
                'id' => 3611,
                'code' => '712733',
                'name' => '埔盐乡',
                'parentId' => '712700',
                'level' => '3',
            ),
            111 => 
            array (
                'id' => 3612,
                'code' => '712734',
                'name' => '埔心乡',
                'parentId' => '712700',
                'level' => '3',
            ),
            112 => 
            array (
                'id' => 3613,
                'code' => '712735',
                'name' => '永靖乡',
                'parentId' => '712700',
                'level' => '3',
            ),
            113 => 
            array (
                'id' => 3614,
                'code' => '712736',
                'name' => '社头乡',
                'parentId' => '712700',
                'level' => '3',
            ),
            114 => 
            array (
                'id' => 3615,
                'code' => '712737',
                'name' => '二水乡',
                'parentId' => '712700',
                'level' => '3',
            ),
            115 => 
            array (
                'id' => 3616,
                'code' => '712738',
                'name' => '北斗镇',
                'parentId' => '712700',
                'level' => '3',
            ),
            116 => 
            array (
                'id' => 3617,
                'code' => '712739',
                'name' => '二林镇',
                'parentId' => '712700',
                'level' => '3',
            ),
            117 => 
            array (
                'id' => 3618,
                'code' => '712740',
                'name' => '田尾乡',
                'parentId' => '712700',
                'level' => '3',
            ),
            118 => 
            array (
                'id' => 3619,
                'code' => '712741',
                'name' => '埤头乡',
                'parentId' => '712700',
                'level' => '3',
            ),
            119 => 
            array (
                'id' => 3620,
                'code' => '712742',
                'name' => '芳苑乡',
                'parentId' => '712700',
                'level' => '3',
            ),
            120 => 
            array (
                'id' => 3621,
                'code' => '712743',
                'name' => '大城乡',
                'parentId' => '712700',
                'level' => '3',
            ),
            121 => 
            array (
                'id' => 3622,
                'code' => '712744',
                'name' => '竹塘乡',
                'parentId' => '712700',
                'level' => '3',
            ),
            122 => 
            array (
                'id' => 3623,
                'code' => '712745',
                'name' => '溪州乡',
                'parentId' => '712700',
                'level' => '3',
            ),
            123 => 
            array (
                'id' => 3624,
                'code' => '712800',
                'name' => '南投县',
                'parentId' => '710000',
                'level' => '2',
            ),
            124 => 
            array (
                'id' => 3625,
                'code' => '712801',
                'name' => '南投市',
                'parentId' => '712800',
                'level' => '3',
            ),
            125 => 
            array (
                'id' => 3626,
                'code' => '712821',
                'name' => '埔里镇',
                'parentId' => '712800',
                'level' => '3',
            ),
            126 => 
            array (
                'id' => 3627,
                'code' => '712822',
                'name' => '草屯镇',
                'parentId' => '712800',
                'level' => '3',
            ),
            127 => 
            array (
                'id' => 3628,
                'code' => '712823',
                'name' => '竹山镇',
                'parentId' => '712800',
                'level' => '3',
            ),
            128 => 
            array (
                'id' => 3629,
                'code' => '712824',
                'name' => '集集镇',
                'parentId' => '712800',
                'level' => '3',
            ),
            129 => 
            array (
                'id' => 3630,
                'code' => '712825',
                'name' => '名间乡',
                'parentId' => '712800',
                'level' => '3',
            ),
            130 => 
            array (
                'id' => 3631,
                'code' => '712826',
                'name' => '鹿谷乡',
                'parentId' => '712800',
                'level' => '3',
            ),
            131 => 
            array (
                'id' => 3632,
                'code' => '712827',
                'name' => '中寮乡',
                'parentId' => '712800',
                'level' => '3',
            ),
            132 => 
            array (
                'id' => 3633,
                'code' => '712828',
                'name' => '鱼池乡',
                'parentId' => '712800',
                'level' => '3',
            ),
            133 => 
            array (
                'id' => 3634,
                'code' => '712829',
                'name' => '国姓乡',
                'parentId' => '712800',
                'level' => '3',
            ),
            134 => 
            array (
                'id' => 3635,
                'code' => '712830',
                'name' => '水里乡',
                'parentId' => '712800',
                'level' => '3',
            ),
            135 => 
            array (
                'id' => 3636,
                'code' => '712831',
                'name' => '信义乡',
                'parentId' => '712800',
                'level' => '3',
            ),
            136 => 
            array (
                'id' => 3637,
                'code' => '712832',
                'name' => '仁爱乡',
                'parentId' => '712800',
                'level' => '3',
            ),
            137 => 
            array (
                'id' => 3638,
                'code' => '712900',
                'name' => '云林县',
                'parentId' => '710000',
                'level' => '2',
            ),
            138 => 
            array (
                'id' => 3639,
                'code' => '712901',
                'name' => '斗六市',
                'parentId' => '712900',
                'level' => '3',
            ),
            139 => 
            array (
                'id' => 3640,
                'code' => '712921',
                'name' => '斗南镇',
                'parentId' => '712900',
                'level' => '3',
            ),
            140 => 
            array (
                'id' => 3641,
                'code' => '712922',
                'name' => '虎尾镇',
                'parentId' => '712900',
                'level' => '3',
            ),
            141 => 
            array (
                'id' => 3642,
                'code' => '712923',
                'name' => '西螺镇',
                'parentId' => '712900',
                'level' => '3',
            ),
            142 => 
            array (
                'id' => 3643,
                'code' => '712924',
                'name' => '土库镇',
                'parentId' => '712900',
                'level' => '3',
            ),
            143 => 
            array (
                'id' => 3644,
                'code' => '712925',
                'name' => '北港镇',
                'parentId' => '712900',
                'level' => '3',
            ),
            144 => 
            array (
                'id' => 3645,
                'code' => '712926',
                'name' => '古坑乡',
                'parentId' => '712900',
                'level' => '3',
            ),
            145 => 
            array (
                'id' => 3646,
                'code' => '712927',
                'name' => '大埤乡',
                'parentId' => '712900',
                'level' => '3',
            ),
            146 => 
            array (
                'id' => 3647,
                'code' => '712928',
                'name' => '莿桐乡',
                'parentId' => '712900',
                'level' => '3',
            ),
            147 => 
            array (
                'id' => 3648,
                'code' => '712929',
                'name' => '林内乡',
                'parentId' => '712900',
                'level' => '3',
            ),
            148 => 
            array (
                'id' => 3649,
                'code' => '712930',
                'name' => '二仑乡',
                'parentId' => '712900',
                'level' => '3',
            ),
            149 => 
            array (
                'id' => 3650,
                'code' => '712931',
                'name' => '仑背乡',
                'parentId' => '712900',
                'level' => '3',
            ),
            150 => 
            array (
                'id' => 3651,
                'code' => '712932',
                'name' => '麦寮乡',
                'parentId' => '712900',
                'level' => '3',
            ),
            151 => 
            array (
                'id' => 3652,
                'code' => '712933',
                'name' => '东势乡',
                'parentId' => '712900',
                'level' => '3',
            ),
            152 => 
            array (
                'id' => 3653,
                'code' => '712934',
                'name' => '褒忠乡',
                'parentId' => '712900',
                'level' => '3',
            ),
            153 => 
            array (
                'id' => 3654,
                'code' => '712935',
                'name' => '台西乡',
                'parentId' => '712900',
                'level' => '3',
            ),
            154 => 
            array (
                'id' => 3655,
                'code' => '712936',
                'name' => '元长乡',
                'parentId' => '712900',
                'level' => '3',
            ),
            155 => 
            array (
                'id' => 3656,
                'code' => '712937',
                'name' => '四湖乡',
                'parentId' => '712900',
                'level' => '3',
            ),
            156 => 
            array (
                'id' => 3657,
                'code' => '712938',
                'name' => '口湖乡',
                'parentId' => '712900',
                'level' => '3',
            ),
            157 => 
            array (
                'id' => 3658,
                'code' => '712939',
                'name' => '水林乡',
                'parentId' => '712900',
                'level' => '3',
            ),
            158 => 
            array (
                'id' => 3659,
                'code' => '713000',
                'name' => '嘉义县',
                'parentId' => '710000',
                'level' => '2',
            ),
            159 => 
            array (
                'id' => 3660,
                'code' => '713001',
                'name' => '太保市',
                'parentId' => '713000',
                'level' => '3',
            ),
            160 => 
            array (
                'id' => 3661,
                'code' => '713002',
                'name' => '朴子市',
                'parentId' => '713000',
                'level' => '3',
            ),
            161 => 
            array (
                'id' => 3662,
                'code' => '713023',
                'name' => '布袋镇',
                'parentId' => '713000',
                'level' => '3',
            ),
            162 => 
            array (
                'id' => 3663,
                'code' => '713024',
                'name' => '大林镇',
                'parentId' => '713000',
                'level' => '3',
            ),
            163 => 
            array (
                'id' => 3664,
                'code' => '713025',
                'name' => '民雄乡',
                'parentId' => '713000',
                'level' => '3',
            ),
            164 => 
            array (
                'id' => 3665,
                'code' => '713026',
                'name' => '溪口乡',
                'parentId' => '713000',
                'level' => '3',
            ),
            165 => 
            array (
                'id' => 3666,
                'code' => '713027',
                'name' => '新港乡',
                'parentId' => '713000',
                'level' => '3',
            ),
            166 => 
            array (
                'id' => 3667,
                'code' => '713028',
                'name' => '六脚乡',
                'parentId' => '713000',
                'level' => '3',
            ),
            167 => 
            array (
                'id' => 3668,
                'code' => '713029',
                'name' => '东石乡',
                'parentId' => '713000',
                'level' => '3',
            ),
            168 => 
            array (
                'id' => 3669,
                'code' => '713030',
                'name' => '义竹乡',
                'parentId' => '713000',
                'level' => '3',
            ),
            169 => 
            array (
                'id' => 3670,
                'code' => '713031',
                'name' => '鹿草乡',
                'parentId' => '713000',
                'level' => '3',
            ),
            170 => 
            array (
                'id' => 3671,
                'code' => '713032',
                'name' => '水上乡',
                'parentId' => '713000',
                'level' => '3',
            ),
            171 => 
            array (
                'id' => 3672,
                'code' => '713033',
                'name' => '中埔乡',
                'parentId' => '713000',
                'level' => '3',
            ),
            172 => 
            array (
                'id' => 3673,
                'code' => '713034',
                'name' => '竹崎乡',
                'parentId' => '713000',
                'level' => '3',
            ),
            173 => 
            array (
                'id' => 3674,
                'code' => '713035',
                'name' => '梅山乡',
                'parentId' => '713000',
                'level' => '3',
            ),
            174 => 
            array (
                'id' => 3675,
                'code' => '713036',
                'name' => '番路乡',
                'parentId' => '713000',
                'level' => '3',
            ),
            175 => 
            array (
                'id' => 3676,
                'code' => '713037',
                'name' => '大埔乡',
                'parentId' => '713000',
                'level' => '3',
            ),
            176 => 
            array (
                'id' => 3677,
                'code' => '713038',
                'name' => '阿里山乡',
                'parentId' => '713000',
                'level' => '3',
            ),
            177 => 
            array (
                'id' => 3678,
                'code' => '713300',
                'name' => '屏东县',
                'parentId' => '710000',
                'level' => '2',
            ),
            178 => 
            array (
                'id' => 3679,
                'code' => '713301',
                'name' => '屏东市',
                'parentId' => '713300',
                'level' => '3',
            ),
            179 => 
            array (
                'id' => 3680,
                'code' => '713321',
                'name' => '潮州镇',
                'parentId' => '713300',
                'level' => '3',
            ),
            180 => 
            array (
                'id' => 3681,
                'code' => '713322',
                'name' => '东港镇',
                'parentId' => '713300',
                'level' => '3',
            ),
            181 => 
            array (
                'id' => 3682,
                'code' => '713323',
                'name' => '恒春镇',
                'parentId' => '713300',
                'level' => '3',
            ),
            182 => 
            array (
                'id' => 3683,
                'code' => '713324',
                'name' => '万丹乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            183 => 
            array (
                'id' => 3684,
                'code' => '713325',
                'name' => '长治乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            184 => 
            array (
                'id' => 3685,
                'code' => '713326',
                'name' => '麟洛乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            185 => 
            array (
                'id' => 3686,
                'code' => '713327',
                'name' => '九如乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            186 => 
            array (
                'id' => 3687,
                'code' => '713328',
                'name' => '里港乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            187 => 
            array (
                'id' => 3688,
                'code' => '713329',
                'name' => '盐埔乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            188 => 
            array (
                'id' => 3689,
                'code' => '713330',
                'name' => '高树乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            189 => 
            array (
                'id' => 3690,
                'code' => '713331',
                'name' => '万峦乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            190 => 
            array (
                'id' => 3691,
                'code' => '713332',
                'name' => '内埔乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            191 => 
            array (
                'id' => 3692,
                'code' => '713333',
                'name' => '竹田乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            192 => 
            array (
                'id' => 3693,
                'code' => '713334',
                'name' => '新埤乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            193 => 
            array (
                'id' => 3694,
                'code' => '713335',
                'name' => '枋寮乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            194 => 
            array (
                'id' => 3695,
                'code' => '713336',
                'name' => '新园乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            195 => 
            array (
                'id' => 3696,
                'code' => '713337',
                'name' => '崁顶乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            196 => 
            array (
                'id' => 3697,
                'code' => '713338',
                'name' => '林边乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            197 => 
            array (
                'id' => 3698,
                'code' => '713339',
                'name' => '南州乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            198 => 
            array (
                'id' => 3699,
                'code' => '713340',
                'name' => '佳冬乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            199 => 
            array (
                'id' => 3700,
                'code' => '713341',
                'name' => '琉球乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            200 => 
            array (
                'id' => 3701,
                'code' => '713342',
                'name' => '车城乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            201 => 
            array (
                'id' => 3702,
                'code' => '713343',
                'name' => '满州乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            202 => 
            array (
                'id' => 3703,
                'code' => '713344',
                'name' => '枋山乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            203 => 
            array (
                'id' => 3704,
                'code' => '713345',
                'name' => '三地门乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            204 => 
            array (
                'id' => 3705,
                'code' => '713346',
                'name' => '雾台乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            205 => 
            array (
                'id' => 3706,
                'code' => '713347',
                'name' => '玛家乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            206 => 
            array (
                'id' => 3707,
                'code' => '713348',
                'name' => '泰武乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            207 => 
            array (
                'id' => 3708,
                'code' => '713349',
                'name' => '来义乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            208 => 
            array (
                'id' => 3709,
                'code' => '713350',
                'name' => '春日乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            209 => 
            array (
                'id' => 3710,
                'code' => '713351',
                'name' => '狮子乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            210 => 
            array (
                'id' => 3711,
                'code' => '713352',
                'name' => '牡丹乡',
                'parentId' => '713300',
                'level' => '3',
            ),
            211 => 
            array (
                'id' => 3712,
                'code' => '713400',
                'name' => '台东县',
                'parentId' => '710000',
                'level' => '2',
            ),
            212 => 
            array (
                'id' => 3713,
                'code' => '713401',
                'name' => '台东市',
                'parentId' => '713400',
                'level' => '3',
            ),
            213 => 
            array (
                'id' => 3714,
                'code' => '713421',
                'name' => '成功镇',
                'parentId' => '713400',
                'level' => '3',
            ),
            214 => 
            array (
                'id' => 3715,
                'code' => '713422',
                'name' => '关山镇',
                'parentId' => '713400',
                'level' => '3',
            ),
            215 => 
            array (
                'id' => 3716,
                'code' => '713423',
                'name' => '卑南乡',
                'parentId' => '713400',
                'level' => '3',
            ),
            216 => 
            array (
                'id' => 3717,
                'code' => '713424',
                'name' => '鹿野乡',
                'parentId' => '713400',
                'level' => '3',
            ),
            217 => 
            array (
                'id' => 3718,
                'code' => '713425',
                'name' => '池上乡',
                'parentId' => '713400',
                'level' => '3',
            ),
            218 => 
            array (
                'id' => 3719,
                'code' => '713426',
                'name' => '东河乡',
                'parentId' => '713400',
                'level' => '3',
            ),
            219 => 
            array (
                'id' => 3720,
                'code' => '713427',
                'name' => '长滨乡',
                'parentId' => '713400',
                'level' => '3',
            ),
            220 => 
            array (
                'id' => 3721,
                'code' => '713428',
                'name' => '太麻里乡',
                'parentId' => '713400',
                'level' => '3',
            ),
            221 => 
            array (
                'id' => 3722,
                'code' => '713429',
                'name' => '大武乡',
                'parentId' => '713400',
                'level' => '3',
            ),
            222 => 
            array (
                'id' => 3723,
                'code' => '713430',
                'name' => '绿岛乡',
                'parentId' => '713400',
                'level' => '3',
            ),
            223 => 
            array (
                'id' => 3724,
                'code' => '713431',
                'name' => '海端乡',
                'parentId' => '713400',
                'level' => '3',
            ),
            224 => 
            array (
                'id' => 3725,
                'code' => '713432',
                'name' => '延平乡',
                'parentId' => '713400',
                'level' => '3',
            ),
            225 => 
            array (
                'id' => 3726,
                'code' => '713433',
                'name' => '金峰乡',
                'parentId' => '713400',
                'level' => '3',
            ),
            226 => 
            array (
                'id' => 3727,
                'code' => '713434',
                'name' => '达仁乡',
                'parentId' => '713400',
                'level' => '3',
            ),
            227 => 
            array (
                'id' => 3728,
                'code' => '713435',
                'name' => '兰屿乡',
                'parentId' => '713400',
                'level' => '3',
            ),
            228 => 
            array (
                'id' => 3729,
                'code' => '713500',
                'name' => '花莲县',
                'parentId' => '710000',
                'level' => '2',
            ),
            229 => 
            array (
                'id' => 3730,
                'code' => '713501',
                'name' => '花莲市',
                'parentId' => '713500',
                'level' => '3',
            ),
            230 => 
            array (
                'id' => 3731,
                'code' => '713521',
                'name' => '凤林镇',
                'parentId' => '713500',
                'level' => '3',
            ),
            231 => 
            array (
                'id' => 3732,
                'code' => '713522',
                'name' => '玉里镇',
                'parentId' => '713500',
                'level' => '3',
            ),
            232 => 
            array (
                'id' => 3733,
                'code' => '713523',
                'name' => '新城乡',
                'parentId' => '713500',
                'level' => '3',
            ),
            233 => 
            array (
                'id' => 3734,
                'code' => '713524',
                'name' => '吉安乡',
                'parentId' => '713500',
                'level' => '3',
            ),
            234 => 
            array (
                'id' => 3735,
                'code' => '713525',
                'name' => '寿丰乡',
                'parentId' => '713500',
                'level' => '3',
            ),
            235 => 
            array (
                'id' => 3736,
                'code' => '713526',
                'name' => '光复乡',
                'parentId' => '713500',
                'level' => '3',
            ),
            236 => 
            array (
                'id' => 3737,
                'code' => '713527',
                'name' => '丰滨乡',
                'parentId' => '713500',
                'level' => '3',
            ),
            237 => 
            array (
                'id' => 3738,
                'code' => '713528',
                'name' => '瑞穗乡',
                'parentId' => '713500',
                'level' => '3',
            ),
            238 => 
            array (
                'id' => 3739,
                'code' => '713529',
                'name' => '富里乡',
                'parentId' => '713500',
                'level' => '3',
            ),
            239 => 
            array (
                'id' => 3740,
                'code' => '713530',
                'name' => '秀林乡',
                'parentId' => '713500',
                'level' => '3',
            ),
            240 => 
            array (
                'id' => 3741,
                'code' => '713531',
                'name' => '万荣乡',
                'parentId' => '713500',
                'level' => '3',
            ),
            241 => 
            array (
                'id' => 3742,
                'code' => '713532',
                'name' => '卓溪乡',
                'parentId' => '713500',
                'level' => '3',
            ),
            242 => 
            array (
                'id' => 3743,
                'code' => '713600',
                'name' => '澎湖县',
                'parentId' => '710000',
                'level' => '2',
            ),
            243 => 
            array (
                'id' => 3744,
                'code' => '713601',
                'name' => '马公市',
                'parentId' => '713600',
                'level' => '3',
            ),
            244 => 
            array (
                'id' => 3745,
                'code' => '713621',
                'name' => '湖西乡',
                'parentId' => '713600',
                'level' => '3',
            ),
            245 => 
            array (
                'id' => 3746,
                'code' => '713622',
                'name' => '白沙乡',
                'parentId' => '713600',
                'level' => '3',
            ),
            246 => 
            array (
                'id' => 3747,
                'code' => '713623',
                'name' => '西屿乡',
                'parentId' => '713600',
                'level' => '3',
            ),
            247 => 
            array (
                'id' => 3748,
                'code' => '713624',
                'name' => '望安乡',
                'parentId' => '713600',
                'level' => '3',
            ),
            248 => 
            array (
                'id' => 3749,
                'code' => '713625',
                'name' => '七美乡',
                'parentId' => '713600',
                'level' => '3',
            ),
            249 => 
            array (
                'id' => 3750,
                'code' => '713700',
                'name' => '金门县',
                'parentId' => '710000',
                'level' => '2',
            ),
            250 => 
            array (
                'id' => 3751,
                'code' => '713701',
                'name' => '金城镇',
                'parentId' => '713700',
                'level' => '3',
            ),
            251 => 
            array (
                'id' => 3752,
                'code' => '713702',
                'name' => '金湖镇',
                'parentId' => '713700',
                'level' => '3',
            ),
            252 => 
            array (
                'id' => 3753,
                'code' => '713703',
                'name' => '金沙镇',
                'parentId' => '713700',
                'level' => '3',
            ),
            253 => 
            array (
                'id' => 3754,
                'code' => '713704',
                'name' => '金宁乡',
                'parentId' => '713700',
                'level' => '3',
            ),
            254 => 
            array (
                'id' => 3755,
                'code' => '713705',
                'name' => '烈屿乡',
                'parentId' => '713700',
                'level' => '3',
            ),
            255 => 
            array (
                'id' => 3756,
                'code' => '713706',
                'name' => '乌丘乡',
                'parentId' => '713700',
                'level' => '3',
            ),
            256 => 
            array (
                'id' => 3757,
                'code' => '713800',
                'name' => '连江县',
                'parentId' => '710000',
                'level' => '2',
            ),
            257 => 
            array (
                'id' => 3758,
                'code' => '713801',
                'name' => '南竿乡',
                'parentId' => '713800',
                'level' => '3',
            ),
            258 => 
            array (
                'id' => 3759,
                'code' => '713802',
                'name' => '北竿乡',
                'parentId' => '713800',
                'level' => '3',
            ),
            259 => 
            array (
                'id' => 3760,
                'code' => '713803',
                'name' => '莒光乡',
                'parentId' => '713800',
                'level' => '3',
            ),
            260 => 
            array (
                'id' => 3761,
                'code' => '713804',
                'name' => '东引乡',
                'parentId' => '713800',
                'level' => '3',
            ),
            261 => 
            array (
                'id' => 3762,
                'code' => '810000',
                'name' => '香港特别行政区',
                'parentId' => '100000',
                'level' => '1',
            ),
            262 => 
            array (
                'id' => 3763,
                'code' => '810100',
                'name' => '香港岛',
                'parentId' => '810000',
                'level' => '2',
            ),
            263 => 
            array (
                'id' => 3764,
                'code' => '810101',
                'name' => '中西区',
                'parentId' => '810100',
                'level' => '3',
            ),
            264 => 
            array (
                'id' => 3765,
                'code' => '810102',
                'name' => '湾仔区',
                'parentId' => '810100',
                'level' => '3',
            ),
            265 => 
            array (
                'id' => 3766,
                'code' => '810103',
                'name' => '东区',
                'parentId' => '810100',
                'level' => '3',
            ),
            266 => 
            array (
                'id' => 3767,
                'code' => '810104',
                'name' => '南区',
                'parentId' => '810100',
                'level' => '3',
            ),
            267 => 
            array (
                'id' => 3768,
                'code' => '810200',
                'name' => '九龙',
                'parentId' => '810000',
                'level' => '2',
            ),
            268 => 
            array (
                'id' => 3769,
                'code' => '810201',
                'name' => '油尖旺区',
                'parentId' => '810200',
                'level' => '3',
            ),
            269 => 
            array (
                'id' => 3770,
                'code' => '810202',
                'name' => '深水埗区',
                'parentId' => '810200',
                'level' => '3',
            ),
            270 => 
            array (
                'id' => 3771,
                'code' => '810203',
                'name' => '九龙城区',
                'parentId' => '810200',
                'level' => '3',
            ),
            271 => 
            array (
                'id' => 3772,
                'code' => '810204',
                'name' => '黄大仙区',
                'parentId' => '810200',
                'level' => '3',
            ),
            272 => 
            array (
                'id' => 3773,
                'code' => '810205',
                'name' => '观塘区',
                'parentId' => '810200',
                'level' => '3',
            ),
            273 => 
            array (
                'id' => 3774,
                'code' => '810300',
                'name' => '新界',
                'parentId' => '810000',
                'level' => '2',
            ),
            274 => 
            array (
                'id' => 3775,
                'code' => '810301',
                'name' => '荃湾区',
                'parentId' => '810300',
                'level' => '3',
            ),
            275 => 
            array (
                'id' => 3776,
                'code' => '810302',
                'name' => '屯门区',
                'parentId' => '810300',
                'level' => '3',
            ),
            276 => 
            array (
                'id' => 3777,
                'code' => '810303',
                'name' => '元朗区',
                'parentId' => '810300',
                'level' => '3',
            ),
            277 => 
            array (
                'id' => 3778,
                'code' => '810304',
                'name' => '北区',
                'parentId' => '810300',
                'level' => '3',
            ),
            278 => 
            array (
                'id' => 3779,
                'code' => '810305',
                'name' => '大埔区',
                'parentId' => '810300',
                'level' => '3',
            ),
            279 => 
            array (
                'id' => 3780,
                'code' => '810306',
                'name' => '西贡区',
                'parentId' => '810300',
                'level' => '3',
            ),
            280 => 
            array (
                'id' => 3781,
                'code' => '810307',
                'name' => '沙田区',
                'parentId' => '810300',
                'level' => '3',
            ),
            281 => 
            array (
                'id' => 3782,
                'code' => '810308',
                'name' => '葵青区',
                'parentId' => '810300',
                'level' => '3',
            ),
            282 => 
            array (
                'id' => 3783,
                'code' => '810309',
                'name' => '离岛区',
                'parentId' => '810300',
                'level' => '3',
            ),
            283 => 
            array (
                'id' => 3784,
                'code' => '820000',
                'name' => '澳门特别行政区',
                'parentId' => '100000',
                'level' => '1',
            ),
            284 => 
            array (
                'id' => 3785,
                'code' => '820100',
                'name' => '澳门半岛',
                'parentId' => '820000',
                'level' => '2',
            ),
            285 => 
            array (
                'id' => 3786,
                'code' => '820101',
                'name' => '花地玛堂区',
                'parentId' => '820100',
                'level' => '3',
            ),
            286 => 
            array (
                'id' => 3787,
                'code' => '820102',
                'name' => '圣安多尼堂区',
                'parentId' => '820100',
                'level' => '3',
            ),
            287 => 
            array (
                'id' => 3788,
                'code' => '820103',
                'name' => '大堂区',
                'parentId' => '820100',
                'level' => '3',
            ),
            288 => 
            array (
                'id' => 3789,
                'code' => '820104',
                'name' => '望德堂区',
                'parentId' => '820100',
                'level' => '3',
            ),
            289 => 
            array (
                'id' => 3790,
                'code' => '820105',
                'name' => '风顺堂区',
                'parentId' => '820100',
                'level' => '3',
            ),
            290 => 
            array (
                'id' => 3791,
                'code' => '820200',
                'name' => '氹仔岛',
                'parentId' => '820000',
                'level' => '2',
            ),
            291 => 
            array (
                'id' => 3792,
                'code' => '820201',
                'name' => '嘉模堂区',
                'parentId' => '820200',
                'level' => '3',
            ),
            292 => 
            array (
                'id' => 3793,
                'code' => '820300',
                'name' => '路环岛',
                'parentId' => '820000',
                'level' => '2',
            ),
            293 => 
            array (
                'id' => 3794,
                'code' => '820301',
                'name' => '圣方济各堂区',
                'parentId' => '820300',
                'level' => '3',
            ),
            294 => 
            array (
                'id' => 3795,
                'code' => '900000',
                'name' => '钓鱼岛',
                'parentId' => '100000',
                'level' => '1',
            ),
        ));
        
        
    }
}