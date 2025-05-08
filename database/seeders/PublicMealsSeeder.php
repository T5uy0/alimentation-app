<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Meal;
class PublicMealsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Meal::create([
            'name' => 'Agar Agar',
            'calories' => 160,
            'proteins' => 2.4,
            'carbohydrate' => 0.0,
            'lipids' => 0.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Agave syrup',
            'calories' => 293,
            'proteins' => 0.2,
            'carbohydrate' => 73.1,
            'lipids' => 0.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Almond',
            'calories' => 624,
            'proteins' => 25.6,
            'carbohydrate' => 7.8,
            'lipids' => 52.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Almond drink, plain',
            'calories' => 33,
            'proteins' => 1.1,
            'carbohydrate' => 1.3,
            'lipids' => 2.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Almond drink, plain, with calcium and vitamin fortified',
            'calories' => 33,
            'proteins' => 1.1,
            'carbohydrate' => 1.3,
            'lipids' => 2.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Almond, dry roasted, salted',
            'calories' => 637,
            'proteins' => 25.4,
            'carbohydrate' => 10.1,
            'lipids' => 52.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Almond, roasted, salted',
            'calories' => 649,
            'proteins' => 25.6,
            'carbohydrate' => 7.2,
            'lipids' => 55.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Amaranth, seed, cooked (without addition of fat and salt)',
            'calories' => 119,
            'proteins' => 5.0,
            'carbohydrate' => 18.1,
            'lipids' => 2.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Amaranth, seed, raw',
            'calories' => 376,
            'proteins' => 15.8,
            'carbohydrate' => 56.8,
            'lipids' => 7.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Amaretti (Almond cookie)',
            'calories' => 464,
            'proteins' => 8.8,
            'carbohydrate' => 76.7,
            'lipids' => 13.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Anchovis paste',
            'calories' => 272,
            'proteins' => 19.8,
            'carbohydrate' => 0.2,
            'lipids' => 21.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Appenzeller, at least 15% fidm',
            'calories' => 235,
            'proteins' => 33.1,
            'carbohydrate' => 0.0,
            'lipids' => 11.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Appenzeller, at least 45% fidm',
            'calories' => 384,
            'proteins' => 24.3,
            'carbohydrate' => 0.0,
            'lipids' => 31.7,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Apple juice',
            'calories' => 50,
            'proteins' => 0.2,
            'carbohydrate' => 11.9,
            'lipids' => 0.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Apple pie, home-made, baked (with cake dough)',
            'calories' => 147,
            'proteins' => 2.6,
            'carbohydrate' => 18.5,
            'lipids' => 6.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Apple pie, home-made, baked (with puff pastry)',
            'calories' => 145,
            'proteins' => 2.4,
            'carbohydrate' => 17.8,
            'lipids' => 6.8,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Apple, fresh',
            'calories' => 52,
            'proteins' => 0.3,
            'carbohydrate' => 11.6,
            'lipids' => 0.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Apple, peeled, dried',
            'calories' => 264,
            'proteins' => 1.4,
            'carbohydrate' => 55.4,
            'lipids' => 1.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Apple, stewed, drained (without addition of sugar)',
            'calories' => 56,
            'proteins' => 0.3,
            'carbohydrate' => 12.2,
            'lipids' => 0.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Applesauce, sweetened, canned',
            'calories' => 89,
            'proteins' => 0.3,
            'carbohydrate' => 20.5,
            'lipids' => 0.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Applesauce, unsweetened, canned',
            'calories' => 55,
            'proteins' => 0.3,
            'carbohydrate' => 11.7,
            'lipids' => 0.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Apricot pie, home-made, baked (with cake dough)',
            'calories' => 141,
            'proteins' => 3.0,
            'carbohydrate' => 16.8,
            'lipids' => 6.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Apricot pie, home-made, baked (with puff pastry)',
            'calories' => 139,
            'proteins' => 2.8,
            'carbohydrate' => 16.1,
            'lipids' => 6.7,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Apricot, dried',
            'calories' => 239,
            'proteins' => 2.9,
            'carbohydrate' => 59.1,
            'lipids' => 0.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Apricot, in syrup, canned, drained',
            'calories' => 62,
            'proteins' => 0.9,
            'carbohydrate' => 13.7,
            'lipids' => 0.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Apricot, raw',
            'calories' => 44,
            'proteins' => 0.8,
            'carbohydrate' => 9.0,
            'lipids' => 0.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Apricot, stewed, drained (without addition of sugar) ',
            'calories' => 45,
            'proteins' => 1.0,
            'carbohydrate' => 9.0,
            'lipids' => 0.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Apricot, with sweetener, canned, drained',
            'calories' => 40,
            'proteins' => 0.9,
            'carbohydrate' => 8.2,
            'lipids' => 0.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Asparagus, raw',
            'calories' => 27,
            'proteins' => 2.2,
            'carbohydrate' => 3.3,
            'lipids' => 0.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Asparagus, steamed (without addition of salt)',
            'calories' => 26,
            'proteins' => 2.1,
            'carbohydrate' => 3.1,
            'lipids' => 0.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Avocado, fresh',
            'calories' => 158,
            'proteins' => 1.6,
            'carbohydrate' => 1.2,
            'lipids' => 15.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bacon for cooking',
            'calories' => 322,
            'proteins' => 17.8,
            'carbohydrate' => 0.6,
            'lipids' => 27.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bacon, raw',
            'calories' => 400,
            'proteins' => 22.1,
            'carbohydrate' => 0.6,
            'lipids' => 34.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Baguette',
            'calories' => 255,
            'proteins' => 9.0,
            'carbohydrate' => 51.2,
            'lipids' => 0.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bami Goreng, prepared',
            'calories' => 130,
            'proteins' => 13.5,
            'carbohydrate' => 13.1,
            'lipids' => 2.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Banana, dried',
            'calories' => 273,
            'proteins' => 3.0,
            'carbohydrate' => 60.2,
            'lipids' => 1.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Banana, dried (banana chips)',
            'calories' => 370,
            'proteins' => 3.9,
            'carbohydrate' => 80.7,
            'lipids' => 1.8,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Banana, raw',
            'calories' => 89,
            'proteins' => 1.1,
            'carbohydrate' => 19.7,
            'lipids' => 0.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Barley flakes',
            'calories' => 333,
            'proteins' => 8.5,
            'carbohydrate' => 66.1,
            'lipids' => 1.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Barley risotto, cooked',
            'calories' => 135,
            'proteins' => 3.5,
            'carbohydrate' => 24.6,
            'lipids' => 2.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Basil, raw',
            'calories' => 46,
            'proteins' => 3.1,
            'carbohydrate' => 5.1,
            'lipids' => 0.8,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Basler Leckerli (Swiss biscuit from Basel)',
            'calories' => 412,
            'proteins' => 7.5,
            'carbohydrate' => 75.0,
            'lipids' => 7.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bean, green, dried',
            'calories' => 318,
            'proteins' => 20.2,
            'carbohydrate' => 42.1,
            'lipids' => 2.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bean, green, raw',
            'calories' => 32,
            'proteins' => 1.9,
            'carbohydrate' => 4.1,
            'lipids' => 0.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Béchamel sauce, home-made',
            'calories' => 147,
            'proteins' => 4.2,
            'carbohydrate' => 10.1,
            'lipids' => 9.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef (average excluding offal, chop), raw',
            'calories' => 134,
            'proteins' => 21.4,
            'carbohydrate' => 0.0,
            'lipids' => 5.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef ragout with sauce, prepared',
            'calories' => 85,
            'proteins' => 11.6,
            'carbohydrate' => 3.0,
            'lipids' => 2.8,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, boiling meat lean, cooked (without addition of fat and salt)',
            'calories' => 190,
            'proteins' => 31.7,
            'carbohydrate' => 0.0,
            'lipids' => 7.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, boiling meat with fat, cooked (without addition of fat and salt)',
            'calories' => 276,
            'proteins' => 26.6,
            'carbohydrate' => 0.0,
            'lipids' => 18.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, boiling meat, lean, raw',
            'calories' => 132,
            'proteins' => 20.7,
            'carbohydrate' => 0.0,
            'lipids' => 5.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, boiling meat, with fat, raw',
            'calories' => 227,
            'proteins' => 19.5,
            'carbohydrate' => 0.0,
            'lipids' => 16.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, breast, cooked (without addition of fat and salt)',
            'calories' => 254,
            'proteins' => 28.3,
            'carbohydrate' => 0.0,
            'lipids' => 15.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, breast, raw',
            'calories' => 188,
            'proteins' => 18.9,
            'carbohydrate' => 0.0,
            'lipids' => 12.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, chopped, raw',
            'calories' => 102,
            'proteins' => 22.2,
            'carbohydrate' => 0.0,
            'lipids' => 1.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, entrcôte, steak, pan fried "medium" (without addition of fat and salt)',
            'calories' => 162,
            'proteins' => 30.2,
            'carbohydrate' => 0.0,
            'lipids' => 4.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, entrecôte, steak, raw',
            'calories' => 133,
            'proteins' => 23.2,
            'carbohydrate' => 0.0,
            'lipids' => 4.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, eye of round, raw',
            'calories' => 106,
            'proteins' => 22.4,
            'carbohydrate' => 0.0,
            'lipids' => 1.8,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, Filet, fried in oven "medium" (without addition of fat and salt)',
            'calories' => 128,
            'proteins' => 27.7,
            'carbohydrate' => 0.0,
            'lipids' => 2.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, filet, raw',
            'calories' => 105,
            'proteins' => 21.9,
            'carbohydrate' => 0.0,
            'lipids' => 2.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, liver, raw',
            'calories' => 138,
            'proteins' => 20.5,
            'carbohydrate' => 5.3,
            'lipids' => 3.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, minced, pan fried (without addition of fat and salt)',
            'calories' => 211,
            'proteins' => 32.6,
            'carbohydrate' => 0.0,
            'lipids' => 8.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, minced, raw',
            'calories' => 154,
            'proteins' => 21.6,
            'carbohydrate' => 0.0,
            'lipids' => 7.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, prime rib, raw',
            'calories' => 165,
            'proteins' => 21.1,
            'carbohydrate' => 0.0,
            'lipids' => 9.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, ragout (goulash), raw',
            'calories' => 150,
            'proteins' => 19.3,
            'carbohydrate' => 0.0,
            'lipids' => 8.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, ragout, raw',
            'calories' => 97,
            'proteins' => 21.2,
            'carbohydrate' => 0.0,
            'lipids' => 1.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, rib, raw',
            'calories' => 155,
            'proteins' => 21.7,
            'carbohydrate' => 0.5,
            'lipids' => 7.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, round, schnitzel, raw',
            'calories' => 111,
            'proteins' => 22.6,
            'carbohydrate' => 0.0,
            'lipids' => 2.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, shoulder (roast), raw',
            'calories' => 117,
            'proteins' => 21.6,
            'carbohydrate' => 0.0,
            'lipids' => 3.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, shoulder, medium roast in oven (without addition of fat and salt)',
            'calories' => 146,
            'proteins' => 28.5,
            'carbohydrate' => 0.0,
            'lipids' => 3.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, shoulder, rare roast in oven (without addition of fat and salt)',
            'calories' => 135,
            'proteins' => 26.3,
            'carbohydrate' => 0.0,
            'lipids' => 3.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, shoulder, well done roast in oven (without addition of fat and salt)',
            'calories' => 170,
            'proteins' => 33.1,
            'carbohydrate' => 0.0,
            'lipids' => 4.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beef, tongue, raw',
            'calories' => 196,
            'proteins' => 16.0,
            'carbohydrate' => 3.7,
            'lipids' => 13.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beer shandy (average)',
            'calories' => 39,
            'proteins' => 0.2,
            'carbohydrate' => 7.4,
            'lipids' => 0.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beer, five grain',
            'calories' => 40,
            'proteins' => 0.6,
            'carbohydrate' => 2.0,
            'lipids' => 0.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beer, lager',
            'calories' => 42,
            'proteins' => 0.5,
            'carbohydrate' => 3.1,
            'lipids' => 0.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beer, non-alcoholic',
            'calories' => 23,
            'proteins' => 0.4,
            'carbohydrate' => 4.9,
            'lipids' => 0.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beetroot, raw',
            'calories' => 46,
            'proteins' => 1.5,
            'carbohydrate' => 8.4,
            'lipids' => 0.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Beetroot, steamed (without addition of salt)',
            'calories' => 54,
            'proteins' => 1.8,
            'carbohydrate' => 10.0,
            'lipids' => 0.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bell pepper, green, raw',
            'calories' => 20,
            'proteins' => 0.8,
            'carbohydrate' => 2.6,
            'lipids' => 0.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bell pepper, green, stewed (without addition of fat and salt)',
            'calories' => 25,
            'proteins' => 1.0,
            'carbohydrate' => 3.2,
            'lipids' => 0.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bell pepper, red, raw',
            'calories' => 32,
            'proteins' => 0.9,
            'carbohydrate' => 5.2,
            'lipids' => 0.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bell pepper, red, stewed (without addition of fat and salt)',
            'calories' => 39,
            'proteins' => 1.1,
            'carbohydrate' => 6.4,
            'lipids' => 0.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Berliner pastry',
            'calories' => 336,
            'proteins' => 8.4,
            'carbohydrate' => 45.8,
            'lipids' => 12.8,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bernese alp cheese',
            'calories' => 453,
            'proteins' => 27.1,
            'carbohydrate' => 0.0,
            'lipids' => 38.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bernese cheese for slicing',
            'calories' => 491,
            'proteins' => 30.0,
            'carbohydrate' => 0.0,
            'lipids' => 41.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bernese tongue sausage',
            'calories' => 333,
            'proteins' => 17.3,
            'carbohydrate' => 0.0,
            'lipids' => 29.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Berries (average), cooked (without addition of sugar)',
            'calories' => 35,
            'proteins' => 0.7,
            'carbohydrate' => 5.3,
            'lipids' => 0.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Berries (average), raw',
            'calories' => 40,
            'proteins' => 0.7,
            'carbohydrate' => 6.3,
            'lipids' => 0.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Biber (Filled ginger bread type)',
            'calories' => 355,
            'proteins' => 7.8,
            'carbohydrate' => 65.6,
            'lipids' => 5.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bierwurst (coarse heat-treated, cured & smoked sausage, beef and pork)',
            'calories' => 291,
            'proteins' => 15.6,
            'carbohydrate' => 0.0,
            'lipids' => 25.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Birchermüesli, prepared (no sugar added)',
            'calories' => 86,
            'proteins' => 2.6,
            'carbohydrate' => 11.1,
            'lipids' => 3.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Birnenweggen, pastry with pear',
            'calories' => 363,
            'proteins' => 4.9,
            'carbohydrate' => 57.2,
            'lipids' => 10.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Black forest cake',
            'calories' => 248,
            'proteins' => 3.9,
            'carbohydrate' => 21.4,
            'lipids' => 16.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Black pudding',
            'calories' => 149,
            'proteins' => 10.2,
            'carbohydrate' => 2.5,
            'lipids' => 10.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Black salsify, raw',
            'calories' => 55,
            'proteins' => 1.4,
            'carbohydrate' => 2.1,
            'lipids' => 0.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Black salsify, steamed (without addition of salt)',
            'calories' => 57,
            'proteins' => 1.5,
            'carbohydrate' => 2.2,
            'lipids' => 0.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Blackberry pie, home-made (with sweet short pastry base)',
            'calories' => 215,
            'proteins' => 3.2,
            'carbohydrate' => 22.3,
            'lipids' => 11.7,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Blackberry pie, home-made, baked (with cake dough)',
            'calories' => 144,
            'proteins' => 3.2,
            'carbohydrate' => 15.2,
            'lipids' => 6.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Blackberry pie, home-made, baked (with puff pastry)',
            'calories' => 141,
            'proteins' => 3.0,
            'carbohydrate' => 14.5,
            'lipids' => 7.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Blackberry, fresh',
            'calories' => 47,
            'proteins' => 1.1,
            'carbohydrate' => 6.5,
            'lipids' => 0.7,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Blanc battu with fruits, with sweetener',
            'calories' => 67,
            'proteins' => 8.0,
            'carbohydrate' => 8.3,
            'lipids' => 0.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Blanc battu, plain, low fat',
            'calories' => 47,
            'proteins' => 7.8,
            'carbohydrate' => 3.9,
            'lipids' => 0.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Blue cheese (average)',
            'calories' => 360,
            'proteins' => 19.1,
            'carbohydrate' => 0.2,
            'lipids' => 31.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Blueberry, freeze-dried',
            'calories' => 338,
            'proteins' => 6.1,
            'carbohydrate' => 56.4,
            'lipids' => 4.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Blueberry, raw',
            'calories' => 52,
            'proteins' => 0.9,
            'carbohydrate' => 10.6,
            'lipids' => 0.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Boiling meat salad, prepared',
            'calories' => 201,
            'proteins' => 15.0,
            'carbohydrate' => 1.5,
            'lipids' => 14.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bouillon, meat, prepared',
            'calories' => 5,
            'proteins' => 0.3,
            'carbohydrate' => 0.2,
            'lipids' => 0.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bouillon, poultry, prepared',
            'calories' => 5,
            'proteins' => 0.3,
            'carbohydrate' => 0.3,
            'lipids' => 0.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bouillon, vegetable, prepared',
            'calories' => 6,
            'proteins' => 0.3,
            'carbohydrate' => 0.4,
            'lipids' => 0.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Braided bread, wholemeal, made with butter',
            'calories' => 272,
            'proteins' => 9.5,
            'carbohydrate' => 40.4,
            'lipids' => 6.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Braided white bread made with butter',
            'calories' => 325,
            'proteins' => 9.0,
            'carbohydrate' => 45.7,
            'lipids' => 11.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Brazil nut',
            'calories' => 698,
            'proteins' => 17.0,
            'carbohydrate' => 4.2,
            'lipids' => 66.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bread (average)',
            'calories' => 264,
            'proteins' => 9.2,
            'carbohydrate' => 44.6,
            'lipids' => 4.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bread for toasting, dark or multigrain',
            'calories' => 272,
            'proteins' => 9.1,
            'carbohydrate' => 45.6,
            'lipids' => 4.7,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bread for toasting, white, made with butter',
            'calories' => 316,
            'proteins' => 8.9,
            'carbohydrate' => 45.7,
            'lipids' => 10.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bread for toasting, white, made with vegetable oil',
            'calories' => 267,
            'proteins' => 8.7,
            'carbohydrate' => 49.2,
            'lipids' => 3.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bread for toasting, wholemeal',
            'calories' => 271,
            'proteins' => 9.3,
            'carbohydrate' => 43.7,
            'lipids' => 4.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bread roll (semi white)',
            'calories' => 215,
            'proteins' => 8.6,
            'carbohydrate' => 41.5,
            'lipids' => 1.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bread roll from St. Gallen (semi white)',
            'calories' => 231,
            'proteins' => 9.1,
            'carbohydrate' => 44.6,
            'lipids' => 1.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bread roll with chocolate',
            'calories' => 366,
            'proteins' => 8.6,
            'carbohydrate' => 49.7,
            'lipids' => 14.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bread roll, white',
            'calories' => 255,
            'proteins' => 8.7,
            'carbohydrate' => 51.8,
            'lipids' => 0.8,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bread with walnuts',
            'calories' => 332,
            'proteins' => 9.2,
            'carbohydrate' => 30.8,
            'lipids' => 17.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Breadcrumbs',
            'calories' => 373,
            'proteins' => 12.7,
            'carbohydrate' => 73.5,
            'lipids' => 2.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Bresaola (cured beef)',
            'calories' => 167,
            'proteins' => 32.4,
            'carbohydrate' => 0.4,
            'lipids' => 3.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Brie, at least 45% fidm',
            'calories' => 298,
            'proteins' => 21.4,
            'carbohydrate' => 0.0,
            'lipids' => 23.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Brie, at least 50% fidm',
            'calories' => 342,
            'proteins' => 17.7,
            'carbohydrate' => 0.0,
            'lipids' => 30.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Broccoli, raw',
            'calories' => 39,
            'proteins' => 3.6,
            'carbohydrate' => 3.2,
            'lipids' => 0.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Broccoli, steamed (without addition of salt)',
            'calories' => 35,
            'proteins' => 3.3,
            'carbohydrate' => 2.9,
            'lipids' => 0.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Brown bread',
            'calories' => 234,
            'proteins' => 9.5,
            'carbohydrate' => 44.3,
            'lipids' => 1.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Brown bread (with iodized salt)',
            'calories' => 234,
            'proteins' => 9.5,
            'carbohydrate' => 44.3,
            'lipids' => 1.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Brunsli (chocolate cookie)',
            'calories' => 515,
            'proteins' => 14.9,
            'carbohydrate' => 43.3,
            'lipids' => 29.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Brussel sprouts, steamed (without addition of salt)',
            'calories' => 37,
            'proteins' => 3.6,
            'carbohydrate' => 3.0,
            'lipids' => 0.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Brussels sprouts, raw',
            'calories' => 41,
            'proteins' => 4.0,
            'carbohydrate' => 3.3,
            'lipids' => 0.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Buckwheat flour',
            'calories' => 348,
            'proteins' => 11.5,
            'carbohydrate' => 68.4,
            'lipids' => 2.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Buckwheat, grain peeled',
            'calories' => 346,
            'proteins' => 9.8,
            'carbohydrate' => 71.0,
            'lipids' => 1.7,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Burger patty (beef), pan fried in HOLL rapeseed oil',
            'calories' => 187,
            'proteins' => 19.5,
            'carbohydrate' => 6.4,
            'lipids' => 9.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Butter cake',
            'calories' => 430,
            'proteins' => 6.9,
            'carbohydrate' => 44.7,
            'lipids' => 24.7,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Butter croissant, white',
            'calories' => 432,
            'proteins' => 8.7,
            'carbohydrate' => 43.5,
            'lipids' => 24.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Butter croissant, wholemeal',
            'calories' => 368,
            'proteins' => 6.8,
            'carbohydrate' => 38.7,
            'lipids' => 19.7,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Butter of choice',
            'calories' => 746,
            'proteins' => 0.7,
            'carbohydrate' => 0.7,
            'lipids' => 82.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Butter, 40% fat',
            'calories' => 391,
            'proteins' => 4.8,
            'carbohydrate' => 3.5,
            'lipids' => 39.8,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Butter, cheese dairy',
            'calories' => 747,
            'proteins' => 0.4,
            'carbohydrate' => 0.6,
            'lipids' => 82.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Butter, clarified',
            'calories' => 885,
            'proteins' => 0.1,
            'carbohydrate' => 0.0,
            'lipids' => 98.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Butterhead lettuce, raw',
            'calories' => 14,
            'proteins' => 1.3,
            'carbohydrate' => 1.1,
            'lipids' => 0.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Buttermilk',
            'calories' => 34,
            'proteins' => 3.4,
            'carbohydrate' => 4.0,
            'lipids' => 0.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cabbage sausage',
            'calories' => 363,
            'proteins' => 15.9,
            'carbohydrate' => 1.6,
            'lipids' => 32.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cabbage vegetables (average), boiled (without addition of salt and fat)',
            'calories' => 29,
            'proteins' => 2.2,
            'carbohydrate' => 3.1,
            'lipids' => 0.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cabbage vegetables (average), raw',
            'calories' => 30,
            'proteins' => 2.3,
            'carbohydrate' => 3.2,
            'lipids' => 0.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cake dough (with butter), raw',
            'calories' => 375,
            'proteins' => 6.7,
            'carbohydrate' => 38.5,
            'lipids' => 21.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cake dough (with vegetable fat), raw',
            'calories' => 394,
            'proteins' => 6.6,
            'carbohydrate' => 38.1,
            'lipids' => 23.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cake dough, whole (with butter), raw',
            'calories' => 372,
            'proteins' => 7.6,
            'carbohydrate' => 33.8,
            'lipids' => 21.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cake dough, whole (with vegetable fat), raw',
            'calories' => 359,
            'proteins' => 7.6,
            'carbohydrate' => 33.7,
            'lipids' => 20.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cake financier',
            'calories' => 440,
            'proteins' => 11.1,
            'carbohydrate' => 38.5,
            'lipids' => 26.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cake with carrots',
            'calories' => 303,
            'proteins' => 11.1,
            'carbohydrate' => 25.8,
            'lipids' => 16.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Calimocho (red wine mixed with cola)',
            'calories' => 55,
            'proteins' => 0.1,
            'carbohydrate' => 5.2,
            'lipids' => 0.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Camembert, at least 25% fidm',
            'calories' => 188,
            'proteins' => 24.4,
            'carbohydrate' => 0.0,
            'lipids' => 10.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Camembert, at least 45% fidm',
            'calories' => 297,
            'proteins' => 20.8,
            'carbohydrate' => 0.0,
            'lipids' => 23.7,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Camembert, at least 50% fidm',
            'calories' => 355,
            'proteins' => 17.1,
            'carbohydrate' => 0.0,
            'lipids' => 31.7,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Candied lemon peel',
            'calories' => 289,
            'proteins' => 0.4,
            'carbohydrate' => 70.0,
            'lipids' => 0.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Candied orange peel',
            'calories' => 306,
            'proteins' => 0.4,
            'carbohydrate' => 74.3,
            'lipids' => 0.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Candy, toffee',
            'calories' => 351,
            'proteins' => 0.4,
            'carbohydrate' => 79.3,
            'lipids' => 3.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cannelloni filled with meat, prepared',
            'calories' => 177,
            'proteins' => 9.5,
            'carbohydrate' => 13.8,
            'lipids' => 9.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cannelloni filled with spinach and ricotta, prepared',
            'calories' => 221,
            'proteins' => 7.8,
            'carbohydrate' => 14.6,
            'lipids' => 14.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cappuccino (without chocolate powder), no sugar added',
            'calories' => 37,
            'proteins' => 1.7,
            'carbohydrate' => 2.6,
            'lipids' => 2.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Capuns, prepared',
            'calories' => 165,
            'proteins' => 8.0,
            'carbohydrate' => 9.7,
            'lipids' => 10.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Carnival pastry',
            'calories' => 553,
            'proteins' => 11.5,
            'carbohydrate' => 51.7,
            'lipids' => 32.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Carrot juice',
            'calories' => 33,
            'proteins' => 0.7,
            'carbohydrate' => 6.8,
            'lipids' => 0.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Carrot, raw',
            'calories' => 42,
            'proteins' => 0.6,
            'carbohydrate' => 7.6,
            'lipids' => 0.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Carrot, steamed (without addition of salt)',
            'calories' => 44,
            'proteins' => 0.7,
            'carbohydrate' => 8.0,
            'lipids' => 0.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cashew nut',
            'calories' => 619,
            'proteins' => 21.5,
            'carbohydrate' => 23.2,
            'lipids' => 48.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cauliflower, raw',
            'calories' => 26,
            'proteins' => 1.8,
            'carbohydrate' => 2.1,
            'lipids' => 0.7,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cauliflower, steamed (without addition of salt)',
            'calories' => 26,
            'proteins' => 1.8,
            'carbohydrate' => 2.1,
            'lipids' => 0.7,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Celeriac piccata, prepared',
            'calories' => 136,
            'proteins' => 5.4,
            'carbohydrate' => 8.4,
            'lipids' => 8.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Celeriac slices, breaded, prepared',
            'calories' => 139,
            'proteins' => 4.7,
            'carbohydrate' => 15.4,
            'lipids' => 5.7,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Celeriac, raw',
            'calories' => 32,
            'proteins' => 1.4,
            'carbohydrate' => 4.0,
            'lipids' => 0.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Celeriac, steamed',
            'calories' => 32,
            'proteins' => 1.4,
            'carbohydrate' => 4.0,
            'lipids' => 0.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Celery, raw',
            'calories' => 20,
            'proteins' => 0.6,
            'carbohydrate' => 2.4,
            'lipids' => 0.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Celery, steamed (without addition of salt)',
            'calories' => 20,
            'proteins' => 0.6,
            'carbohydrate' => 2.4,
            'lipids' => 0.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cereal bar, with chocolate coating',
            'calories' => 459,
            'proteins' => 8.5,
            'carbohydrate' => 58.0,
            'lipids' => 20.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cereal bar, without cover and filling',
            'calories' => 416,
            'proteins' => 7.9,
            'carbohydrate' => 64.2,
            'lipids' => 12.8,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cereal flakes (average)',
            'calories' => 348,
            'proteins' => 10.8,
            'carbohydrate' => 64.0,
            'lipids' => 3.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cervelat (Swiss sausage)',
            'calories' => 249,
            'proteins' => 13.4,
            'carbohydrate' => 0.5,
            'lipids' => 21.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chanterelle, raw',
            'calories' => 24,
            'proteins' => 2.3,
            'carbohydrate' => 0.2,
            'lipids' => 0.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chanterelle, stewed (without addition of fat and salt)',
            'calories' => 28,
            'proteins' => 2.6,
            'carbohydrate' => 0.2,
            'lipids' => 0.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cheese and sausage salad, prepared',
            'calories' => 262,
            'proteins' => 13.8,
            'carbohydrate' => 0.7,
            'lipids' => 22.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cheese bread slices, prepared',
            'calories' => 272,
            'proteins' => 13.8,
            'carbohydrate' => 26.0,
            'lipids' => 12.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cheese grated',
            'calories' => 406,
            'proteins' => 29.3,
            'carbohydrate' => 0.0,
            'lipids' => 32.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cheeseburger',
            'calories' => 281,
            'proteins' => 13.2,
            'carbohydrate' => 24.3,
            'lipids' => 14.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cherry pie from Zug',
            'calories' => 335,
            'proteins' => 4.8,
            'carbohydrate' => 34.6,
            'lipids' => 18.7,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cherry pie, home-made, baked (with cake dough)',
            'calories' => 153,
            'proteins' => 3.0,
            'carbohydrate' => 19.5,
            'lipids' => 6.7,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cherry pie, home-made, baked (with puff pastry)',
            'calories' => 151,
            'proteins' => 2.8,
            'carbohydrate' => 18.8,
            'lipids' => 6.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cherry, raw',
            'calories' => 62,
            'proteins' => 0.8,
            'carbohydrate' => 13.0,
            'lipids' => 0.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cherry, stewed, drained (without addition of sugar)',
            'calories' => 58,
            'proteins' => 0.9,
            'carbohydrate' => 12.0,
            'lipids' => 0.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chestnut, raw',
            'calories' => 210,
            'proteins' => 2.9,
            'carbohydrate' => 41.2,
            'lipids' => 1.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chia seed',
            'calories' => 482,
            'proteins' => 21.4,
            'carbohydrate' => 1.8,
            'lipids' => 34.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chicken egg, whole, hard boiled',
            'calories' => 156,
            'proteins' => 14.0,
            'carbohydrate' => 0.3,
            'lipids' => 10.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chicken, breast, with skin, raw',
            'calories' => 152,
            'proteins' => 23.3,
            'carbohydrate' => 0.0,
            'lipids' => 6.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chicken, breast, without skin, raw',
            'calories' => 107,
            'proteins' => 24.6,
            'carbohydrate' => 0.0,
            'lipids' => 1.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chicken, brest (schnitzel, ground), pan fried (without addition of fat and salt)',
            'calories' => 128,
            'proteins' => 30.1,
            'carbohydrate' => 0.0,
            'lipids' => 0.8,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chicken, leg with skin, roasted (without addition of fat and salt)',
            'calories' => 187,
            'proteins' => 23.9,
            'carbohydrate' => 0.0,
            'lipids' => 10.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chicken, leg, with skin, raw',
            'calories' => 163,
            'proteins' => 17.9,
            'carbohydrate' => 0.0,
            'lipids' => 10.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chicken, leg, without skin, raw',
            'calories' => 135,
            'proteins' => 19.7,
            'carbohydrate' => 0.0,
            'lipids' => 6.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chicken, whole with skin, roasted (without addition of fat and salt)',
            'calories' => 193,
            'proteins' => 25.1,
            'carbohydrate' => 0.0,
            'lipids' => 10.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chicken, whole, with skin, raw',
            'calories' => 168,
            'proteins' => 18.8,
            'carbohydrate' => 0.0,
            'lipids' => 10.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chickenburger',
            'calories' => 247,
            'proteins' => 12.7,
            'carbohydrate' => 23.8,
            'lipids' => 11.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chickpea, cooked (without addition of fat and salt)',
            'calories' => 127,
            'proteins' => 7.3,
            'carbohydrate' => 16.8,
            'lipids' => 2.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chickpea, dried',
            'calories' => 327,
            'proteins' => 18.6,
            'carbohydrate' => 44.3,
            'lipids' => 4.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chicory, raw',
            'calories' => 20,
            'proteins' => 1.1,
            'carbohydrate' => 2.8,
            'lipids' => 0.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chicory, steamed (without addition of salt)',
            'calories' => 20,
            'proteins' => 1.1,
            'carbohydrate' => 2.8,
            'lipids' => 0.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chili con carne, prepared',
            'calories' => 115,
            'proteins' => 10.4,
            'carbohydrate' => 8.7,
            'lipids' => 3.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chinese cabbage, raw',
            'calories' => 14,
            'proteins' => 1.4,
            'carbohydrate' => 1.2,
            'lipids' => 0.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chinese cabbage, stewed (without addition of fat and salt)',
            'calories' => 14,
            'proteins' => 1.3,
            'carbohydrate' => 1.2,
            'lipids' => 0.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chives, fresh',
            'calories' => 30,
            'proteins' => 3.0,
            'carbohydrate' => 1.9,
            'lipids' => 0.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chocolate meringues',
            'calories' => 444,
            'proteins' => 4.2,
            'carbohydrate' => 83.5,
            'lipids' => 9.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chocolate meringues with chocolate base',
            'calories' => 486,
            'proteins' => 5.2,
            'carbohydrate' => 71.5,
            'lipids' => 19.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chocolate powder',
            'calories' => 398,
            'proteins' => 5.3,
            'carbohydrate' => 71.3,
            'lipids' => 7.8,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chocolate ring cake',
            'calories' => 380,
            'proteins' => 6.4,
            'carbohydrate' => 46.3,
            'lipids' => 18.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chocolate sauce',
            'calories' => 122,
            'proteins' => 3.6,
            'carbohydrate' => 20.0,
            'lipids' => 3.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chocolate, dark',
            'calories' => 537,
            'proteins' => 5.7,
            'carbohydrate' => 53.4,
            'lipids' => 31.8,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chocolate, white',
            'calories' => 567,
            'proteins' => 6.7,
            'carbohydrate' => 55.8,
            'lipids' => 35.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'chop (average of veal, pork, lamb), pan fried (without addition of fat and salt)',
            'calories' => 223,
            'proteins' => 28.8,
            'carbohydrate' => 0.0,
            'lipids' => 12.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chop (average of veal, pork, lamb), raw',
            'calories' => 177,
            'proteins' => 21.3,
            'carbohydrate' => 0.0,
            'lipids' => 10.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Chräbeli (aniseed cookie)',
            'calories' => 366,
            'proteins' => 8.6,
            'carbohydrate' => 75.3,
            'lipids' => 2.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cider, 4 vol%',
            'calories' => 32,
            'proteins' => 0.0,
            'carbohydrate' => 2.5,
            'lipids' => 0.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cider, 6.2 vol%',
            'calories' => 64,
            'proteins' => 0.0,
            'carbohydrate' => 7.3,
            'lipids' => 0.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cinnamon',
            'calories' => 317,
            'proteins' => 3.9,
            'carbohydrate' => 56.0,
            'lipids' => 3.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cinnamon cookie, star-shaped',
            'calories' => 505,
            'proteins' => 14.2,
            'carbohydrate' => 50.9,
            'lipids' => 25.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Citrus fruits (average), raw',
            'calories' => 41,
            'proteins' => 0.8,
            'carbohydrate' => 8.0,
            'lipids' => 0.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cocktail sauce, with rapeseed mayonnaise, home-made',
            'calories' => 696,
            'proteins' => 2.4,
            'carbohydrate' => 3.8,
            'lipids' => 74.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Coco macaroon',
            'calories' => 549,
            'proteins' => 6.9,
            'carbohydrate' => 35.1,
            'lipids' => 38.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cocoa powder',
            'calories' => 419,
            'proteins' => 22.5,
            'carbohydrate' => 10.8,
            'lipids' => 24.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Coconut',
            'calories' => 384,
            'proteins' => 4.6,
            'carbohydrate' => 4.8,
            'lipids' => 36.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Coconut drink, plain',
            'calories' => 22,
            'proteins' => 0.4,
            'carbohydrate' => 2.8,
            'lipids' => 1.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Coconut drink, plain, with calcium and vitamin fortified',
            'calories' => 22,
            'proteins' => 0.4,
            'carbohydrate' => 2.8,
            'lipids' => 1.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Coconut fat',
            'calories' => 894,
            'proteins' => 0.8,
            'carbohydrate' => 0.0,
            'lipids' => 99.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Coconut milk',
            'calories' => 214,
            'proteins' => 2.4,
            'carbohydrate' => 3.1,
            'lipids' => 21.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Coconut, dried (coco flakes)',
            'calories' => 653,
            'proteins' => 7.6,
            'carbohydrate' => 5.3,
            'lipids' => 61.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cod, filet, steamed (without addition of fat and salt)',
            'calories' => 72,
            'proteins' => 17.0,
            'carbohydrate' => 0.0,
            'lipids' => 0.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cod, raw',
            'calories' => 76,
            'proteins' => 18.1,
            'carbohydrate' => 0.0,
            'lipids' => 0.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Coffee cream UHT',
            'calories' => 161,
            'proteins' => 2.6,
            'carbohydrate' => 3.8,
            'lipids' => 15.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Coffee with coffee cream, no sugar added',
            'calories' => 13,
            'proteins' => 0.3,
            'carbohydrate' => 0.5,
            'lipids' => 1.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Coffee, black, no sugar added',
            'calories' => 2,
            'proteins' => 0.1,
            'carbohydrate' => 0.3,
            'lipids' => 0.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cola beverage, sweetened',
            'calories' => 40,
            'proteins' => 0.0,
            'carbohydrate' => 10.0,
            'lipids' => 0.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cold cuts (average)',
            'calories' => 276,
            'proteins' => 13.9,
            'carbohydrate' => 0.7,
            'lipids' => 24.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Coleslaw salad, prepared',
            'calories' => 124,
            'proteins' => 1.6,
            'carbohydrate' => 4.5,
            'lipids' => 10.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Common bean (all types), mature seed, cooked (without addition of fat and salt)',
            'calories' => 111,
            'proteins' => 7.7,
            'carbohydrate' => 14.5,
            'lipids' => 0.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Common bean (all types), mature seed, dried',
            'calories' => 305,
            'proteins' => 20.9,
            'carbohydrate' => 40.7,
            'lipids' => 1.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Condensed milk, sweetened',
            'calories' => 339,
            'proteins' => 8.0,
            'carbohydrate' => 54.3,
            'lipids' => 10.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Condensed milk, unsweetened',
            'calories' => 131,
            'proteins' => 6.4,
            'carbohydrate' => 9.3,
            'lipids' => 7.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cooked cured meat (average)',
            'calories' => 223,
            'proteins' => 19.8,
            'carbohydrate' => 0.7,
            'lipids' => 15.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cooked sausages (average)',
            'calories' => 278,
            'proteins' => 15.4,
            'carbohydrate' => 1.1,
            'lipids' => 23.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cooked sausages not smoked (average)',
            'calories' => 251,
            'proteins' => 13.4,
            'carbohydrate' => 0.8,
            'lipids' => 21.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cooked smoked sausages (average)',
            'calories' => 249,
            'proteins' => 14.0,
            'carbohydrate' => 0.5,
            'lipids' => 21.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cooking butter',
            'calories' => 745,
            'proteins' => 0.5,
            'carbohydrate' => 0.7,
            'lipids' => 82.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Coppa (cured pork meat)',
            'calories' => 319,
            'proteins' => 28.8,
            'carbohydrate' => 0.3,
            'lipids' => 22.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cordon bleu from pork schnitzel, fried',
            'calories' => 241,
            'proteins' => 23.2,
            'carbohydrate' => 10.3,
            'lipids' => 11.7,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cordon bleu from veal schnitzel, fried',
            'calories' => 233,
            'proteins' => 22.9,
            'carbohydrate' => 10.3,
            'lipids' => 11.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Corn germ oil',
            'calories' => 810,
            'proteins' => 0.0,
            'carbohydrate' => 0.0,
            'lipids' => 90.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Corn semolina, cooked',
            'calories' => 79,
            'proteins' => 2.0,
            'carbohydrate' => 16.7,
            'lipids' => 0.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Corn semolina, dried',
            'calories' => 350,
            'proteins' => 8.8,
            'carbohydrate' => 73.8,
            'lipids' => 1.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cornflakes',
            'calories' => 363,
            'proteins' => 7.7,
            'carbohydrate' => 79.7,
            'lipids' => 0.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cotechino (pork sausage)',
            'calories' => 450,
            'proteins' => 17.2,
            'carbohydrate' => 0.0,
            'lipids' => 42.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cottage cheese',
            'calories' => 100,
            'proteins' => 12.4,
            'carbohydrate' => 2.4,
            'lipids' => 4.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cotto (meat product)',
            'calories' => 93,
            'proteins' => 15.7,
            'carbohydrate' => 0.6,
            'lipids' => 3.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cow milk, skimmed, UHT',
            'calories' => 33,
            'proteins' => 3.3,
            'carbohydrate' => 4.7,
            'lipids' => 0.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cracker, salty snacks',
            'calories' => 449,
            'proteins' => 9.2,
            'carbohydrate' => 66.3,
            'lipids' => 15.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cranberry, fresh',
            'calories' => 36,
            'proteins' => 0.3,
            'carbohydrate' => 6.2,
            'lipids' => 0.5,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cream (average)',
            'calories' => 252,
            'proteins' => 2.3,
            'carbohydrate' => 3.4,
            'lipids' => 25.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cream cheese, min. 60% fidm',
            'calories' => 351,
            'proteins' => 11.1,
            'carbohydrate' => 4.5,
            'lipids' => 32.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cream slice',
            'calories' => 301,
            'proteins' => 4.1,
            'carbohydrate' => 28.8,
            'lipids' => 18.8,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cream, 35% fat, pasteurized',
            'calories' => 334,
            'proteins' => 2.0,
            'carbohydrate' => 3.1,
            'lipids' => 34.8,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cream, 35% fat, UHT',
            'calories' => 335,
            'proteins' => 2.0,
            'carbohydrate' => 3.1,
            'lipids' => 34.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cream, at least 45 % milk fat, pasteurized',
            'calories' => 468,
            'proteins' => 1.9,
            'carbohydrate' => 2.7,
            'lipids' => 50.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cream, pasteurized, 25% fat',
            'calories' => 274,
            'proteins' => 2.3,
            'carbohydrate' => 3.3,
            'lipids' => 27.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cream, UHT',
            'calories' => 251,
            'proteins' => 2.5,
            'carbohydrate' => 3.7,
            'lipids' => 25.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Crispbread, wholemeal',
            'calories' => 332,
            'proteins' => 12.0,
            'carbohydrate' => 61.1,
            'lipids' => 1.7,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Crispbread, wholemeal, with linseeds',
            'calories' => 352,
            'proteins' => 12.9,
            'carbohydrate' => 55.2,
            'lipids' => 5.7,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Crispbread, wholemeal, with sesame',
            'calories' => 360,
            'proteins' => 13.1,
            'carbohydrate' => 55.3,
            'lipids' => 6.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Croissant (average)',
            'calories' => 400,
            'proteins' => 7.8,
            'carbohydrate' => 41.1,
            'lipids' => 22.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Croissant filled with nuts, puff pastry',
            'calories' => 419,
            'proteins' => 6.8,
            'carbohydrate' => 36.2,
            'lipids' => 26.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Croissant filled with nuts, yeast dough',
            'calories' => 318,
            'proteins' => 7.7,
            'carbohydrate' => 41.9,
            'lipids' => 12.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Croissant, pretzel (with iodized salt)',
            'calories' => 423,
            'proteins' => 9.1,
            'carbohydrate' => 39.4,
            'lipids' => 25.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Croque Monsieur, Hot Sandwich with cheese and ham',
            'calories' => 260,
            'proteins' => 16.4,
            'carbohydrate' => 26.6,
            'lipids' => 9.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cucumber, pickled',
            'calories' => 14,
            'proteins' => 0.7,
            'carbohydrate' => 2.1,
            'lipids' => 0.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Cucumber, raw',
            'calories' => 14,
            'proteins' => 0.7,
            'carbohydrate' => 2.0,
            'lipids' => 0.1,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Curd cheese puff pastry (with butter), raw',
            'calories' => 401,
            'proteins' => 7.1,
            'carbohydrate' => 29.0,
            'lipids' => 28.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Curd cheese puff pastry (with vegetable fat), raw',
            'calories' => 388,
            'proteins' => 7.1,
            'carbohydrate' => 28.8,
            'lipids' => 26.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Curd, with fruits, with sugar',
            'calories' => 112,
            'proteins' => 8.4,
            'carbohydrate' => 14.1,
            'lipids' => 2.4,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Curds min. 40% fidm',
            'calories' => 183,
            'proteins' => 6.9,
            'carbohydrate' => 3.7,
            'lipids' => 15.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Curds with at most 10% fidm',
            'calories' => 61,
            'proteins' => 10.6,
            'carbohydrate' => 4.2,
            'lipids' => 0.2,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Curds, plain, half fat',
            'calories' => 99,
            'proteins' => 9.4,
            'carbohydrate' => 4.1,
            'lipids' => 5.0,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Currant, black, raw',
            'calories' => 71,
            'proteins' => 1.3,
            'carbohydrate' => 9.7,
            'lipids' => 0.9,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Currant, red, raw',
            'calories' => 50,
            'proteins' => 1.6,
            'carbohydrate' => 7.1,
            'lipids' => 0.7,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Date, dried',
            'calories' => 289,
            'proteins' => 2.4,
            'carbohydrate' => 64.7,
            'lipids' => 0.6,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Deer (average), raw',
            'calories' => 112,
            'proteins' => 20.6,
            'carbohydrate' => 0.0,
            'lipids' => 3.3,
            'user_id' => null,
        ]);

        Meal::create([
            'name' => 'Deer, entrecôte, raw',
            'calories' => 111,
            'proteins' => 23.1,
            'carbohydrate' => 0.0,
            'lipids' => 2.1,
            'user_id' => null,
        ]);
    }
}
