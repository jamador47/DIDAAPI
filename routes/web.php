<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/{errorid}={estado}', [
'as' => 'cambio.estado',
    'uses' => 'errorscontroller@cambioestado',
    'middleware' => 'cors',
]);

Route::get('/api/arduino2/{O343}&{O345}&{O344}&{I4}&{I8}&{I14}&{O0}&{O4}&{O12}&{I16}&{I17}&{I18}&{I19}&{I21}&{I22}&{I23}&{I24}&{I27}&{I28}&{I29}&{I30}&{I31}&{O16}&{O17}&{O19}&{O20}&{O21}&{O22}&{O28}&{O29}&{O30}&{O31}&{I36}&{I37}&{I38}&{I39}&{I41}&{O57}&{O58}&{O59}&{O60}&{O61}&{O62}&{I73}&{I74}&{I78}&{I79}&{I80}&{I81}&{I83}&{I84}&{I85}&{I86}&{I87}', [
'as' => 'cambio.estado.arduino2',
    'uses' => 'errorscontroller@cambioestadoarduino2',
'middleware' => 'cors',]);


Route::get('/api/arduino3/{I1}&{I2}&{I5}&{I10}&{I11}&{I32}&{I33}&{I34}&{I35}&{I40}&{I42}&{I43}&{O36}&{O37}&{O38}&{O39}&{O44}&{O45}&{O46}&{I48}&{I49}&{I50}&{I51}&{I52}&{I53}&{I54}&{I55}&{I56}&{I57}&{I58}&{I59}&{I60}&{I61}&{I62}&{I63}&{O48}&{O49}&{O50}&{O51}&{O52}&{O53}&{O54}&{O55}&{O56}&{I64}&{I65}&{I66}&{I67}&{I68}&{I69}&{I70}&{I71}&{I72}&{I82}&{O338}', [
'as' => 'cambio.estado.arduino3',
    'uses' => 'errorscontroller@cambioestadoarduino3'],
          'middleware' => 'cors',);

Route::get('/api/arduino4/{O281}&{O280}&{O279}&{O278}&{O277}&{O276}&{O275}&{I274}&{I273}&{I272}&{O270}&{O269}&{O268}&{O267}&{O266}&{O265}&{O264}&{O263}&{I262}&{I261}&{I260}&{I259}&{I258}&{I257}&{I256}', [
'as' => 'cambio.estado.arduino4',
    'uses' => 'errorscontroller@cambioestadoarduino4',
'middleware' => 'cors',]);

Route::get('/api/c1/{x}&{y}&{z}', [
'as' => 'cambio.estado.c1',
    'uses' => 'errorscontroller@cambioc1',
'middleware' => 'cors',]);
Route::get('/api/c2/{x}&{y}&{z}', [
'as' => 'cambio.estado.c2',
    'uses' => 'errorscontroller@cambioc2',
'middleware' => 'cors',]);
Route::get('/api/c3/{x}&{y}&{z}', [
'as' => 'cambio.estado.c3',
    'uses' => 'errorscontroller@cambioc3',
'middleware' => 'cors',]);
Route::get('/api/c4/{x}&{y}&{z}', [
'as' => 'cambio.estado.c4',
    'uses' => 'errorscontroller@cambioc4',
'middleware' => 'cors',]);
Route::get('/api/c5/{x}&{y}&{z}', [
'as' => 'cambio.estado.c5',
    'uses' => 'errorscontroller@cambioc5',
'middleware' => 'cors',]);
Route::get('/api/c6/{x}&{y}&{z}', [
'as' => 'cambio.estado.c6',
    'uses' => 'errorscontroller@cambioc6',
'middleware' => 'cors',]);



Route::get('/api/arduino5/{I304}&{I305}&{I306}&{I307}&{I308}&{I309}&{I310}&{O304}&{O305}&{O306}&{O307}&{O308}&{O309}&{O310}&{O311}&{O312}&{O313}&{O314}&{O315}&{O316}&{O317}&{O318}&{I320}&{I321}&{I322}&{I323}&{I324}&{I325}&{O322}&{O323}&{O324}&{O325}&{O326}&{O327}&{O328}&{O329}&{O330}&{O331}', [
'as' => 'cambio.estado.arduino5',
    'uses' => 'errorscontroller@cambioestadoarduino5',
'middleware' => 'cors',]);


Route::get('/api/arduino6/{I107}&{O96}&{O105}&{O107}&{O108}&{O109}&{O110}&{O111}&{I128}&{I129}&{O128}&{O129}&{O130}&{O131}&{O132}&{O133}&{O134}&{O135}&{O136}&{O137}&{O138}&{O139}&{O140}&{O141}&{O142}&{O143}', [
'as' => 'cambio.estado.arduino6',
    'uses' => 'errorscontroller@cambioestadoarduino6',
'middleware' => 'cors',]);

Route::get('/api/arduino7/{O32}&{O33}&{O40}&{O41}&{I98}&{I99}&{I100}&{I101}&{I102}&{I103}&{I104}&{I105}&{O97}&{O98}&{O99}&{O100}&{O101}&{O102}&{O106}&{I160}&{I161}&{I164}&{O160}&{O161}', [
'as' => 'cambio.estado.arduino7',
    'uses' => 'errorscontroller@cambioestadoarduino7',
'middleware' => 'cors',]);


Route::get('/api/arduino8/{I351}&{I352}&{I353}&{I354}&{I360}&{I326}&{I327}&{I328}&{I332}&{I333}&{I334}&{I335}&{I336}&{I361}&{I362}&{I363}&{I364}&{I365}&{I368}&{I369}&{I370}&{O337}&{I380}&{I381}&{I382}&{I383}&{I384}&{I387}&{I388}&{I398}&{I399}&{I400}&{I401}&{I402}&{I405}&{I406}&{I407}&{O341}&{I417}&{I418}&{I419}&{I420}&{I421}&{I424}&{I425}&{I426}', [
'as' => 'cambio.estado.arduino8',
    'uses' => 'errorscontroller@cambioestadoarduino8',
'middleware' => 'cors',]);


Route::get('/api/arduino9/{I338}&{I341}&{I345}&{I357}&{I358}&{I359}&{O333}&{O332}&{O335}&{O336}&{I372}&{I373}&{I374}&{I375}&{I378}&{I379}&{I389}&{I390}&{I391}&{I392}&{I393}&{I396}&{I397}&{O339}&{O340}&{I408}&{I409}&{I410}&{I411}&{I412}&{I415}&{I416}&{O342}&{I427}&{I428}&{I429}&{I430}&{I431}&{I434}&{I435}&{I436}', [
'as' => 'cambio.estado.arduino9',
    'uses' => 'errorscontroller@cambioestadoarduino9',
'middleware' => 'cors',]);

Route::get('/api/estados', [
'as' => 'mostrar.estados',
    'uses' => 'errorscontroller@mostrarestados',
    'middleware' => 'cors',
]);
