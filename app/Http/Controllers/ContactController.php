<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Session;

class ContactController extends Controller
{
    public function index(){
            return view('contact');
        }

        public function contactForm(Request $request){
        // Validate the form data

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        // Send email using PHPMailer
        try {
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = env('CONTACT_HOST'); // Update with your SMTP host
            $mail->SMTPAuth = true;
            $mail->Username = env('CONTACT_USERNAME');
            $mail->Password = env('CONTACT_PASSWORD'); // Update with your SendGrid API key
            $mail->SMTPSecure = env('CONTACT_ENCRYPTION');
            $mail->Port = env('CONTACT_PORT');

            $mail->setFrom(env('CONTACT_FROM_ADDRESS'), env('CONTACT_FROM_NAME'));
            $mail->addAddress(env('CONTACT_TO_ADDRESS'), env('CONTACT_TO_NAME'));

            $mail->Subject = 'Enquiry from Cafmotel Website Contact Us.';
            $mail->Body = 'Name: ' . $validatedData['name'] . "\n"
                          . 'Email: ' . $validatedData['email'] . "\n"
                          . 'Phone: ' . $validatedData['phone'] . "\n"
                          . 'Message: ' . $validatedData['message'];

            $mail->send();

            return redirect()->back()->with('success', 'Thank you for contacting us. One of our experts will be in touch shortly.');
        } catch (Exception $e) {
            // Log the error or handle it as needed
            return redirect()->back()->with('error', 'An error occurred while sending the email. Please try again later.');
        }
    }
        }

