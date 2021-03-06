
add_filter( 'wc_city_select_cities', 'my_cities' );
/**
 * Replace XX with the country code. Instead of YYY, ZZZ use actual  state codes.
 */
function my_cities( $cities ) {
    $cities['EG'] = array(
        'EGASN' => array(
            'Qesm Aswan', 
            'Kom Ombo', 
            'Edfo',
        ),
        'EGAST' => array(
            'Markez Asyut', 
            'Abanoub', 
            'Abo Teeg', 
            'Al Kossia', 
            'Dayrout', 
            'Sahal Slim', 
            'Markaz Sadfa', 
            'Manfalut'
        ),
        'EGALX' => array(
            'Al Ibrahimiyyah', 
            'El Gomrok', 
            'Al Dakhilah', 
            'Northern coast', 
            'Al Agamy', 
            'Al Labban', 
            'El-Mansheya', 
            'Al Wardiyan', 
            'Qism Bab Sharqi', 
            'Borg Al Arab', 
            'Sidi Bishr', 
            'El Soyof'
        ),
        'EGIS' => array(
            'El-Kasasin', 
            'Tell El Kebir', 
            'Ismailia First', 
            'Ismailia Second'
        ),
        'EGLX' => array(
            'Luxor', 
            'Al Qarnah', 
            'Armant', 
            'Esna'
        ),
        'EGBA' => array(
            'Quseer', 
            'Hurghada', 
            'Ras Ghareb', 
            'Safaga', 
            'Marsa Alam'
        ),
        'EGBH' => array(
            'Itay El Barud', 
            'AR Rahmaniyyah', 
            'Damanhour', 
            'Abu El Matamir', 
            'Markaz Abu Humus', 
            'Ad Dilinjat', 
            'El-Mahmoudeya', 
            'Badr', 
            'Rashid', 
            'Markaz Shubrakhat', 
            'Kafr El Dawwar', 
            'Kom Hamada'
        ),
        'EGGZ' => array(
            'Al Barajil', 
            'El Talbia', 
            'Al Tareq El Gaded', 
            'Al Agouzah', 
            'Imbabah', 
            '6th of October City', 
            'Saqiyet Mekki', 
            'Imbaba Airport', 
            'Giza square', 
            'Abu an Numros', 
            'Ard El Lewa', 
            'Atfih', 
            'Ausim', 
            'Abu Ragwan', 
            'Al Badrashin', 
            'Al Basrawi', 
            'El-Hawamdeyya', 
            'Ad Doqi', 
            'Al Remayah', 
            'El-Saf City', 
            'El Talbia Qebli', 
            'Al Tawabek', 
            'El Omraniya', 
            'Madinet Al Ayat', 
            'Elkit kat', 
            'Al Moatamadeyah', 
            'Al Munib', 
            'Mohandessin', 
            'Al Haram', 
            'El Warraq', 
            'Bashtil', 
            'Boulaq Ad Dakrour', 
            'Teraah Zenen', 
            'Pyramids Gardens', 
            'Dream Land', 
            'Shubra Ment', 
            'Saft Al Laban', 
            'Faisal', 
            'Kirdasah', 
            'Sheikh Zayed City', 
            'Meshaal', 
            'Mit Akaba', 
            'Haram City'
        ),
        'EGDK' => array(
            'Al Baglat', 
            'El-Masara', 
            'Shuha', 
            'Tokh', 
            'Menyet El-Nasr', 
            'Al Jamaliyah', 
            'El-Senbellawein', 
            'El-Kordy', 
            'Mansoura', 
            'Belkas', 
            'Dikirnis', 
            'Mit Ghamr', 
            'Aga', 
            'Al Manzalah', 
            'Bani Ebeid', 
            'Timayy Al Imdid', 
            'Shirbin', 
            'Talkha', 
            'Mit Selsil', 
            'Nabaruh', 
            'Mit Abou Ali'
        ),
        'EGSUZ' => array(
            'Suez Police Department',
        ),
        'EGSHR' => array(
            'Zakazik First', 
            'Hihya', 
            '10th of Ramadan City', 
            'Belbes', 
            'Tanis', 
            'El Qanayat', 
            'Zagazig 2', 
            'Abou Hammad', 
            'Abu Kabir', 
            'Awlad Saqr', 
            'El Husseiniya', 
            'Dyarb Negm', 
            'Markaz Fakous', 
            'Kafr Saqr', 
            'Markaz Mashtoul as Souq', 
            'Minya Al Qamh'
        ),
        'EGGH' => array(
            'Samannoud', 
            'Shubra Babil', 
            'Mahalah Zeyad', 
            'El-Mahalla El-Kubra', 
            'As Santah', 
            'Basioun', 
            'Zifta', 
            'Tanta', 
            'Qotour', 
            'Kafr El-Zayat'
        ),
        'EGFYM' => array(
            'Sinnuris', 
            'Ramsis', 
            'Qesm Al Fayoum', 
            'Ibshaway', 
            'Tamiya', 
            'Youssef El Seddik'
        ),
        'EGC' => array(
            'Isbico', 
            'Al Garag', 
            'El-Khalifa El-Maamoun', 
            'Al Darrasa', 
            'The Administrative Control Authority', 
            'Zamalek', 
            'El-Zaytoun', 
            'Ash Sharabiyyah', 
            'Daher', 
            'New Cairo City', 
            'Al Muski', 
            'El-Nozha 2', 
            'Abdeen', 
            'Ein Shams Al Gharbeyah', 
            'Ghamrah', 
            'Old Cairo', 
            'Downtown Cairo', 
            'Al Amireya', 
            'Al Azbakeya', 
            'El Basatin', 
            'Al Tagamoaa', 
            'El-Gamaleya', 
            'Al Hussien', 
            'Al-Helmiya', 
            'Al Khalifa', 
            'El-Darb El-Ahmar', 
            'El-Zawya El-Hamraa', 
            'Elsahel', 
            'As Sakakeni', 
            'Al Sawah', 
            'El-Sayeda Zainab', 
            'Al Sayeda Aesha', 
            'Al Shareaa Al Gadid', 
            'El-Abaseya', 
            'Al Kasr Al Aini', 
            'El Katameya', 
            'Almazah', 
            'El-Marg', 
            'Al Matariyyah', 
            'Maadi', 
            'Al Maasarah', 
            'El Mukkatam', 
            'The Cairo Angels', 
            'Al Manial', 
            'El Nozha El Gedida', 
            'Al Naam', 
            'Huckstep', 
            'Al Waili', 
            'Emtedad Ramses', 
            'Bab El Sharia', 
            'Bulaq Abou Al Ola', 
            'Sakanat El Maadi', 
            'Garden City', 
            'Geziret Dar El Salam', 
            'Gesr Al Suez', 
            'Hadaeq Al Qubbah', 
            'Hadayeq El-Maadi', 
            'Hadayek Helwan', 
            'El-Zaytoun', 
            'Helwan', 
            'Dar El-Salam', 
            'Rod El Farag', 
            'Roxy Square', 
            'Zaharaa Madinat Nasr', 
            'Saray Al Qubba', 
            'Shubra', 
            'Ein as Seirah', 
            'Ain Shams', 
            'Qasr El Nil', 
            'Kotsika', 
            'Al Tbin', 
            '15 May', 
            'Al Rehab', 
            'El-Salam City', 
            'El Shorouk City', 
            'Badr City', 
            'Nasr City', 
            'Madinaty', 
            'Sheraton Residences', 
            'Ain Shams Residences', 
            'Masarra', 
            'Masr Al Jadidah', 
            'Mansheya El-Bakry', 
            'Mansheya Nasir', 
            'Wadi Hof'
        ),
        'EGKB' => array(
            'Bahtim', 
            'Toukh', 
            'Qaha', 
            'Musturad', 
            'Al Khankah', 
            'Al Khusus', 
            'El Obour', 
            'Al Qanatir Al Khayriyyah', 
            'Al Marj', 
            'Basus', 
            'Banha', 
            'Begam', 
            'Shubra Al Khaymah', 
            'Shibin Al Qanatir', 
            'Tanan', 
            'Izbat an Nakhl', 
            'Qalyub', 
            'Kafr Shokr', 
            'Koleyet Al Zeraa', 
            'Moasaset AL Zakaah', 
            'Manti', 
            'Nawa'
        ),
        'EGMNF' => array(
            'Ashmun', 
            'El-Bagour', 
            'El Sadat City', 
            'Shibin Al Kawm', 
            'Birkat as SAB', 
            'Tala', 
            'Sirs Al Layyanah', 
            'Shebeen El-Kom', 
            'Quwaysna', 
            'Minuf'
        ),
        'EGMN' => array(
            'Qesm Melawi', 
            'Qism Minya', 
            'Abu Qurqas', 
            'Bani Mazar', 
            'Samalut', 
            'Matay', 
            'Maghagha'
        ),
        'EGBNS' => array(
            'Ehnasia', 
            'Al Fashn', 
            'Al Wasta', 
            'Beba', 
            'Markaz Bani Sweif', 
            'Nasser'
        ),
        'EGPTS' => array(
            'Port Fuad', 
            'Qism El-Zohour', 
            'El Dawahy District', 
            'El Arab District', 
            'Al Manakh', 
            'Ganoub District', 
            'Sharq District', 
            'Gharb District'
        ),
        'EGJS' => array(
            'Ras Sedr', 
            'Ras Abu Rudeis', 
            'Abu Zenima', 
            'El Tor', 
            'Dahab', 
            'Saint Catherine', 
            'Sharm El-Sheikh', 
            'Taba', 
            'Nuweibaa'
        ),
        'EGDT' => array(
            'AZ Zarqa', 
            'Damietta Desert', 
            'Faraskour', 
            'Kafr Saad'
        ),
        'EGSHG' => array(
            'Markaz Akhmim', 
            'Markaz Al Monshaah', 
            'Markaz Tama', 
            'Markaz Al Belina', 
            'Markaz Al Maraghah', 
            'Markaz Gerga', 
            'Markaz Saqaltah', 
            'Markaz Sohag', 
            'Markaz Tahta'
        ),
        'EGKN' => array(
            'Dishna', 
            'Farshut', 
            'Qift', 
            'Qena Governorate', 
            'Qus', 
            'Nagaa Hammadi', 
            'Naqadah'
        ),
        'EGKFS' => array(
            'Baltim', 
            'El-Hamoul', 
            'Burullus Lake', 
            'Al Shean', 
            'Qism Kafr El-Shaikh', 
            'Qillin', 
            'El-Reyad', 
            'Biyala', 
            'Desouk', 
            'Sidi Salem', 
            'Fowah', 
            'Metobas'
        ),
        'EGMT' => array(
            'El-Hamam', 
            'Marsa Matruh'
        ),

    );
    return $cities;
}
