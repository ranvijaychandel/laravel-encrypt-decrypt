<?php

namespace App\Http\Controllers;

use App\Services\EncryptionService;
use Illuminate\Http\Request;

class EncryptionDecryptionController extends Controller
{
    protected $encryptionService;

    public function __construct(EncryptionService $encryptionService)
    {
        $this->encryptionService = $encryptionService;
    }

    public function encryptForm(){
        return view('encrypt_decrypt.encrypt');

    }
    public function decryptForm(){
        return view('encrypt_decrypt.decrypt');

    }

    public function encryptData(Request $request)
    {

        //encrypt email
        $encryptedEmail = $this->encryptionService->encrypt($request->email);
        $encryptedPassword = $this->encryptionService->encrypt($request->password);

        return response()->json(['email before encryption' => $request->email, 'encrypted' => $encryptedEmail,
                'password before encryption' => $request->password, 'encryptedPassword' => $encryptedPassword]);
    }

    public function decryptData(Request $request)
    {
        $decryptedEmail = $this->encryptionService->decrypt($request->email);
        $decryptedPassword = $this->encryptionService->decrypt($request->password);
        return response()->json(['email before decryption' => $request->email, 'decrypted_email' => $decryptedEmail,
                'password before decryption' => $request->password, 'decrypted_password' => $decryptedPassword]);
    }

    public function encryptDecryptBoth(Request $request){
        $data = 'I am Ranvijay fullstack developer!';
        //encrypt data and store in variable
        $encrypted = $this->encryptionService->encrypt($data);
        //decrypt data and store in variable
        $decrypted = $this->encryptionService->decrypt($encrypted);
        return response()->json(['original data' => $data, 'encrypted data' => $encrypted, 'decrypted data' => $decrypted]);

    }
}
