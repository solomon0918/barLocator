<?php

use Illuminate\Database\Seeder;

class UsersContactCountryCodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lk_contact_country_code')->delete();
        $countrycode = [
           [
                'country_code' => '93',
                'city' => 'Afghanistan'
           ],
           [
                'country_code' => '355',
                'city' => 'Albania'
           ],
           [
                'country_code' => '213',
                'city' => 'Algeria'
           ],
           [
                'country_code' => '1-684',
                'city' => 'American Samoa'
           ],
           [
                'country_code' => '376',
                'city' => 'Andorra'
           ],
           [
                'country_code' => '244',
                'city' => 'Angola'
           ],
           [
                'country_code' => '1-264',
                'city' => 'Anguilla'
           ],
           [
                'country_code' => '672',
                'city' => 'Antarctica'
           ],
           [
                'country_code' => '1-268',
                'city' => 'Antigua and Barbuda'
           ],
           [
                'country_code' => '54',
                'city' => 'Argentina'
           ],
           [
                'country_code' => '374',
                'city' => 'Armenia'
           ],
           [
                'country_code' => '297',
                'city' => 'Aruba'
           ],
           [
                'country_code' => '61',
                'city' => 'Australia'
           ],
           [
                'country_code' => '43',
                'city' => 'Austria'
           ],
           [
                'country_code' => '994',
                'city' => 'Azerbaijan'
           ],
           [
                'country_code' => '1-242',
                'city' => 'Bahamas'
           ],
           [
                'country_code' => '973',
                'city' => 'Bahrain'
           ],
           [
                'country_code' => '880',
                'city' => 'Bangladesh'
           ],
           [
                'country_code' => '1-246',
                'city' => 'Barbados'
           ],
           [
                'country_code' => '375',
                'city' => 'Belarus'
           ],
           [
                'country_code' => '32',
                'city' => 'Belgium'
           ],
           [
                'country_code' => '501',
                'city' => 'Belize'
           ],
           [
                'country_code' => '229',
                'city' => 'Benin'
           ],
           [
                'country_code' => '1-441',
                'city' => 'Bermuda'
           ],
           [
                'country_code' => '975',
                'city' => 'Bhutan'
           ],
           [
                'country_code' => '591',
                'city' => 'Bolivia'
           ],
           [
                'country_code' => '387',
                'city' => 'Bosnia and Herzegovina'
           ],
           [
                'country_code' => '267',
                'city' => 'Botswana'
           ],
           [
                'country_code' => '55',
                'city' => 'Brazil'
           ],
           [
                'country_code' => '246',
                'city' => 'British Indian Ocean Territory'
           ],
           [
                'country_code' => '1-284',
                'city' => 'British Virgin Islands'
           ],
           [
                'country_code' => '673',
                'city' => 'Brunei'
           ],
           [
                'country_code' => '359',
                'city' => 'Bulgaria'
           ],
           [
                'country_code' => '226',
                'city' => 'Burkina Faso'
           ],
           [
                'country_code' => '257',
                'city' => 'Burundi'
           ],
           [
                'country_code' => '855',
                'city' => 'Cambodia'
           ],
           [
                'country_code' => '237',
                'city' => 'Cameroon'
           ],
           [
                'country_code' => '1',
                'city' => 'Canada'
           ],
           [
                'country_code' => '238',
                'city' => 'Cape Verde'
           ],
           [
                'country_code' => '1-345',
                'city' => 'Cayman Islands'
           ],
           [
                'country_code' => '236',
                'city' => 'Central African Republic'
           ],
           [
                'country_code' => '235',
                'city' => 'Chad'
           ],
           [
                'country_code' => '56',
                'city' => 'Chile'
           ],
           [
                'country_code' => '86',
                'city' => 'China'
           ],
           [
                'country_code' => '61',
                'city' => 'Christmas Island'
           ],
           [
                'country_code' => '61',
                'city' => 'Cocos Islands'
           ],
           [
                'country_code' => '57',
                'city' => 'Colombia'
           ],
           [
                'country_code' => '269',
                'city' => 'Comoros'
           ],
           [
                'country_code' => '682',
                'city' => 'Cook Islands'
           ],
           [
                'country_code' => '506',
                'city' => 'Costa Rica'
           ],
           [
                'country_code' => '385',
                'city' => 'Croatia'
           ],
           [
                'country_code' => '53',
                'city' => 'Cuba'
           ],
           [
                'country_code' => '599',
                'city' => 'Curacao'
           ],
           [
                'country_code' => '357',
                'city' => 'Cyprus'
           ],
           [
                'country_code' => '420',
                'city' => 'Czech Republic'
           ],
           [
                'country_code' => '243',
                'city' => 'Democratic Republic of the Congo'
           ],
           [
                'country_code' => '45',
                'city' => 'Denmark'
           ],
           [
                'country_code' => '253',
                'city' => 'Djibouti'
           ],
           [
                'country_code' => '1-767',
                'city' => 'Dominica'
           ],
           [
                'country_code' => '1-809',
                'city' => 'Dominican Republic'
           ],
           [
                'country_code' => '1-829',
                'city' => 'Dominican Republic'
           ],
           [
                'country_code' => '1-849',
                'city' => 'Dominican Republic'
           ],
           [
                'country_code' => '670',
                'city' => 'East Timor'
           ],
           [
                'country_code' => '593',
                'city' => 'Ecuador'
           ],
           [
                'country_code' => '20',
                'city' => 'Egypt'
           ],
           [
                'country_code' => '503',
                'city' => 'El Salvador'
           ],
           [
                'country_code' => '240',
                'city' => 'Equatorial Guinea'
           ],
           [
                'country_code' => '291',
                'city' => 'Eritrea'
           ],
           [
                'country_code' => '372',
                'city' => 'Estonia'
           ],
           [
                'country_code' => '251',
                'city' => 'Ethiopia'
           ],
           [
                'country_code' => '500',
                'city' => 'Falkland Islands'
           ],
           [
                'country_code' => '298',
                'city' => 'Faroe Islands'
           ],
           [
                'country_code' => '679',
                'city' => 'Fiji'
           ],
           [
                'country_code' => '358',
                'city' => 'Finland'
           ],
           [
                'country_code' => '33',
                'city' => 'France'
           ],
           [
                'country_code' => '689',
                'city' => 'French Polynesia'
           ],
           [
                'country_code' => '241',
                'city' => 'Gabon'
           ],
           [
                'country_code' => '220',
                'city' => 'Gambia'
           ],
           [
                'country_code' => '995',
                'city' => 'Georgia'
           ],
           [
                'country_code' => '49',
                'city' => 'Germany'
           ],
           [
                'country_code' => '233',
                'city' => 'Ghana'
           ],
           [
                'country_code' => '350',
                'city' => 'Gibraltar'
           ],
           [
                'country_code' => '30',
                'city' => 'Greece'
           ],
           [
                'country_code' => '299',
                'city' => 'Greenland'
           ],
           [
                'country_code' => '1-473',
                'city' => 'Grenada'
           ],
           [
                'country_code' => '1-671',
                'city' => 'Guam'
           ],
           [
                'country_code' => '502',
                'city' => 'Guatemala'
           ],
           [
                'country_code' => '44-1481',
                'city' => 'Guernsey'
           ],
           [
                'country_code' => '224',
                'city' => 'Guinea'
           ],
           [
                'country_code' => '245',
                'city' => 'Guinea-Bissau'
           ],
           [
                'country_code' => '592',
                'city' => 'Guyana'
           ],
           [
                'country_code' => '509',
                'city' => 'Haiti'
           ],
           [
                'country_code' => '504',
                'city' => 'Honduras'
           ],
           [
                'country_code' => '852',
                'city' => 'Hong Kong'
           ],
           [
                'country_code' => '36',
                'city' => 'Hungary'
           ],
           [
                'country_code' => '354',
                'city' => 'Iceland'
           ],
           [
                'country_code' => '91',
                'city' => 'India'
           ],
           [
                'country_code' => '62',
                'city' => 'Indonesia'
           ],
           [
                'country_code' => '98',
                'city' => 'Iran'
           ],
           [
                'country_code' => '964',
                'city' => 'Iraq'
           ],
           [
                'country_code' => '353',
                'city' => 'Ireland'
           ],
           [
                'country_code' => '44-1624',
                'city' => 'Isle of Man'
           ],
           [
                'country_code' => '972',
                'city' => 'Israel'
           ],
           [
                'country_code' => '39',
                'city' => 'Italy'
           ],
           [
                'country_code' => '225',
                'city' => 'Ivory Coast'
           ],
           [
                'country_code' => '1-876',
                'city' => 'Jamaica'
           ],
           [
                'country_code' => '81',
                'city' => 'Japan'
           ],
           [
                'country_code' => '44-1534',
                'city' => 'Jersey'
           ],
           [
                'country_code' => '962',
                'city' => 'Jordan'
           ],
           [
                'country_code' => '7',
                'city' => 'Kazakhstan'
           ],
           [
                'country_code' => '254',
                'city' => 'Kenya'
           ],
           [
                'country_code' => '686',
                'city' => 'Kiribati'
           ],
           [
                'country_code' => '383',
                'city' => 'Kosovo'
           ],
           [
                'country_code' => '965',
                'city' => 'Kuwait'
           ],
           [
                'country_code' => '996',
                'city' => 'Kyrgyzstan'
           ],
           [
                'country_code' => '856',
                'city' => 'Laos'
           ],
           [
                'country_code' => '371',
                'city' => 'Latvia'
           ],
           [
                'country_code' => '961',
                'city' => 'Lebanon'
           ],
           [
                'country_code' => '266',
                'city' => 'Lesotho'
           ],
           [
                'country_code' => '231',
                'city' => 'Liberia'
           ],
           [
                'country_code' => '218',
                'city' => 'Libya'
           ],
           [
                'country_code' => '423',
                'city' => 'Liechtenstein'
           ],
           [
                'country_code' => '370',
                'city' => 'Lithuania'
           ],
           [
                'country_code' => '352',
                'city' => 'Luxembourg'
           ],
           [
                'country_code' => '853',
                'city' => 'Macau'
           ],
           [
                'country_code' => '389',
                'city' => 'Macedonia'
           ],
           [
                'country_code' => '261',
                'city' => 'Madagascar'
           ],
           [
                'country_code' => '265',
                'city' => 'Malawi'
           ],
           [
                'country_code' => '60',
                'city' => 'Malaysia'
           ],
           [
                'country_code' => '960',
                'city' => 'Maldives'
           ],
           [
                'country_code' => '223',
                'city' => 'Mali'
           ],
           [
                'country_code' => '356',
                'city' => 'Malta'
           ],
           [
                'country_code' => '692',
                'city' => 'Marshall Islands'
           ],
           [
                'country_code' => '222',
                'city' => 'Mauritania'
           ],
           [
                'country_code' => '230',
                'city' => 'Mauritius'
           ],
           [
                'country_code' => '262',
                'city' => 'Mayotte'
           ],
           [
                'country_code' => '52',
                'city' => 'Mexico'
           ],
           [
                'country_code' => '691',
                'city' => 'Micronesia'
           ],
           [
                'country_code' => '373',
                'city' => 'Moldova'
           ],
           [
                'country_code' => '377',
                'city' => 'Monaco'
           ],
           [
                'country_code' => '976',
                'city' => 'Mongolia'
           ],
           [
                'country_code' => '382',
                'city' => 'Montenegro'
           ],
           [
                'country_code' => '1-664',
                'city' => 'Montserrat'
           ],
           [
                'country_code' => '212',
                'city' => 'Morocco'
           ],
           [
                'country_code' => '258',
                'city' => 'Mozambique'
           ],
           [
                'country_code' => '95',
                'city' => 'Myanmar'
           ],
           [
                'country_code' => '264',
                'city' => 'Namibia'
           ],
           [
                'country_code' => '674',
                'city' => 'Nauru'
           ],
           [
                'country_code' => '977',
                'city' => 'Nepal'
           ],
           [
                'country_code' => '31',
                'city' => 'Netherlands'
           ],
           [
                'country_code' => '599',
                'city' => 'Netherlands Antilles'
           ],
           [
                'country_code' => '687',
                'city' => 'New Caledonia'
           ],
           [
                'country_code' => '64',
                'city' => 'New Zealand'
           ],
           [
                'country_code' => '505',
                'city' => 'Nicaragua'
           ],
           [
                'country_code' => '227',
                'city' => 'Niger'
           ],
           [
                'country_code' => '234',
                'city' => 'Nigeria'
           ],
           [
                'country_code' => '683',
                'city' => 'Niue'
           ],
           [
                'country_code' => '850',
                'city' => 'North Korea'
           ],
           [
                'country_code' => '1-670',
                'city' => 'Northern Mariana Islands'
           ],
           [
                'country_code' => '47',
                'city' => 'Norway'
           ],
           [
                'country_code' => '968',
                'city' => 'Oman'
           ],
           [
                'country_code' => '92',
                'city' => 'Pakistan'
           ],
           [
                'country_code' => '680',
                'city' => 'Palau'
           ],
           [
                'country_code' => '970',
                'city' => 'Palestine'
           ],
           [
                'country_code' => '507',
                'city' => 'Panama'
           ],
           [
                'country_code' => '675',
                'city' => 'Papua New Guinea'
           ],
           [
                'country_code' => '595',
                'city' => 'Paraguay'
           ],
           [
                'country_code' => '51',
                'city' => 'Peru'
           ],
           [
                'country_code' => '63',
                'city' => 'Philippines'
           ],
           [
                'country_code' => '64',
                'city' => 'Pitcairn'
           ],
           [
                'country_code' => '48',
                'city' => 'Poland'
           ],
           [
                'country_code' => '351',
                'city' => 'Portugal'
           ],
           [
                'country_code' => '1-787',
                'city' => 'Puerto Rico'
           ],
           [
                'country_code' => '1-939',
                'city' => 'Puerto Rico'
           ],
           [
                'country_code' => '974',
                'city' => 'Qatar'
           ],
           [
                'country_code' => '242',
                'city' => 'Republic of the Congo'
           ],
           [
                'country_code' => '262',
                'city' => 'Reunion'
           ],
           [
                'country_code' => '40',
                'city' => 'Romania'
           ],
           [
                'country_code' => '7',
                'city' => 'Russia'
           ],
           [
                'country_code' => '250',
                'city' => 'Rwanda'
           ],
           [
                'country_code' => '590',
                'city' => 'Saint Barthelemy'
           ],
           [
                'country_code' => '290',
                'city' => 'Saint Helena'
           ],
           [
                'country_code' => '1-869',
                'city' => 'Saint Kitts and Nevis'
           ],
           [
                'country_code' => '1-758',
                'city' => 'Saint Lucia'
           ],
           [
                'country_code' => '590',
                'city' => 'Saint Martin'
           ],
           [
                'country_code' => '508',
                'city' => 'Saint Pierre and Miquelon'
           ],
           [
                'country_code' => '1-784',
                'city' => 'Saint Vincent and the Grenadines'
           ],
           [
                'country_code' => '685',
                'city' => 'Samoa'
           ],
           [
                'country_code' => '378',
                'city' => 'San Marino'
           ],
           [
                'country_code' => '239',
                'city' => 'Sao Tome and Principe'
           ],
           [
                'country_code' => '966',
                'city' => 'Saudi Arabia'
           ],
           [
                'country_code' => '221',
                'city' => 'Senegal'
           ],
           [
                'country_code' => '381',
                'city' => 'Serbia'
           ],
           [
                'country_code' => '248',
                'city' => 'Seychelles'
           ],
           [
                'country_code' => '232',
                'city' => 'Sierra Leone'
           ],
           [
                'country_code' => '65',
                'city' => 'Singapore'
           ],
           [
                'country_code' => '1-721',
                'city' => 'Sint Maarten'
           ],
           [
                'country_code' => '421',
                'city' => 'Slovakia'
           ],
           [
                'country_code' => '386',
                'city' => 'Slovenia'
           ],
           [
                'country_code' => '677',
                'city' => 'Solomon Islands'
           ],
           [
                'country_code' => '252',
                'city' => 'Somalia'
           ],
           [
                'country_code' => '27',
                'city' => 'South Africa'
           ],
           [
                'country_code' => '82',
                'city' => 'South Korea'
           ],
           [
                'country_code' => '82',
                'city' => 'South Korea'
           ],
           [
                'country_code' => '211',
                'city' => 'South Sudan'
           ],
           [
                'country_code' => '34',
                'city' => 'Spain'
           ],
           [
                'country_code' => '94',
                'city' => 'Sri Lanka'
           ],
           [
                'country_code' => '249',
                'city' => 'Sudan'
           ],
           [
                'country_code' => '597',
                'city' => 'Suriname'
           ],
           [
                'country_code' => '47',
                'city' => 'Svalbard and Jan Mayen'
           ],
           [
                'country_code' => '268',
                'city' => 'Swaziland'
           ],
           [
                'country_code' => '46',
                'city' => 'Sweden'
           ],
           [
                'country_code' => '41',
                'city' => 'Switzerland'
           ],
           [
                'country_code' => '963',
                'city' => 'Syria'
           ],
           [
                'country_code' => '886',
                'city' => 'Taiwan'
           ],
           [
                'country_code' => '992',
                'city' => 'Tajikistan'
           ],
           [
                'country_code' => '255',
                'city' => 'Tanzania'
           ],
           [
                'country_code' => '66',
                'city' => 'Thailand'
           ],
           [
                'country_code' => '228',
                'city' => 'Togo'
           ],
           [
                'country_code' => '690',
                'city' => 'Tokelau'
           ],
           [
                'country_code' => '676',
                'city' => 'Tonga'
           ],
           [
                'country_code' => '1-868',
                'city' => 'Trinidad and Tobago'
           ],
           [
                'country_code' => '216',
                'city' => 'Tunisia'
           ],
           [
                'country_code' => '90',
                'city' => 'Turkey'
           ],
           [
                'country_code' => '993',
                'city' => 'Turkmenistan'
           ],
           [
                'country_code' => '1-649',
                'city' => 'Turks and Caicos Islands'
           ],
           [
                'country_code' => '688',
                'city' => 'Tuvalu'
           ],
           [
                'country_code' => '1-340',
                'city' => 'U.S. Virgin Islands'
           ],
           [
                'country_code' => '256',
                'city' => 'Uganda'
           ],
           [
                'country_code' => '380',
                'city' => 'Ukraine'
           ],
           [
                'country_code' => '971',
                'city' => 'United Arab Emirates'
           ],
           [
                'country_code' => '44',
                'city' => 'United Kingdom'
           ],
           [
                'country_code' => '1',
                'city' => 'United States'
           ],
           [
                'country_code' => '598',
                'city' => 'Uruguay'
           ],
           [
                'country_code' => '998',
                'city' => 'Uzbekistan'
           ],
           [
                'country_code' => '678',
                'city' => 'Vanuatu'
           ],
           [
                'country_code' => '379',
                'city' => 'Vatican'
           ],
           [
                'country_code' => '58',
                'city' => 'Venezuela'
           ],
           [
                'country_code' => '84',
                'city' => 'Vietnam'
           ],
           [
                'country_code' => '681',
                'city' => 'Wallis and Futuna'
           ],
           [
                'country_code' => '212',
                'city' => 'Western Sahara'
           ],
           [
                'country_code' => '967',
                'city' => 'Yemen'
           ],
           [
                'country_code' => '260',
                'city' => 'Zambia'
           ],
           [
                'country_code' => '263',
                'city' => 'Zimbabwe'
           ]
        ];

        DB::table('lk_contact_country_code')->insert($countrycode);
    }
}
