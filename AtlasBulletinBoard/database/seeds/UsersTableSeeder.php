<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'over_name' => '多々納',
            'under_name' => '夏美',
            'over_name_kana' => 'タタノ',
            'under_name_kana' => 'ナツミ',
            'mail_address' => 'tatano@test.com',
            'sex' => 2,
            'birth_day' => '2000-01-01',
            'role' => 3,
            'password' => bcrypt('tatano'),
        ]);
        User::create([
            'over_name' => '吉田',
            'under_name' => '亘',
            'over_name_kana' => 'ヨシダ',
            'under_name_kana' => 'ワタル',
            'mail_address' => 'yoshida@test.com',
            'sex' => 1,
            'birth_day' => '1930-04-22',
            'role' => 3,
            'password' => bcrypt('yoshida'),
        ]);
        User::create([
            'over_name' => '大園',
            'under_name' => '雄一',
            'over_name_kana' => 'オオゾノ',
            'under_name_kana' => 'ユウイチ',
            'mail_address' => 'koneko@test.com',
            'sex' => 1,
            'birth_day' => '1869-08-12',
            'role' => 3,
            'password' => bcrypt('koneko'),
        ]);
        User::create([
            'over_name' => '村松',
            'under_name' => '春佳',
            'over_name_kana' => 'ムラマツ',
            'under_name_kana' => 'ハルカ',
            'mail_address' => 'imo@test.com',
            'sex' => 2,
            'birth_day' => '2020-08-27',
            'role' => 3,
            'password' => bcrypt('imo'),
        ]);
        User::create([
            'over_name' => '伊藤',
            'under_name' => '佳',
            'over_name_kana' => 'イトウ',
            'under_name_kana' => 'ケイ',
            'mail_address' => 'itou@test.com',
            'sex' => 2,
            'birth_day' => '2020-08-03',
            'role' => 3,
            'password' => bcrypt('itou'),
        ]);
        User::create([
            'over_name' => '桜満',
            'under_name' => '集',
            'over_name_kana' => 'オウマ',
            'under_name_kana' => 'シュウ',
            'mail_address' => 'ouma@test.com',
            'sex' => 1,
            'birth_day' => '1995-06-28',
            'role' => 1,
            'password' => bcrypt('ouma'),
        ]);
        User::create([
            'over_name' => '楪',
            'under_name' => 'いのり',
            'over_name_kana' => 'ユズリハ',
            'under_name_kana' => 'イノリ',
            'mail_address' => 'yuzuriha@test.com',
            'sex' => 2,
            'birth_day' => '1995-07-29',
            'role' => 1,
            'password' => bcrypt('yuzuriha'),
        ]);
        User::create([
            'over_name' => '恙神',
            'under_name' => '涯',
            'over_name_kana' => 'ツツガミ',
            'under_name_kana' => 'ガイ',
            'mail_address' => 'tsutsugami@test.com',
            'sex' => 1,
            'birth_day' => '1990-03-11',
            'role' => 1,
            'password' => bcrypt('tsutsugami'),
        ]);
        User::create([
            'over_name' => '桐ヶ谷',
            'under_name' => '利人',
            'over_name_kana' => 'キリガヤ',
            'under_name_kana' => 'カズト',
            'mail_address' => 'kirigaya@test.com',
            'sex' => 1,
            'birth_day' => '1999-05-05',
            'role' => 2,
            'password' => bcrypt('kirigaya'),
        ]);
        User::create([
            'over_name' => '結城',
            'under_name' => '明日奈',
            'over_name_kana' => 'ユウキ',
            'under_name_kana' => 'アスナ',
            'mail_address' => 'yuuki@test.com',
            'sex' => 2,
            'birth_day' => '1999-07-07',
            'role' => 2,
            'password' => bcrypt('yuuki'),
        ]);
        User::create([
            'over_name' => '朝田',
            'under_name' => '詩乃',
            'over_name_kana' => 'アサダ',
            'under_name_kana' => 'シノ',
            'mail_address' => 'asada@test.com',
            'sex' => 2,
            'birth_day' => '1999-03-03',
            'role' => 2,
            'password' => bcrypt('asada'),
        ]);
        User::create([
            'over_name' => '沢城',
            'under_name' => 'みゆき',
            'over_name_kana' => 'サワシロ',
            'under_name_kana' => 'ミユキ',
            'mail_address' => 'sawashiro@test.com',
            'sex' => 2,
            'birth_day' => '1999-09-09',
            'role' => 2,
            'password' => bcrypt('sawashiro'),
        ]);
        User::create([
            'over_name' => '松岡',
            'under_name' => '禎丞',
            'over_name_kana' => 'マツオカ',
            'under_name_kana' => 'ヨシツグ',
            'mail_address' => 'matsuoka@tes.com',
            'sex' => 1,
            'birth_day' => '1999-01-01',
            'role' => 1,
            'password' => bcrypt('matsuoka'),
        ]);
        User::create([
            'over_name' => '戸松',
            'under_name' => '遥',
            'over_name_kana' => 'トマツ',
            'under_name_kana' => 'ハルカ',
            'mail_address' => 'tomatsu@test.com',
            'sex' => 2,
            'birth_day' => '1999-02-02',
            'role' => 2,
            'password' => bcrypt('tomatsu'),
        ]);
        User::create([
            'over_name' => '子安',
            'under_name' => '武人',
            'over_name_kana' => 'コヤス',
            'under_name_kana' => 'タケヒト',
            'mail_address' => 'koyasu@test.com',
            'sex' => 1,
            'birth_day' => '1999-04-04',
            'role' => 2,
            'password' => bcrypt('koyasu'),
        ]);
        User::create([
            'over_name' => '比企谷',
            'under_name' => '八幡',
            'over_name_kana' => 'ヒキガヤ',
            'under_name_kana' => 'ハチマン',
            'mail_address' => 'hikigaya@test.com',
            'sex' => 1,
            'birth_day' => '1990-01-01',
            'role' => 4,
            'password' => bcrypt('hikigaya'),
        ]);
        User::create([
            'over_name' => '雪ノ下',
            'under_name' => '雪乃',
            'over_name_kana' => 'ユキノシタ',
            'under_name_kana' => 'ユキノ',
            'mail_address' => 'yukinoshita@test.com',
            'sex' => 2,
            'birth_day' => '1990-02-02',
            'role' => 4,
            'password' => bcrypt('yukinoshita'),
        ]);
        User::create([
            'over_name' => '由比ヶ浜',
            'under_name' => '結衣',
            'over_name_kana' => 'ユイガハマ',
            'under_name_kana' => 'ユイ',
            'mail_address' => 'yuigahama@test.com',
            'sex' => 2,
            'birth_day' => '1990-03-03',
            'role' => 4,
            'password' => bcrypt('yuigahama'),
        ]);
        User::create([
            'over_name' => '葉山',
            'under_name' => '隼人',
            'over_name_kana' => 'ハヤマ',
            'under_name_kana' => 'ハヤト',
            'mail_address' => 'hayama@test.com',
            'sex' => 1,
            'birth_day' => '1990-04-04',
            'role' => 4,
            'password' => bcrypt('hayama'),
        ]);
        User::create([
            'over_name' => '竈門',
            'under_name' => '炭治郎',
            'over_name_kana' => 'カマド',
            'under_name_kana' => 'タンジロウ',
            'mail_address' => 'kamado@test.com',
            'sex' => 1,
            'birth_day' => '1991-01-01',
            'role' => 4,
            'password' => bcrypt('kamado'),
        ]);
        User::create([
            'over_name' => '竈門',
            'under_name' => '禰豆子',
            'over_name_kana' => 'カマド',
            'under_name_kana' => 'ネズコ',
            'mail_address' => 'nezuko@test.com',
            'sex' => 2,
            'birth_day' => '1991-02-02',
            'role' => 4,
            'password' => bcrypt('nezuko'),
        ]);
        User::create([
            'over_name' => '我妻',
            'under_name' => '善逸',
            'over_name_kana' => 'アガツマ',
            'under_name_kana' => 'ゼンイツ',
            'mail_address' => 'agatuma',
            'sex' => 1,
            'birth_day' => '1991-03-03',
            'role' => 4,
            'password' => bcrypt('agatuma'),
        ]);
        User::create([
            'over_name' => '嘴平',
            'under_name' => '伊之助',
            'over_name_kana' => 'ハシビラ',
            'under_name_kana' => 'イノスケ',
            'mail_address' => 'hashibira@test.com',
            'sex' => 1,
            'birth_day' => '1991-04-04',
            'role' => 4,
            'password' => bcrypt('hashibira'),
        ]);
        User::create([
            'over_name' => '冨岡',
            'under_name' => '義勇',
            'over_name_kana' => 'トミオカ',
            'under_name_kana' => 'ギユウ',
            'mail_address' => 'tomioka@test.com',
            'sex' => 1,
            'birth_day' => '1991-05-05',
            'role' => 4,
            'password' => bcrypt('tomioka'),
        ]);
        User::create([
            'over_name' => '胡蝶',
            'under_name' => 'しのぶ',
            'over_name_kana' => 'コチョウ',
            'under_name_kana' => 'シノブ',
            'mail_address' => 'kochou@test.com',
            'sex' => 2,
            'birth_day' => '1991-06-06',
            'role' => 4,
            'password' => bcrypt('kochou'),
        ]);
        User::create([
            'over_name' => '煉獄',
            'under_name' => '杏寿郎',
            'over_name_kana' => 'レンゴク',
            'under_name_kana' => 'キョウジュロウ',
            'mail_address' => 'rengoku@test.com',
            'sex' => 1,
            'birth_day' => '1991-07-07',
            'role' => 4,
            'password' => bcrypt('rengoku'),
        ]);
        User::create([
            'over_name' => '宇髄',
            'under_name' => '天元',
            'over_name_kana' => 'ウズイ',
            'under_name_kana' => 'テンゲン',
            'mail_address' => 'uzui@test.com',
            'sex' => 1,
            'birth_day' => '1991-08-08',
            'role' => 4,
            'password' => bcrypt('uzui'),
        ]);
        User::create([
            'over_name' => '虎杖',
            'under_name' => '悠仁',
            'over_name_kana' => 'イタドリ',
            'under_name_kana' => 'ユウジ',
            'mail_address' => 'itadori@test.com',
            'sex' => 1,
            'birth_day' => '1991-09-09',
            'role' => 4,
            'password' => bcrypt('itadori'),
        ]);
        User::create([
            'over_name' => '伏黒',
            'under_name' => '恵',
            'over_name_kana' => 'フシグロ',
            'under_name_kana' => 'メグミ',
            'mail_address' => 'fushiguro@test.com',
            'sex' => 1,
            'birth_day' => '1991-10-10',
            'role' => 4,
            'password' => bcrypt('fushiguro'),
        ]);
        User::create([
            'over_name' => '釘崎',
            'under_name' => '野薔薇',
            'over_name_kana' => 'クギサキ',
            'under_name_kana' => 'ノバラ',
            'mail_address' => 'kugisaki@test.com',
            'sex' => 2,
            'birth_day' => '1991-11-11',
            'role' => 4,
            'password' => bcrypt('kugisaki'),
        ]);
        User::create([
            'over_name' => '五条',
            'under_name' => '悟',
            'over_name_kana' => 'ゴジョウ',
            'under_name_kana' => 'サトル',
            'mail_address' => 'gojou@test.com',
            'sex' => 1,
            'birth_day' => '1991-12-12',
            'role' => 4,
            'password' => bcrypt('gojou'),
        ]);
    }
}