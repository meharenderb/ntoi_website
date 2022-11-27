<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\PerformerModel;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Conditional;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Worksheet\Column;

class PerformerController extends BaseController
{
    public $session;

    public function __construct()
    {
        $this->session = session();
        helper(["form","url"]);
        $this->performersModel = new PerformerModel;
        
    
    }
    public function index()
    {
        $data = [];
        $result = $this->performersModel->viewAllPerformers();

        if(isset($result['data']) && $result['data'] != ''){
            $data['data'] = $result['data'];
            $data['male'] = $result['male'];
            $data['female'] = $result['female'];
            $data['total'] = $result['total'];
        }else{
            $data['data'] = [];
            $data['male'] = '';
            $data['female'] = '';
            $data['total'] = '';
        }
        return view('admin_panel/view_performers',$data);
    }

    public function getUserDetailsById($id){

        $result = $this->performersModel->getUserDetailsById($id);
      
        if($result){
            return view("admin_panel/performer_page",['data' => $result]);
        }else{
            return redirect()->back();
        }
        // return view("admin_panel/performer_page");
    }

    public function receviedPayment($id){
        // echo "jhhhhkhkhk";exit;
        $session = \Config\Services::session();
        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $result = $this->performersModel->receviedPayment($id);
            
            if($result === 'VERIFIED'){
                $session->remove('pay_already');
                $session->setFlashdata('pay_verified', 'Payment Verified Successfully. An email confirmation sent to participant.');
                return redirect()->back();
            }else if($result === 'ALREADY'){
                $session->remove('pay_verified');
                $session->setFlashdata('pay_already', 'Payment already verified!');
                return redirect()->back();
            }else if($result === 'EMAIL_NOT_VERIFY'){
                $session->remove(['pay_already','pay_verified']);
                $session->setFlashdata('EMAIL_NOT_VERIFY', 'Participant email is not verified!');
                return redirect()->back();
            }else{
                $session->remove(['pay_already','pay_verified']);
               return redirect()->back();
            }
        // }else{
        //     $session->remove(['pay_already','pay_verified']);
        //     return redirect()->back();
        // }
    }

    public function manuallyEmailVerification($id){
        // echo "jhhhhkhkhk";exit;
        $session = \Config\Services::session();
        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $result = $this->performersModel->manuallyEmailVerification($id);
            
            if($result === 'VERIFIED'){
                $session->remove('pay_already');
                $session->setFlashdata('pay_verified', 'Email successfully verified.');
                return redirect()->back();
            }else if($result === 'ALREADY'){
                $session->remove('pay_verified');
                $session->setFlashdata('pay_already', 'Email is already verified.');
                return redirect()->back();
            }else if($result === 'ERROR'){
                $session->remove(['pay_already','pay_verified']);
                $session->setFlashdata('EMAIL_NOT_VERIFY', 'Sorry! Something went wrong. Try again.');
                return redirect()->back();
            }else{
                $session->remove(['pay_already','pay_verified']);
               return redirect()->back();
            }
        // }else{
        //     $session->remove(['pay_already','pay_verified']);
        //     return redirect()->back();
        // }
    }

    public function exportParticipateExcel(){
        // echo FCPATH;die;
        $result = $this->performersModel->exportParticipateData();
        $reader = IOFactory::createReader('Xlsx');
        $spreadsheet = $reader->load('public/template/ntoi_registration_template.xlsx');
        // $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $serialNumber = 1;
        $count = 2;
        $conditionalRow = 2;
        foreach($result as $k => $v){
            // insert a new row after current row (before current row + 1)
            $spreadsheet->getActiveSheet()->insertNewRowBefore($count+1,1);

            $sheet->setCellValue('A'.$count, $serialNumber)->getColumnDimension('A')->setAutoSize(true);
            $sheet->setCellValue('B'.$count, $v['name'])->getColumnDimension('B')->setAutoSize(true);
            $sheet->setCellValue('C'.$count, $v['email'])->getColumnDimension('C')->setAutoSize(true);
            $sheet->setCellValue('D'.$count, $v['father_name'])->getColumnDimension('D')->setAutoSize(true);
            $sheet->setCellValue('E'.$count, $v['mother_name'])->getColumnDimension('E')->setAutoSize(true);
            $sheet->setCellValue('F'.$count, $v['gender'])->getColumnDimension('F')->setAutoSize(true);
            $sheet->setCellValue('G'.$count, $v['age'])->getColumnDimension('G')->setAutoSize(true);
            $sheet->setCellValue('H'.$count, $v['dob'])->getColumnDimension('H')->setAutoSize(true);
            $sheet->setCellValue('I'.$count, $v['mobile_no'])->getColumnDimension('I')->setAutoSize(true);
            $sheet->setCellValue('J'.$count, $v['alt_mobile_no'])->getColumnDimension('J')->setAutoSize(true);
            $sheet->setCellValue('K'.$count, $v['category'])->getColumnDimension('K')->setAutoSize(true);
            $sheet->setCellValue('L'.$count, $v['qualification'])->getColumnDimension('L')->setAutoSize(true);
            $sheet->setCellValue('M'.$count, $v['state'])->getColumnDimension('M')->setAutoSize(true);
            $sheet->setCellValue('N'.$count, $v['city'])->getColumnDimension('N')->setAutoSize(true);
            $sheet->setCellValue('O'.$count, $v['pincode'])->getColumnDimension('O')->setAutoSize(true);
            $sheet->setCellValue('P'.$count, $v['weight'])->getColumnDimension('P')->setAutoSize(true);
            $sheet->setCellValue('Q'.$count, $v['height'])->getColumnDimension('Q')->setAutoSize(true);
            $sheet->setCellValue('R'.$count, $v['skills'])->getColumnDimension('R')->setAutoSize(true);
            $sheet->setCellValue('S'.$count, $v['facebook'])->getColumnDimension('S')->setAutoSize(true);
            $sheet->setCellValue('T'.$count, $v['instagram'])->getColumnDimension('T')->setAutoSize(true);
            $sheet->setCellValue('U'.$count, $v['address'])->getColumnDimension('U')->setAutoSize(true);
            $sheet->setCellValue('V'.$count, $v['status'])->getColumnDimension('V')->setAutoSize(true);
            $sheet->setCellValue('W'.$count, $v['pstatus'])->getColumnDimension('W')->setAutoSize(true);
            $sheet->setCellValue('X'.$count, date('F j, Y, g:i a', strtotime($v['timestamp'])))->getColumnDimension('X')->setAutoSize(true);
            $serialNumber++;
            $count++;
        }

        // Remove last two rows
        $spreadsheet->getActiveSheet()->removeRow($count, 2);
        
        $time = date('d-m-Y');
        
        $writer = new Xlsx($spreadsheet);
        // $filename = 'DOWNLOAD_DATA_FILE.xlsx';
        $filename = "NTOI_Participant_Data_$time.xlsx"; // set filename for excel file to be exported
            $tempDir = FILE_DOWNLOAD_PATH;
            $downloadpath = FILE_DOWNLOAD_PATH;
            if (!is_dir($tempDir)) {
                mkdir($tempDir, 0777, true);
            }
            $filePath = $tempDir . '/' . $filename;
            ob_end_clean();
            $writer->save($filePath);
            return $this->response->download($filePath, null);
            // echo json_encode(array('file' => $filedownload, 'message' => 'file downloaded successfully','status'=>'TRUE'));
    }
}
