<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Auth;
use \App\Order;
use \App\Event;

use DB;
use App\Http\Controllers\Controller;


class controllerAdmin extends Controller
{
    //
    public function order()
    {
        // $event=Event::with('order')->get();
        $event = DB::table('order')
                    ->join('event','order.id_event','=','event.id')
                    ->where('id_user',Auth::user()->id)
                    ->get();

        // return($event);

        return view('admin/index',['event'=>$event]);
    }
    public function event()
    {
        $event=Event::get();
        // return($order);

        return view('admin/event',['event'=>$event]);
    }


    public function input_event()
    {
   
                return view('admin/input_event');
    }
    public function delete_event($id)
    {
   
                $event = Event::find($id);
                $event->delete();
                session()->flash('status', 'Event berhasil di hapus');
        
                return redirect()->back();
    }

    public function detail_event($id)
    {
   
                $event = Event::where('id',$id)->get();
              
                // return($event);
                return view('admin/detail_event',['event'=>$event]);
    }

    public function post_event(Request $request)
    {
        $file = $request->file('thumbnail'); 
        $name = md5_file($file->getRealPath());
        $guessExtension = $file->guessExtension();
        $file->move('assets/assets/img/thumbnail/',$name .'.'. $guessExtension);
    
    
            $event = new Event;
            $event->id_user = Auth::user()->id;
            $event->judul = $request->judul;
            $event->deskripsi = $request->deskripsi;
            $event->lokasi = $request->lokasi;
            $event->thumbnail = 'assets/assets/img/thumbnail/'.$name.'.'. $guessExtension;
            $event->harga = $request->harga;
            $event->jadwal = $request->jadwal;
            $event->start_register = $request->start_register;
            $event->end_register = $request->end_register;
            $event->save();
            session()->flash('status', 'Event berhasil ditambah');
        
     
                return redirect()->back();
    }

    public function edit_event($id)
    {
   
                $event = Event::where('id',$id)->get();
              
                // return($event);
                return view('admin/edit_event',['event'=>$event]);
    }


    public function update_event($id,Request $request)
    {
   
        $file = $request->file('thumbnail'); 
    
    
            // $event = new Event;

            $event = Event::find($id);
            $event->id_user = Auth::user()->id;
            $event->judul = $request->judul;
            $event->deskripsi = $request->deskripsi;
            $event->lokasi = $request->lokasi;
            if($file){      
                $name = md5_file($file->getRealPath());
                $guessExtension = $file->guessExtension();
                $file->move('assets/assets/img/thumbnail/',$name .'.'. $guessExtension);
            
                $event->thumbnail = 'assets/assets/img/thumbnail/'.$name.'.'. $guessExtension;
            }
        $event->harga = $request->harga;
            $event->jadwal = $request->jadwal;
            $event->start_register = $request->start_register;
            $event->end_register = $request->end_register;
            $event->save();
            session()->flash('status', 'Event berhasil ditambah');
                
                // return($event);

        if($event->save()){
            session()->flash('status', 'Data berhasil di update');
            }
            else{
                session()->flash('status', 'Data gagal di update');
                }

                
        return redirect()->back();
    }

}
