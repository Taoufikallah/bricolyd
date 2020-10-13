@extends('layouts.profile')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="#" class="list-group-item list-group-item-action ">Dashboard</a>
              <a href="adverts" class="list-group-item list-group-item-action active">Adverts</a>
              <a href="#" class="list-group-item list-group-item-action">Media</a>
              <a href="#" class="list-group-item list-group-item-action">Category</a>
              <a href="#" class="list-group-item list-group-item-action">Comments</a>
              <a href="#" class="list-group-item list-group-item-action">Settings</a>
              
              
            </div> 
		</div>
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Your Advert</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
                           {!! Form::open(['action' => 'AdvertsController@store' , 'method' => 'ADVERT']) !!}
                            <div class="form-group">
                                {{Form::label('description' , 'Description')}}
                                {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder'=> 'Description'])}}
                            </div>
                            <div class="form-group">
								{{ Form::label('category_id', 'category') }}
							   
								{{ Form::select ('category_id', $categories, null , ['id' =>'select','class' => 'form-control']) }}
							</div>
							<div class="form-group">
								{{ Form::label('city', 'City') }}
								{{ Form::select ('city', ['Agadir' =>'Agadir',
															'Al hoceima'=>'Al hoceima',
															'Aoussered'=>'Aoussered',
															'Assilah'=>'Assilah',
															'Azrou'=>'Azrou',
															'Ben ahmed'=>'Ben ahmed',
															'Beni mellal'=>'Beni mellal',
															'Benslimane'=>'Benslimane',
															'Berkane'=>'Berkane',
															'Berrechid'=>'Berrechid',
															'Boujdour'=>'Boujdour',
															'Bouskoura'=>'Bouskoura',
															'Bouznika'=>'Bouznika',
															'Casablanca'=>'Casablanca',
															'Chafchaouen'=>'Chafchaouen',
															'Dakhla'=>'Dakhla',
															'El hajeb'=>'El hajeb',
															'El jadida'=>'El jadida',
															'Errachidia'=>'Errachidia',
															'Essaouira'=>'Essaouira',
															'Essmara'=>'Essmara',
															'Fès'=>'Fès',
															'Fkih ben sal'=> 'Fkih ben sal',
															'Guelmim'=>'Guelmim',
															'Guercif'=>'Guercif',
															'Ifrane'=>'Ifrane',
															'Kénitra'=>'Kénitra',
															'Kabila'=>'Kabila',
															'Khemisset'=>'Khemisset',
															'Khenifra'=>'Khenifra',
															'Khouribga'=>'Khouribga',
															'Ksar el kebir'=>'Ksar el kebir',
															'Laayoune'=>'Laayoune',
															'Larache'=>'Larache',
															'Marrakech'=>'Marrakech',
															'Martil'=>'Martil',
															'Meknès'=>'Meknès',
															'Melilia'=>'Melilia',
															'Midelt'=>'Midelt',
															'Mohammedia'=>'Mohammedia',
															'Nador'=>'Nador',
															'Oualidia'=>'Oualidia',
															'Ouarzazate'=>'Ouarzazate',
															'Ouazzane'=>'Ouazzane',
															'Oujda'=>'Oujda',
															'Rabat'=>'Rabat',
															'Safi'=>'Safi',
															'Saidia'=>'Saidia',
															'Salé'=>'Salé',
															'Sebta'=>'Sebta',
															'Sefrou'=>'Sefrou',



															'Settat'=>'Settat',

														/* 	'Sidi-bennour'=>'Sidi bennour',

															'Sidi-ifni'=>'Sidi ifni',

															'Sidi-kacem'=>'Sidi kacem',

															'Sidi-rahal'=>'Sidi rahal',

															'Sidi-slimane'='>Sidi slimane', */

															'Tamensourte'=>'Tamensourte',

															'Tamesna'=>'Tamesna',

															'Tanger'=>'Tanger',

															'Tantan'=>'Tantan',

															'Tarfaya'=>'Tarfaya',
															
															'Taroudant'=>'Taroudant',


															'Taza'=>'Taza',
															'Temara'=>'Temara',
															'Tetouan'=>'Tetouan',
															'Tifelt'=>'Tifelt',
															'Tinghir'=>'Tinghir',
															'Tiznit'=>'Tiznit',
															'Youssoufia'=>'Youssoufia',
															'Zagora'=>'Zagora',
														  
														],
														   1 , ['id' =>'color','class' => 'form-control']) 
														   }}
							</div>
                            {{Form::submit('Submit' , ['class'=>'btn btn-primary'])}}
                           {!! Form::close() !!}
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>
@endsection
