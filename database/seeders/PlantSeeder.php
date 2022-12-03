<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plants_table')->insert([
            'name'=>'Sweet Potato',
            'harvest'=>'Immediately after maturity anddestroy the crop residues',
            'yield'=>'20–25t/ha of tubers in 110–120 days',
            'irrigation'=>'Irrigate before planting, on 3rd day and then after once a week',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7UEMaqJuae8b47l7wbXYFXtJSRArtX1OOXg&usqp=CAU',
            'season'=>'All year round',
            'preparation'=>'Plough the field to fine tilth. The soil depth should be at least 30cm. Form ridges and furrows 60
                    cm apart or beds',
            'cultivation'=>'The field should be kept clean by hand weeding till vines are fully developed',
            'pestManagement'=>'Remove previous sweet potato crop residues and alternate host i.e., Ipomoea sp. And destroy
                        them'
        ]);
        DB::table('plants_table')->insert([
            'name'=>'Sweet Taro',
            'harvest'=>'When the leaves begin to yellow and die down and there is a slight lifting of the tubers',
            'yield'=>'10-15 metric tons/hectare and depends on climate',
            'irrigation'=>'This species is propagated using setts, which are suckers, the top of the corm with about 30 cm',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsYlhGHyJIIjfL6mgldZz-8urxNmzqt7MmGQ&usqp=CAU',
            'season'=>'January–February',
            'preparation'=>' Plant taro in furrows 6 inches (15cm) deep and cover corms with 2 to 3 inches of soil; space plants 15 to 24 inches apart in rows about 40 inches apart (or space plants equidistant 2 to 3 feet apart).',
            'cultivation'=>'Grown in fresh water and coastal swamps',
            'pestManagement'=>'Hight pest resistanmt capacity'
        ]);

        DB::table('plants_table')->insert([
            'name'=>'Cassava',
            'harvest'=>'Early Varieties: Mature in 8–10 months',
            'yield'=>'20–30 tonnes/ha',
            'irrigation'=>'Drip irrigation, in all water regimes, significantly increased the cassavas fresh storage root yield over the non-irrigated crops.',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQO44yst4-JWZroSq66j3eSKfJ7CSEqk6KHUg&usqp=CAU',
            'season'=>'March to Junes',
            'preparation'=>'Soils should be well-drained, and not sandy, clayey, stony, or salt-affected, and at least 30 cm deep',
            'cultivation'=>'cassava can be grown by making soil mounds (3 metres wide and. 2 metres high) or ridges sufficiently high so the tuberous roots are. above the waterlogged soil.',
            'pestManagement'=>'To avoid this pest, make sure to plant early at the onset of rains.'
        ]);
        DB::table('plants_table')->insert([
            'name'=>'Taro',
            'harvest'=>'Harvesting at 6–7 months for Hybrid',
            'yield'=>'20–25 tonnes/ha',
            'irrigation'=>'Adapt a sprinkler or drip irrigation system for the better water management system',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGGi99za5G8GDquluh3ckJ6rPzwSfb8f9XJw&usqp=CAU',
            'season'=>'July to January',
            'preparation'=>'Taro needs consistent irrigation and a well-drained rich soil with plenty of organic matter',
            'cultivation'=>'It is one of the most important staple food crops in the Pacific Islands and is widely grown throughout the South Pacific, Asia, and Africa',
            'pestManagement'=>'Corm Rot: Improve drainage & Have soil test for Nutrient status'
        ]);
        DB::table('plants_table')->insert([
            'name'=>'Arrowleaf elephant',
            'harvest'=>'Harvest 12 months after planting',
            'yield'=>'15–20 tonnes/ha.',
            'irrigation'=>'Plan on watering your arrowhead plant every 10-14 days',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBBczgOvRdbVmpGazavxad2D9DnWT4duPtrQ&usqp=CAU',
            'season'=>'January to December',
            'preparation'=>'Plant your arrowhead plant in a light, fast-draining soil like cactus mix with some extra perlite or vermiculite thrown in.',
            'cultivation'=>'Arrowhead plants do best with moist potting soil in the spring and summer months and slightly dry soil in the fall and winter',
            'pestManagement'=>'N/A'
        ]);

        DB::table('plants_table')->insert([
            'name'=>'Ginger',
            'harvest'=>'Immature: Harvest at 5 months from planting',
            'yield'=>'Immature: 20–25 tonnes/ha, Mature: 25–30 tonnes/ha ',
            'irrigation'=>'Ginger is cultivated as rain fed crop in high rainfall areas (uniform distribution for 5 to 7 months) and irrigated crop in less rainfall areas where distribution is not uniform.',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0VibgdhvZgsyFNXbIxmZDDidEOkAJYXe2EQ&usqp=CAU',
            'season'=>'Early spring to plant',
            'preparation'=>'Slope Land: Immature: 60 cm between rows & 15 cm within rows,Mature: 60 cm between rows & 20 cm within rows',
            'cultivation'=>'Ginger can be grown both under rain fed and irrigated conditions',
            'pestManagement'=>'Hot water treatment of Planting materials at 51 °C for 10 minutes'
        ]);

        DB::table('plants_table')->insert([
            'name'=>'Tumeric',
            'harvest'=>'10 months after planting',
            'yield'=>'15 to 25 tonnes',
            'irrigation'=>'Precision Irrigation and fertigation in Turmeric is maintained by drip method of irrigation. Inline drip line with 4 lph emitters spaced at 40 or 60 cm is found suitable for Turmeric.',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjrT8fiIvF3LwkllTeoUzBhcG7qUljxX69DQ&usqp=CAU',
            'season'=>'September to October',
            'preparation'=>'The field should be ploughed up to 35-40cm in depth and tilling soil is done.',
            'cultivation'=>'Rhizomes are harvested 9 to 10 months after planting, the lower leaves turning yellow or stems drying and falling over are indications of maturity.',
            'pestManagement'=>'Hot water treatment of planting material at 51°C for 10 min'
        ]);
        DB::table('plants_table')->insert([
            'name'=>'Yam',
            'harvest'=>'October to March Harvest Index is when leaves start to senescence & are falling off',
            'yield'=>'15 to 20 tonnes/ha',
            'irrigation'=>'The indirect form of irrigation is also needed for the Yam plants.',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeZHCpT4Ve6P-9sJaGafqUNBidu8hnfQe1SQ&usqp=CAU',
            'season'=>'Early Varieties: Between October–December, Late Varieties: Between Jan–March',
            'preparation'=>'To grow sprouts, cut a yam in half and submerge one portion in a glass of cool water.',
            'cultivation'=>'Yams are grown by planting pieces of tuber, or small whole tubers (seed yams) saved from the previous season',
            'pestManagement'=>'Rotate with non-host plants like Cassava, Vegetables (Cabbage,Lettuce)'
        ]);
        DB::table('plants_table')->insert([
            'name'=>'Capsicum',
            'harvest'=>'Once the fruit gets large enough (about 4 to 5 inches long), clip the pepper off at the stem with shears or sharp scissors.',
            'yield'=>'20-40 tons per hectare in about 4-5 monthsa',
            'irrigation'=>'Apply 75 % total recommended dose of super phosphate ie 703 kg / ha as basal. Install the drip irrigation with main and sub main pipes and place lateral tubes at an interval of 1.5 m.',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyAZsdYQJJendooYYGXJ3Fh9v3eqQTRNxrgw&usqp=CAU',
            'season'=>'January until April.',
            'preparation'=>'The land should be thoroughly ploughed and soil should be brought to fine tilth. Well decomposed organic manure at the rate of 20-25 kg per sq mtr is mixed with soil.',
            'cultivation'=>'Capsicum seedling should be sown in two rows on the raised beds.',
            'pestManagement'=>'Uproot affected plants & pack in bags, bury and burn. Practice crop rotation of non-host plants'
        ]);
        DB::table('plants_table')->insert([
            'name'=>'Chillies',
            'harvest'=>'Fruits appear 90–120 days after planting and harvest weekly for one year',
            'yield'=>'Fresh 16 tonnes/ha, Dried 4–6 tonnes/ha',
            'irrigation'=>'One of the most important aspects of growing chilli pepper plants is getting the watering right, they are very thirsty plants. During hot periods, especially if grown inside a greenhouse, you will need to water regularly, usually twice a day. ',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQInx2AjfUsKth3x6KdFRugddl3EnukOhdQHQ&usqp=CAU',
            'season'=>'All year around.s',
            'preparation'=>' Plant seeds in seedbeds or seedling trays ',
            'cultivation'=>'After sowing the seeds are covered with coco peat and it is watered everyday till it germinates. Around 3% Panchagavya spray is done after 15 days or a micronutrient spray is done after 18 days',
            'pestManagement'=>'Practice inter-row cultivation.'
        ]);
        DB::table('plants_table')->insert([
            'name'=>'Chinese cabbage',
            'harvest'=>'Usually takes 30–60 days to get ready depending on variety',
            'yield'=>'Fresh 12 tonnes/ha',
            'irrigation'=>'It was found that cabbage crop performed better with the microsprinkler system than the drip system.',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRh8UjYMNExwO3BnWIkU9ZgdcZct10bJJRJVw&usqp=CAU',
            'season'=>'late spring to late autumn,',
            'preparation'=>'N/A',
            'cultivation'=>'Sow thinly outdoors from June to August, every three weeks for successional crops, 1cm (½in) deep in rows 38cm (15in) apart.',
            'pestManagement'=>'Remove and destroy diseased plants by either burning or burying, as soon as symptoms appear'
        ]);
        DB::table('plants_table')->insert([
            'name'=>'Corriander',
            'harvest'=>'Regular harvest when the plants are 15–20 cm about the ground',
            'yield'=>'6 to 8 tonnes/ ha. Use in flavoring, curries and soup',
            'irrigation'=>'Standard irrigation schedule is 5–6 irrigations 30–35, 60–70, 80–90, 100–105 and 110–150 days after sowing.',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkWb8f6wYBYcMzQDYaGJfXzADFHkK0JGWgTg&usqp=CAU',
            'season'=>'mid-summer onwards',
            'preparation'=>'Sow directly into well drained, fertile soil. If your soil needs to be improved add good garden compost or well rotted manure.',
            'cultivation'=>'Prepare the main field to a fine tilth and form beds and channels (for irrigated crop). Sow the split seeds at a spacing of 20 x 15 cm.',
            'pestManagement'=>'Maintain good drainage to prevent root rot && it is pest free regularly.'
        ]);
        DB::table('plants_table')->insert([
            'name'=>'Cucumber',
            'harvest'=>'Harvest at 50–60 days after planting, continue picking of fruits for 3 weeks',
            'yield'=>'Fresh 12–15 tonnes per hectare',
            'irrigation'=>'The main care requirement for cucumbers is consistent watering! They need at least one inch of water per week',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmAT15b9T-LEsX5vyNzFQyfaIXuLo0qWAxEg&usqp=CAU',
            'season'=>'All year around, fruits best during cool season',
            'preparation'=>'Sow two seeds per place of bed which is 2.5m wide and use spacing of 60cm between seeds.  Seeds are sown at the depth of 2-3cm.',
            'cultivation'=>'The cucumber seed is sown by the method of dibbling at a distance of 1.5 m to 2.5 m (row to row) x 60 cm to 90 cm. (Plant spacing)',
            'pestManagement'=>'Use healthy seeds of resistant varieties.Avoid planting at high density.'
        ]);
        DB::table('plants_table')->insert([
            'name'=>'Eggplant',
            'harvest'=>'Harvest 60–90 days after planting',
            'yield'=>'20–25 tonnes/ha',
            'irrigation'=>'Water eggplant deeply and infrequently, applying 1-2 inches per week',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUmGLUc7cto0VYLdXTtPgQzrj9_li3Qc-ZUg&usqp=CAU',
            'season'=>'All year around but best the hot and wet season',
            'preparation'=>'Prepare land by plowing ones and harrowing twice. Make furrows 1.0 m apart. Spread manure along rows or hills at 1-2 handful per hill. Apply complete fertilizer (14-14-14) at 10-15 g/hill and cover lightly with soil.',
            'cultivation'=>'Plant the eggplant seedlings in a sunny spot — a place that gets between six and eight hours of direct sunlight daily. ',
            'pestManagement'=>'Avoid over fertilizing with nitrogen, as this can make plants more attractive to aphids. In addition, manage weeds before they begin flowering and producing seeds in and around the garden, which may harbor insect pests and provide overwintering sites'
        ]);
        DB::table('plants_table')->insert([
            'name'=>'French bean ',
            'harvest'=>'Harvest tender pods 40–60 days after planting',
            'yield'=>'7–10 tonnes/ha',
            'irrigation'=>'This watering technique has the advantage of limiting the populations of certain pests—in particular spider mites and thrips.',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjRRe_XUQnPWHXKR2d0HAhnjnirq317YGeQQ&usqp=CAU',
            'season'=>'Best yields from April to September',
            'preparation'=>'For preparation of field, soil is ploughed 2-3 times with power tiller or with spade. Planking is done during the last ploughing to make friable soil bed for sowing.',
            'cultivation'=>'French beans are sown directly into the seed bed. The land should be ploughed and harrowed properly just before planting.  ',
            'pestManagement'=>'Plough plant remnants after harvest & rotate with Mildew resistant vegetable like'
        ]);
        DB::table('plants_table')->insert([
            'name'=>'Lettuce',
            'harvest'=>'Leafy Lettuce matures in 50–80 days',
            'yield'=>'8–10 tonnes/ha',
            'irrigation'=>'Sprinklers are commonly used to germinate lettuce seed when temperatures are hot.',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS48KZAJINZEKaU8xMDtGYy17Pwzw_RjViHiA&usqp=CAU',
            'season'=>'Head Type:March to October; Leafy type:All year round',
            'preparation'=>'Plants should be hardened for a week to 10 days before field setting.',
            'cultivation'=>'Lettuces seeds should be sown in lines at a spacing of 5 cm between rows and 1.5-2 cm depth.',
            'pestManagement'=>'Insecticides are the most commonly used method of insect pest control on lettuce crops'
        ]);



    }
}
