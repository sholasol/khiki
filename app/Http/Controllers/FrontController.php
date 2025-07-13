<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Log;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propertys = Property::latest()->take(8)->get();    
        return view('front.index', compact('propertys'));
    }

    public function about()
    {
        return view('front.about');
    }
    public function properties()
    {
        $properties = Property::latest()->paginate(9);
        return view('front.properties', compact('properties'));
    }
    public function contact()
    {
        return view('front.contact');
    }
    
    public function services()
    {
        return view('front.services');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show($id)
    {
        $property = Property::findOrFail($id);
        return view('front.property', compact('property'));
    }

    public function store(Request $request)
    {
        // Validate the request data
       $data =  $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'phone' => 'required|string',
            'service' => 'nullable|string',
            'property_type' => 'nullable|string',
        ]);

        try {
            // Create a new PHPMailer instance
            $mail = new PHPMailer(true);
            
            // Server settings for cPanel (SMTP)
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST', 'localhost'); // Your cPanel mail server (often localhost)
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME', 'info@khikiproperty.com'); // Your cPanel email
            $mail->Password = env('MAIL_PASSWORD', ''); // Your cPanel email password
            $mail->SMTPSecure = env('MAIL_ENCRYPTION', 'tls');
            $mail->Port = env('MAIL_PORT', 587);
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            
            // Recipients
            $mail->setFrom($data['email'], 'Bayile Contact');
            $mail->addAddress('info@khikiproperty.com', 'Khiki Property & Projects Management'); // Add your email address
            $mail->addReplyTo($data['email'], $data['name']);
            
            // Content
            $mail->isHTML(true);
            $mail->Subject = "New Contact Request: {$data['service']}";
            
            // Email body
            $mail->Body = "
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Service Inquiry</title>
            </head>
            <body style='margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; background-color: #f4f4f4; color: #333333;'>
                <table role='presentation' width='100%' cellspacing='0' cellpadding='0' style='max-width: 600px; margin: 20px auto; background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);'>
                    <!-- Header -->
                    <tr>
                        <td style='background-color: #2c3e50; padding: 20px; text-align: center; border-top-left-radius: 8px; border-top-right-radius: 8px;'>
                            <h1 style='color: #ffffff; margin: 0; font-size: 24px;'>Service Inquiry</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style='padding: 30px;'>
                            <p style='margin: 0 0 10px; font-size: 16px; line-height: 1.5;'>A new contact inquiry submission has been received. Below are the details:</p>
                            <table role='presentation' width='100%' cellspacing='0' cellpadding='0'>
                                <tr>
                                    <td style='padding: 10px 0; font-size: 16px; border-bottom: 1px solid #eeeeee;'>
                                        <strong style='color: #2c3e50;'>Name:</strong> {$data['name']}
                                    </td>
                                </tr>
                                <tr>
                                    <td style='padding: 10px 0; font-size: 16px; border-bottom: 1px solid #eeeeee;'>
                                        <strong style='color: #2c3e50;'>Email:</strong> <a href='mailto:{$data['email']}' style='color: #3498db; text-decoration: none;'>{$data['email']}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style='padding: 10px 0; font-size: 16px; border-bottom: 1px solid #eeeeee;'>
                                        <strong style='color: #2c3e50;'>Phone:</strong> <a href='mailto:{$data['phone']}' style='color: #3498db; text-decoration: none;'>{$data['email']}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style='padding: 10px 0; font-size: 16px; border-bottom: 1px solid #eeeeee;'>
                                        <strong style='color: #2c3e50;'>Subject:</strong> {$data['service']}
                                    </td>
                                </tr>
                                <tr>
                                    <td style='padding: 10px 0; font-size: 16px;'>
                                        <strong style='color: #2c3e50;'>Message:</strong> " . nl2br(htmlspecialchars($data['message'])) . "
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style='background-color: #f4f4f4; padding: 15px; text-align: center; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;'>
                            <p style='margin: 0; font-size: 14px; color: #777777;'>Sent from Bayile Contact Form</p>
                            <p style='margin: 5px 0 0; font-size: 14px; color: #777777;'>© " . date('Y') . " Khiki Property & Projects Management. All rights reserved.</p>
                        </td>
                    </tr>
                </table>
            </body>
            </html>
            ";
            
            // Plain text version for non-HTML mail clients
            $mail->AltBody = "Contact Form Submission\n\nName: {$data['name']}\nEmail: {$data['email']}\nSubject: {$data['service']}\nMessage: {$data['message']}";
            
            // Send the email
            $mail->send();
            noty()
            ->layout('topCenter')
            ->info('Thank you for contacting Khiki Property & Projects Management.');
            return redirect()->route('front.contact')->with('success', 'Thank you for contacting Khiki Property & Projects Management. We will get in touch with you.');
            
        } catch (Exception $e) {
            Log::error('Mail Exception: ' . $e->getMessage());
            return redirect()->route('front.contact')->with('error', 'There was an issue sending your request. Please try again later.');
        }
        
        return redirect()->route('front.contact')->with('success', 'Your message has been sent successfully!');
    }
}
