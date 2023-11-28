<?php 
namespace App\Traits;

use Illuminate\Http\Request;

trait FileUploadTrait {

    /**
     * @param Request $request
     * @return $this|false|string
     */
    public function verifyAndUpload(Request $request, $fieldname = 'image', $directory = 'uploads' ) {
        $md5Name = md5_file($request->file($fieldname)->getRealPath());

        if( $request->hasFile( $fieldname ) ) {

            if (!$request->file($fieldname)->isValid()) {

                flash('Invalid Image!')->error()->important();

                return redirect()->back()->withInput();

            }
            $newFileName = $md5Name.'.'.$request->file($fieldname)->getClientOriginalExtension();
            return $path = $request->file($fieldname)->move(public_path($directory),$newFileName);

        }

        return null;

    }

}