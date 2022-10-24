<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;
use App\Models\User;
use App\Models\Product;
use Session;
use Hash;


class ProductController extends Controller
{
    public function registerUser(Request $req){
        $response = Http::post('http://backend.test/api/register', 
        ['name' => $req->name, 'email' => $req->email, 'password' => $req->password, 'password_confirmation' => $req->password]);

        if($response['status']==0)
      {  
        return redirect('/registration') ->with('danger', 'Bilgileri doğru girdiğinizden emin olduktan sonra tekrar deneyiniz!!'); 
      }else{
      return redirect('/login') ->with('success', 'Kullanıcı başarılı bir şekilde oluşturuldu. Şimdi giriş yapabilirsiniz.'); 
        }   
    }
         public function loginUser(Request $req)
         {
         $response = Http::post('http://backend.test/api/login', ['email' => $req->email, 'password' => $req->password]);
         if($response['status']==0)
         {  
           return redirect('/login') ->with('danger', ' Kullanıcı bulunamadı !!! lütfen bilgileri doğru girdiğinizden emin olduktan sonra tekrar deneyiniz!!  '); 
         }
         else
         session(['token'=>$response[0]['token'],]);
         return redirect('/dashboard')->with('success', 'Başarılı bir sekilde giriş yapıldı.');

         }
public function getAllPost() 
{
    $post = Http::withToken (session('token'))->get("http://backend.test/api/products");
    return $post->json();
}

public function getPostById($id)
{
    $post = Http::get('http://backend.test/api/products/'.$id);
    return $post->json();
}

public function addPost()
{
    $post = Http::post('http://backend.test/api/products/',[
        'userId' => 1,
        'name' => 'cebrail',
        'slug' => 'mikail',
        'description' => 'israfil',
        'price' => '359.99',
    ]);
    return $post->json();
}
public function updatePost($id)
{
    $response = Http::post('http://backend.test/api/update-products/'.$id,[
        'name' => 'a Title',
        'slug'  => 'Updated Description',
        'description'  => 'Updated Description',
        'price'  => '355.99'
    ]);
    return($response);

}
public function dashboard()
    {
        // if(Session::has('loginId')){
        // $datas = User::all();
        // }
        
        $data = $this->getAllPost();
        return view('dashboard', ['products' => $data]);
    //    return view('dashboard', compact('datas'));
    }

public function deletePost($id)
{
    $response = Http::withToken (session('token'))->delete('http://backend.test/api/delete-products/'.$id);
    return redirect('/dashboard') ->with('success', 'Ürün başarılı bir şekilde silindi'); 


}

public function logout($id)
{
    $response = Http::withToken (session('token'))->post('http://backend.test/api/logout'.$id);

        return redirect('login');
    
}
public function createProduct(Request $req)
{
    $response = Http::withToken (session('token'))->post('http://backend.test/api/create-products',
    [ 'name' => $req->name, 'slug' => $req->slug, 'description' => $req->description ,'price' => $req->price]);

    if( $response['status']==0){

    return redirect('/create') ->with('danger', 'Ürün oluşturulamadı lütfen girdiğiniz bilgileri tekrar kontrol edip doldurunuz.'); 
    }

    return redirect('/dashboard') ->with('success', 'Ürün başarılı bir şekilde oluşturuldu.'); 


}




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->getAllPost();
        return view('dashboard', ['users' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request,$id)
    // {
       
    //     $product = Product::find($id);
    //     $product->name = $request->name;
    //     $product->slug = $request->slug;
    //     $product->description = $request->description;
    //     $product->price = $request->price;
    //     $product->update();
    //     return redirect()->back()->with('success', 'Company Has Been updated successfully');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    public function ApiEdit(Request $req)
    {
        $response = Http::withToken (session('token'))->post('http://backend.test/api/update-products/'.$req->id,
        [ 'name' => $req->name, 'slug' => $req->slug, 'description' => $req->description ,'price' => $req->price]
    );
     if( $response['status']==0){

        return redirect('/dashboard ')   ->with('danger', 'Ürün düzenlenemedi lütfen girdiğiniz bilgileri tekrar kontrol edip doldurunuz '); 
        }
        
        return redirect('/dashboard')   ->with('success', 'Ürün başarılı bir şekilde düzenlendi.');
      }
      
  
  public function edit($id) 
  {
    $response = Http::withToken (session('token'))->get('http://backend.test/api/products/search/'.$id);
    $response = $response->json();
    
     return view('edit', ['product'=>$response]); 
  }
//   public function ApiDelete($id)
//   {
     
//       $response = Http::delete('http://backend.test/api/delete-post/'.$id);
//       return $response->json();  

//         }


}
