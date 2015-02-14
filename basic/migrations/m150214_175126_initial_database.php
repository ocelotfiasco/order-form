<?php

use yii\db\Schema;
use yii\db\Migration;

class m150214_175126_initial_database extends Migration
{
    public function up()
    {
    	//Create country table.
    	$this->createTable('country', array(
    			'id' => 'pk',
    			'code' => 'VARCHAR(2) NOT NULL',
    			'name' => 'VARCHAR(256) NOT NULL'    			
    		),
    		'ENGINE = InnoDB DEFAULT CHARACTER SET = utf8'
    	);

		$this->insert('country', ['name' => 'Afghanistan', 'Code' => 'AF']);
		$this->insert('country', ['name' => 'Albania', 'Code' => 'AL']);
		$this->insert('country', ['name' => 'Algeria', 'Code' => 'DZ']);
		$this->insert('country', ['name' => 'Andorra', 'Code' => 'AD']);
		$this->insert('country', ['name' => 'Angola', 'Code' => 'AO']);
		$this->insert('country', ['name' => 'Antigua and Barbuda', 'Code' => 'AG']);
		$this->insert('country', ['name' => 'Argentina', 'Code' => 'AR']);
		$this->insert('country', ['name' => 'Armenia', 'Code' => 'AM']);
		$this->insert('country', ['name' => 'Australia', 'Code' => 'AU']);
		$this->insert('country', ['name' => 'Austria', 'Code' => 'AT']);
		$this->insert('country', ['name' => 'Azerbaijan', 'Code' => 'AZ']);
		$this->insert('country', ['name' => 'Bahamas, The', 'Code' => 'BS']);
		$this->insert('country', ['name' => 'Bahrain', 'Code' => 'BH']);
		$this->insert('country', ['name' => 'Bangladesh', 'Code' => 'BD']);
		$this->insert('country', ['name' => 'Barbados', 'Code' => 'BB']);
		$this->insert('country', ['name' => 'Belarus', 'Code' => 'BY']);
		$this->insert('country', ['name' => 'Belgium', 'Code' => 'BE']);
		$this->insert('country', ['name' => 'Belize', 'Code' => 'BZ']);
		$this->insert('country', ['name' => 'Benin', 'Code' => 'BJ']);
		$this->insert('country', ['name' => 'Bhutan', 'Code' => 'BT']);
		$this->insert('country', ['name' => 'Bolivia', 'Code' => 'BO']);
		$this->insert('country', ['name' => 'Bosnia and Herzegovina', 'Code' => 'BA']);
		$this->insert('country', ['name' => 'Botswana', 'Code' => 'BW']);
		$this->insert('country', ['name' => 'Brazil', 'Code' => 'BR']);
		$this->insert('country', ['name' => 'Brunei', 'Code' => 'BN']);
		$this->insert('country', ['name' => 'Bulgaria', 'Code' => 'BG']);
		$this->insert('country', ['name' => 'Burkina Faso', 'Code' => 'BF']);
		$this->insert('country', ['name' => 'Burundi', 'Code' => 'BI']);
		$this->insert('country', ['name' => 'Cambodia', 'Code' => 'KH']);
		$this->insert('country', ['name' => 'Cameroon', 'Code' => 'CM']);
		$this->insert('country', ['name' => 'Canada', 'Code' => 'CA']);
		$this->insert('country', ['name' => 'Cape Verde', 'Code' => 'CV']);
		$this->insert('country', ['name' => 'Central African Republic', 'Code' => 'CF']);
		$this->insert('country', ['name' => 'Chad', 'Code' => 'TD']);
		$this->insert('country', ['name' => 'Chile', 'Code' => 'CL']);
		$this->insert('country', ['name' => 'China, People\'s Republic of', 'Code' => 'CN']);
		$this->insert('country', ['name' => 'Colombia', 'Code' => 'CO']);
		$this->insert('country', ['name' => 'Comoros', 'Code' => 'KM']);
		$this->insert('country', ['name' => 'Congo, (Congo Kinshasa)', 'Code' => 'CD']);
		$this->insert('country', ['name' => 'Congo, (Congo Brazzaville)', 'Code' => 'CG']);
		$this->insert('country', ['name' => 'Costa Rica', 'Code' => 'CR']);
		$this->insert('country', ['name' => 'Cote d\'Ivoire (Ivory Coast)', 'Code' => 'CI']);
		$this->insert('country', ['name' => 'Croatia', 'Code' => 'HR']);
		$this->insert('country', ['name' => 'Cuba', 'Code' => 'CU']);
		$this->insert('country', ['name' => 'Cyprus', 'Code' => 'CY']);
		$this->insert('country', ['name' => 'Czech Republic', 'Code' => 'CZ']);
		$this->insert('country', ['name' => 'Denmark', 'Code' => 'DK']);
		$this->insert('country', ['name' => 'Djibouti', 'Code' => 'DJ']);
		$this->insert('country', ['name' => 'Dominica', 'Code' => 'DM']);
		$this->insert('country', ['name' => 'Dominican Republic', 'Code' => 'DO']);
		$this->insert('country', ['name' => 'Ecuador', 'Code' => 'EC']);
		$this->insert('country', ['name' => 'Egypt', 'Code' => 'EG']);
		$this->insert('country', ['name' => 'El Salvador', 'Code' => 'SV']);
		$this->insert('country', ['name' => 'Equatorial Guinea', 'Code' => 'GQ']);
		$this->insert('country', ['name' => 'Eritrea', 'Code' => 'ER']);
		$this->insert('country', ['name' => 'Estonia', 'Code' => 'EE']);
		$this->insert('country', ['name' => 'Ethiopia', 'Code' => 'ET']);
		$this->insert('country', ['name' => 'Fiji', 'Code' => 'FJ']);
		$this->insert('country', ['name' => 'Finland', 'Code' => 'FI']);
		$this->insert('country', ['name' => 'France', 'Code' => 'FR']);
		$this->insert('country', ['name' => 'Gabon', 'Code' => 'GA']);
		$this->insert('country', ['name' => 'Gambia, The', 'Code' => 'GM']);
		$this->insert('country', ['name' => 'Georgia', 'Code' => 'GE']);
		$this->insert('country', ['name' => 'Germany', 'Code' => 'DE']);
		$this->insert('country', ['name' => 'Ghana', 'Code' => 'GH']);
		$this->insert('country', ['name' => 'Greece', 'Code' => 'GR']);
		$this->insert('country', ['name' => 'Grenada', 'Code' => 'GD']);
		$this->insert('country', ['name' => 'Guatemala', 'Code' => 'GT']);
		$this->insert('country', ['name' => 'Guinea', 'Code' => 'GN']);
		$this->insert('country', ['name' => 'Guinea-Bissau', 'Code' => 'GW']);
		$this->insert('country', ['name' => 'Guyana', 'Code' => 'GY']);
		$this->insert('country', ['name' => 'Haiti', 'Code' => 'HT']);
		$this->insert('country', ['name' => 'Honduras', 'Code' => 'HN']);
		$this->insert('country', ['name' => 'Hungary', 'Code' => 'HU']);
		$this->insert('country', ['name' => 'Iceland', 'Code' => 'IS']);
		$this->insert('country', ['name' => 'India', 'Code' => 'IN']);
		$this->insert('country', ['name' => 'Indonesia', 'Code' => 'ID']);
		$this->insert('country', ['name' => 'Iran', 'Code' => 'IR']);
		$this->insert('country', ['name' => 'Iraq', 'Code' => 'IQ']);
		$this->insert('country', ['name' => 'Ireland', 'Code' => 'IE']);
		$this->insert('country', ['name' => 'Israel', 'Code' => 'IL']);
		$this->insert('country', ['name' => 'Italy', 'Code' => 'IT']);
		$this->insert('country', ['name' => 'Jamaica', 'Code' => 'JM']);
		$this->insert('country', ['name' => 'Japan', 'Code' => 'JP']);
		$this->insert('country', ['name' => 'Jordan', 'Code' => 'JO']);
		$this->insert('country', ['name' => 'Kazakhstan', 'Code' => 'KZ']);
		$this->insert('country', ['name' => 'Kenya', 'Code' => 'KE']);
		$this->insert('country', ['name' => 'Kiribati', 'Code' => 'KI']);
		$this->insert('country', ['name' => 'Korea, North', 'Code' => 'KP']);
		$this->insert('country', ['name' => 'Korea, South', 'Code' => 'KR']);
		$this->insert('country', ['name' => 'Kuwait', 'Code' => 'KW']);
		$this->insert('country', ['name' => 'Kyrgyzstan', 'Code' => 'KG']);
		$this->insert('country', ['name' => 'Laos', 'Code' => 'LA']);
		$this->insert('country', ['name' => 'Latvia', 'Code' => 'LV']);
		$this->insert('country', ['name' => 'Lebanon', 'Code' => 'LB']);
		$this->insert('country', ['name' => 'Lesotho', 'Code' => 'LS']);
		$this->insert('country', ['name' => 'Liberia', 'Code' => 'LR']);
		$this->insert('country', ['name' => 'Libya', 'Code' => 'LY']);
		$this->insert('country', ['name' => 'Liechtenstein', 'Code' => 'LI']);
		$this->insert('country', ['name' => 'Lithuania', 'Code' => 'LT']);
		$this->insert('country', ['name' => 'Luxembourg', 'Code' => 'LU']);
		$this->insert('country', ['name' => 'Macedonia', 'Code' => 'MK']);
		$this->insert('country', ['name' => 'Madagascar', 'Code' => 'MG']);
		$this->insert('country', ['name' => 'Malawi', 'Code' => 'MW']);
		$this->insert('country', ['name' => 'Malaysia', 'Code' => 'MY']);
		$this->insert('country', ['name' => 'Maldives', 'Code' => 'MV']);
		$this->insert('country', ['name' => 'Mali', 'Code' => 'ML']);
		$this->insert('country', ['name' => 'Malta', 'Code' => 'MT']);
		$this->insert('country', ['name' => 'Marshall Islands', 'Code' => 'MH']);
		$this->insert('country', ['name' => 'Mauritania', 'Code' => 'MR']);
		$this->insert('country', ['name' => 'Mauritius', 'Code' => 'MU']);
		$this->insert('country', ['name' => 'Mexico', 'Code' => 'MX']);
		$this->insert('country', ['name' => 'Micronesia', 'Code' => 'FM']);
		$this->insert('country', ['name' => 'Moldova', 'Code' => 'MD']);
		$this->insert('country', ['name' => 'Monaco', 'Code' => 'MC']);
		$this->insert('country', ['name' => 'Mongolia', 'Code' => 'MN']);
		$this->insert('country', ['name' => 'Montenegro', 'Code' => 'ME']);
		$this->insert('country', ['name' => 'Morocco', 'Code' => 'MA']);
		$this->insert('country', ['name' => 'Mozambique', 'Code' => 'MZ']);
		$this->insert('country', ['name' => 'Myanmar (Burma)', 'Code' => 'MM']);
		$this->insert('country', ['name' => 'Namibia', 'Code' => 'NA']);
		$this->insert('country', ['name' => 'Nauru', 'Code' => 'NR']);
		$this->insert('country', ['name' => 'Nepal', 'Code' => 'NP']);
		$this->insert('country', ['name' => 'Netherlands', 'Code' => 'NL']);
		$this->insert('country', ['name' => 'New Zealand', 'Code' => 'NZ']);
		$this->insert('country', ['name' => 'Nicaragua', 'Code' => 'NI']);
		$this->insert('country', ['name' => 'Niger', 'Code' => 'NE']);
		$this->insert('country', ['name' => 'Nigeria', 'Code' => 'NG']);
		$this->insert('country', ['name' => 'Norway', 'Code' => 'NO']);
		$this->insert('country', ['name' => 'Oman', 'Code' => 'OM']);
		$this->insert('country', ['name' => 'Pakistan', 'Code' => 'PK']);
		$this->insert('country', ['name' => 'Palau', 'Code' => 'PW']);
		$this->insert('country', ['name' => 'Panama', 'Code' => 'PA']);
		$this->insert('country', ['name' => 'Papua New Guinea', 'Code' => 'PG']);
		$this->insert('country', ['name' => 'Paraguay', 'Code' => 'PY']);
		$this->insert('country', ['name' => 'Peru', 'Code' => 'PE']);
		$this->insert('country', ['name' => 'Philippines', 'Code' => 'PH']);
		$this->insert('country', ['name' => 'Poland', 'Code' => 'PL']);
		$this->insert('country', ['name' => 'Portugal', 'Code' => 'PT']);
		$this->insert('country', ['name' => 'Qatar', 'Code' => 'QA']);
		$this->insert('country', ['name' => 'Romania', 'Code' => 'RO']);
		$this->insert('country', ['name' => 'Russia', 'Code' => 'RU']);
		$this->insert('country', ['name' => 'Rwanda', 'Code' => 'RW']);
		$this->insert('country', ['name' => 'Saint Kitts and Nevis', 'Code' => 'KN']);
		$this->insert('country', ['name' => 'Saint Lucia', 'Code' => 'LC']);
		$this->insert('country', ['name' => 'Saint Vincent and the Grenadines', 'Code' => 'VC']);
		$this->insert('country', ['name' => 'Samoa', 'Code' => 'WS']);
		$this->insert('country', ['name' => 'San Marino', 'Code' => 'SM']);
		$this->insert('country', ['name' => 'Sao Tome and Principe', 'Code' => 'ST']);
		$this->insert('country', ['name' => 'Saudi Arabia', 'Code' => 'SA']);
		$this->insert('country', ['name' => 'Senegal', 'Code' => 'SN']);
		$this->insert('country', ['name' => 'Serbia', 'Code' => 'RS']);
		$this->insert('country', ['name' => 'Seychelles', 'Code' => 'SC']);
		$this->insert('country', ['name' => 'Sierra Leone', 'Code' => 'SL']);
		$this->insert('country', ['name' => 'Singapore', 'Code' => 'SG']);
		$this->insert('country', ['name' => 'Slovakia', 'Code' => 'SK']);
		$this->insert('country', ['name' => 'Slovenia', 'Code' => 'SI']);
		$this->insert('country', ['name' => 'Solomon Islands', 'Code' => 'SB']);
		$this->insert('country', ['name' => 'Somalia', 'Code' => 'SO']);
		$this->insert('country', ['name' => 'South Africa', 'Code' => 'ZA']);
		$this->insert('country', ['name' => 'Spain', 'Code' => 'ES']);
		$this->insert('country', ['name' => 'Sri Lanka', 'Code' => 'LK']);
		$this->insert('country', ['name' => 'Sudan', 'Code' => 'SD']);
		$this->insert('country', ['name' => 'Suriname', 'Code' => 'SR']);
		$this->insert('country', ['name' => 'Swaziland', 'Code' => 'SZ']);
		$this->insert('country', ['name' => 'Sweden', 'Code' => 'SE']);
		$this->insert('country', ['name' => 'Switzerland', 'Code' => 'CH']);
		$this->insert('country', ['name' => 'Syria', 'Code' => 'SY']);
		$this->insert('country', ['name' => 'Tajikistan', 'Code' => 'TJ']);
		$this->insert('country', ['name' => 'Tanzania', 'Code' => 'TZ']);
		$this->insert('country', ['name' => 'Thailand', 'Code' => 'TH']);
		$this->insert('country', ['name' => 'Timor-Leste (East Timor)', 'Code' => 'TL']);
		$this->insert('country', ['name' => 'Togo', 'Code' => 'TG']);
		$this->insert('country', ['name' => 'Tonga', 'Code' => 'TO']);
		$this->insert('country', ['name' => 'Trinidad and Tobago', 'Code' => 'TT']);
		$this->insert('country', ['name' => 'Tunisia', 'Code' => 'TN']);
		$this->insert('country', ['name' => 'Turkey', 'Code' => 'TR']);
		$this->insert('country', ['name' => 'Turkmenistan', 'Code' => 'TM']);
		$this->insert('country', ['name' => 'Tuvalu', 'Code' => 'TV']);
		$this->insert('country', ['name' => 'Uganda', 'Code' => 'UG']);
		$this->insert('country', ['name' => 'Ukraine', 'Code' => 'UA']);
		$this->insert('country', ['name' => 'United Arab Emirates', 'Code' => 'AE']);
		$this->insert('country', ['name' => 'United Kingdom', 'Code' => 'GB']);
		$this->insert('country', ['name' => 'United States', 'Code' => 'US']);
		$this->insert('country', ['name' => 'Uruguay', 'Code' => 'UY']);
		$this->insert('country', ['name' => 'Uzbekistan', 'Code' => 'UZ']);
		$this->insert('country', ['name' => 'Vanuatu', 'Code' => 'VU']);
		$this->insert('country', ['name' => 'Vatican City', 'Code' => 'VA']);
		$this->insert('country', ['name' => 'Venezuela', 'Code' => 'VE']);
		$this->insert('country', ['name' => 'Vietnam', 'Code' => 'VN']);
		$this->insert('country', ['name' => 'Yemen', 'Code' => 'YE']);
		$this->insert('country', ['name' => 'Zambia', 'Code' => 'ZM']);
		$this->insert('country', ['name' => 'Zimbabwe', 'Code' => 'ZW']);
		$this->insert('country', ['name' => 'Abkhazia', 'Code' => 'GE']);
		$this->insert('country', ['name' => 'China, Republic of (Taiwan)', 'Code' => 'TW']);
		$this->insert('country', ['name' => 'Nagorno-Karabakh', 'Code' => 'AZ']);
		$this->insert('country', ['name' => 'Northern Cyprus', 'Code' => 'CY']);
		$this->insert('country', ['name' => 'Pridnestrovie (Transnistria)', 'Code' => 'MD']);
		$this->insert('country', ['name' => 'Somaliland', 'Code' => 'SO']);
		$this->insert('country', ['name' => 'South Ossetia', 'Code' => 'GE']);
		$this->insert('country', ['name' => 'Ashmore and Cartier Islands', 'Code' => 'AU']);
		$this->insert('country', ['name' => 'Christmas Island', 'Code' => 'CX']);
		$this->insert('country', ['name' => 'Cocos (Keeling) Islands', 'Code' => 'CC']);
		$this->insert('country', ['name' => 'Coral Sea Islands', 'Code' => 'AU']);
		$this->insert('country', ['name' => 'Heard Island and McDonald Islands', 'Code' => 'HM']);
		$this->insert('country', ['name' => 'Norfolk Island', 'Code' => 'NF']);
		$this->insert('country', ['name' => 'New Caledonia', 'Code' => 'NC']);
		$this->insert('country', ['name' => 'French Polynesia', 'Code' => 'PF']);
		$this->insert('country', ['name' => 'Mayotte', 'Code' => 'YT']);
		$this->insert('country', ['name' => 'Saint Barthelemy', 'Code' => 'GP']);
		$this->insert('country', ['name' => 'Saint Martin', 'Code' => 'GP']);
		$this->insert('country', ['name' => 'Saint Pierre and Miquelon', 'Code' => 'PM']);
		$this->insert('country', ['name' => 'Wallis and Futuna', 'Code' => 'WF']);
		$this->insert('country', ['name' => 'French Southern and Antarctic Lands', 'Code' => 'TF']);
		$this->insert('country', ['name' => 'Clipperton Island', 'Code' => 'PF']);
		$this->insert('country', ['name' => 'Bouvet Island', 'Code' => 'BV']);
		$this->insert('country', ['name' => 'Cook Islands', 'Code' => 'CK']);
		$this->insert('country', ['name' => 'Niue', 'Code' => 'NU']);
		$this->insert('country', ['name' => 'Tokelau', 'Code' => 'TK']);
		$this->insert('country', ['name' => 'Guernsey', 'Code' => 'GG']);
		$this->insert('country', ['name' => 'Isle of Man', 'Code' => 'IM']);
		$this->insert('country', ['name' => 'Jersey', 'Code' => 'JE']);
		$this->insert('country', ['name' => 'Anguilla', 'Code' => 'AI']);
		$this->insert('country', ['name' => 'Bermuda', 'Code' => 'BM']);
		$this->insert('country', ['name' => 'British Indian Ocean Territory', 'Code' => 'IO']);
		$this->insert('country', ['name' => 'British Virgin Islands', 'Code' => 'VG']);
		$this->insert('country', ['name' => 'Cayman Islands', 'Code' => 'KY']);
		$this->insert('country', ['name' => 'Falkland Islands (Islas Malvinas)', 'Code' => 'FK']);
		$this->insert('country', ['name' => 'Gibraltar', 'Code' => 'GI']);
		$this->insert('country', ['name' => 'Montserrat', 'Code' => 'MS']);
		$this->insert('country', ['name' => 'Pitcairn Islands', 'Code' => 'PN']);
		$this->insert('country', ['name' => 'Saint Helena', 'Code' => 'SH']);
		$this->insert('country', ['name' => 'South Georgia & South Sandwich Islands', 'Code' => 'GS']);
		$this->insert('country', ['name' => 'Turks and Caicos Islands', 'Code' => 'TC']);
		$this->insert('country', ['name' => 'Northern Mariana Islands', 'Code' => 'MP']);
		$this->insert('country', ['name' => 'Puerto Rico', 'Code' => 'PR']);
		$this->insert('country', ['name' => 'American Samoa', 'Code' => 'AS']);
		$this->insert('country', ['name' => 'Baker Island', 'Code' => 'UM']);
		$this->insert('country', ['name' => 'Guam', 'Code' => 'GU']);
		$this->insert('country', ['name' => 'Howland Island', 'Code' => 'UM']);
		$this->insert('country', ['name' => 'Jarvis Island', 'Code' => 'UM']);
		$this->insert('country', ['name' => 'Johnston Atoll', 'Code' => 'UM']);
		$this->insert('country', ['name' => 'Kingman Reef', 'Code' => 'UM']);
		$this->insert('country', ['name' => 'Midway Islands', 'Code' => 'UM']);
		$this->insert('country', ['name' => 'Navassa Island', 'Code' => 'UM']);
		$this->insert('country', ['name' => 'Palmyra Atoll', 'Code' => 'UM']);
		$this->insert('country', ['name' => 'U.S. Virgin Islands', 'Code' => 'VI']);
		$this->insert('country', ['name' => 'Wake Island', 'Code' => 'UM']);
		$this->insert('country', ['name' => 'Hong Kong', 'Code' => 'HK']);
		$this->insert('country', ['name' => 'Macau', 'Code' => 'MO']);
		$this->insert('country', ['name' => 'Faroe Islands', 'Code' => 'FO']);
		$this->insert('country', ['name' => 'Greenland', 'Code' => 'GL']);
		$this->insert('country', ['name' => 'French Guiana', 'Code' => 'GF']);
		$this->insert('country', ['name' => 'Guadeloupe', 'Code' => 'GP']);
		$this->insert('country', ['name' => 'Martinique', 'Code' => 'MQ']);
		$this->insert('country', ['name' => 'Reunion', 'Code' => 'RE']);
		$this->insert('country', ['name' => 'Aland', 'Code' => 'AX']);
		$this->insert('country', ['name' => 'Aruba', 'Code' => 'AW']);
		$this->insert('country', ['name' => 'Netherlands Antilles', 'Code' => 'AN']);
		$this->insert('country', ['name' => 'Svalbard', 'Code' => 'SJ']);
		$this->insert('country', ['name' => 'Ascension', 'Code' => 'AC']);
		$this->insert('country', ['name' => 'Tristan da Cunha', 'Code' => 'TA']);
		$this->insert('country', ['name' => 'Australian Antarctic Territory', 'Code' => 'AQ']);
		$this->insert('country', ['name' => 'Ross Dependency', 'Code' => 'AQ']);
		$this->insert('country', ['name' => 'Peter I Island', 'Code' => 'AQ']);
		$this->insert('country', ['name' => 'Queen Maud Land', 'Code' => 'AQ']);
		$this->insert('country', ['name' => 'British Antarctic Territory', 'Code' => 'AQ']);
    	
    	//Create grouping table.
    	$this->createTable('grouping', array(
    			'id' => 'pk',
    			'name' => 'VARCHAR(128) NOT NULL',
    			'active' => 'BOOLEAN NOT NULL',
    			'created' => 'INTEGER NOT NULL',
    			'modified' => 'INTEGER NULL'
    		),
    		'ENGINE = InnoDB DEFAULT CHARACTER SET = utf8'
    	); 

    	//Create product table.
    	$this->createTable('product', array(
    			'id' => 'pk',
    			'name' => 'VARCHAR(128) NOT NULL',
    			'active' => 'BOOLEAN NOT NULL',
    			'created' => 'INTEGER NOT NULL',
    			'modified' => 'INTEGER NULL'
    		),
    		'ENGINE = InnoDB DEFAULT CHARACTER SET = utf8'
    	); 

    	//Create landing page table.
    	$this->createTable('landing_page', array(
    			'id' => 'pk',
    			'name' => 'VARCHAR(128) NOT NULL',
    			'title' => 'VARCHAR(256) NOT NULL',
    			'description' => 'TEXT NOT NULL',
    			'active' => 'BOOLEAN NOT NULL',
    			'created' => 'INTEGER NOT NULL',
    			'modified' => 'INTEGER NULL'
    		),
    		'ENGINE = InnoDB DEFAULT CHARACTER SET = utf8'
    	);

    	//Create order header table.
    	$this->createTable('order_header', array(
    			'id' => 'pk',
    			'first_name' => 'VARCHAR(64) NOT NULL',
    			'last_name' => 'VARCHAR(64) NOT NULL',
    			'address_1' => 'VARCHAR(128) NOT NULL',
    			'address_2' => 'VARCHAR(128) NULL',
    			'address_3' => 'VARCHAR(128) NULL',
    			'city' => 'VARCHAR(128) NOT NULL',
    			'state' => 'VARCHAR(128) NOT NULL',
    			'postal' => 'VARCHAR(16) NOT NULL',
    			'country_id' => 'INTEGER NOT NULL',
    			'created' => 'INTEGER NOT NULL'
    		),
    		'ENGINE = InnoDB DEFAULT CHARACTER SET = utf8'
    	);

    	$this->addForeignKey('fk_order_header_country_id', 
    		'order_header',
    		'country_id',
    		'country',
    		'id',
    		'RESTRICT',
    		'RESTRICT');

    	//Create order products table.
    	$this->createTable('order_product', array(
    			'order_id' => 'INTEGER NOT NULL',
    			'product_id' => 'INTEGER NOT NULL',
    			'PRIMARY KEY (`order_id`, `product_id`)'
    		),
    		'ENGINE = InnoDB DEFAULT CHARACTER SET = utf8'
    	); 

    	$this->addForeignKey('fk_order_product_order_id', 
    		'order_product',
    		'order_id',
    		'order_header',
    		'id',
    		'RESTRICT',
    		'RESTRICT');

    	$this->addForeignKey('fk_order_product_product_id', 
    		'order_product',
    		'product_id',
    		'product',
    		'id',
    		'RESTRICT',
    		'RESTRICT');

    	//Create product grouping table.
    	$this->createTable('product_grouping', array(
    			'product_id' => 'INTEGER NOT NULL',
    			'grouping_id' => 'INTEGER NOT NULL',
    			'PRIMARY KEY (`product_id`, `grouping_id`)'
    		),
    		'ENGINE = InnoDB DEFAULT CHARACTER SET = utf8'
    	); 

    	$this->addForeignKey('fk_product_grouping_product_id', 
    		'product_grouping',
    		'product_id',
    		'product',
    		'id',
    		'RESTRICT',
    		'RESTRICT');

    	$this->addForeignKey('fk_product_grouping_grouping_id', 
    		'product_grouping',
    		'grouping_id',
    		'grouping',
    		'id',
    		'RESTRICT',
    		'RESTRICT');

    	//Create landing page grouping table.
    	$this->createTable('landing_page_grouping', array(
    			'landing_page_id' => 'INTEGER NOT NULL',
    			'grouping_id' => 'INTEGER NOT NULL',
    			'PRIMARY KEY (`landing_page_id`, `grouping_id`)'
    		),
    		'ENGINE = InnoDB DEFAULT CHARACTER SET = utf8'
    	); 

    	$this->addForeignKey('fk_landing_page_grouping_landing_page_id', 
    		'landing_page_grouping',
    		'landing_page_id',
    		'landing_page',
    		'id',
    		'RESTRICT',
    		'RESTRICT');

    	$this->addForeignKey('fk_landing_page_grouping_grouping_id', 
    		'landing_page_grouping',
    		'grouping_id',
    		'grouping',
    		'id',
    		'RESTRICT',
    		'RESTRICT');

    	//Create landing page product table.
    	$this->createTable('landing_page_product', array(
    			'landing_page_id' => 'INTEGER NOT NULL',
    			'product_id' => 'INTEGER NOT NULL',
    			'PRIMARY KEY (`landing_page_id`, `product_id`)'
    		),
    		'ENGINE = InnoDB DEFAULT CHARACTER SET = utf8'
    	); 

    	$this->addForeignKey('fk_landing_page_product_landing_page_id', 
    		'landing_page_product',
    		'landing_page_id',
    		'landing_page',
    		'id',
    		'RESTRICT',
    		'RESTRICT');

    	$this->addForeignKey('fk_landing_page_product_product_id', 
    		'landing_page_product',
    		'product_id',
    		'product',
    		'id',
    		'RESTRICT',
    		'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('landing_page_product');
        $this->dropTable('landing_page_grouping');
        $this->dropTable('product_grouping');
        $this->dropTable('order_product');
        $this->dropTable('order_header');
        $this->dropTable('landing_page');
        $this->dropTable('product');
        $this->dropTable('grouping');
        $this->dropTable('country');
    }
}
