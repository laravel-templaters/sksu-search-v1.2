<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelatedDocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         DB::table('related_docs')->insert([
            'd_v_type_sorter_id'=> 1,
            ]);
            DB::table('related_document_lists')->insert([
            'related_docs_id'=> 1,
            ]);
                DB::table('related_document_list_entries')->insert([
                'related_document_list_id'=> 1,
                'related_document_list_entry'=> 'Default Doc',
                ]);


        DB::table('related_docs')->insert([
        'd_v_type_sorter_id'=> 10,]);
            DB::table('related_document_lists')->insert([
            'related_docs_id'=> 2,
            ]);
                DB::table('related_document_list_entries')->insert([
                'related_document_list_id'=> 2,
                'related_document_list_entry'=> 'Statement of Account/Bill (for pre-audit purposes)',
                ]);
                DB::table('related_document_list_entries')->insert([
                'related_document_list_id'=> 2,
                'related_document_list_entry'=> 'Invoice/Official Receipt or machine validated statement of account/bill (for post-audit purposes)',
                ]);
                DB::table('related_document_list_entries')->insert([
                'related_document_list_id'=> 2,
                'related_document_list_entry'=> 'Certification by Agency Head or his authorized representatives that all National Direct Dial (NDD), National Operator Assisted Calls and International Operator Assisted Calls are official calls*For Telephone/Communication Services Only',
                ]);

                DB::table('related_docs')->insert([
                    'd_v_type_sorter_id'=> 11,]);
                        DB::table('related_document_lists')->insert([
                        'related_docs_id'=> 3,
                        ]);
                            DB::table('related_document_list_entries')->insert([
                            'related_document_list_id'=> 3,
                            'related_document_list_entry'=> 'Letter request from contractors for advance/progress/final payment or for substitution in case of release of retention money',
                            ]);
                            DB::table('related_document_list_entries')->insert([
                            'related_document_list_id'=> 3,
                            'related_document_list_entry'=> 'Infrastructure'.
                            "\n".'<Common to progress/final payments:'.
                            "\n".'>○    Statement of Work Accomplished/Progress Billing'.
                            "\n".'>○    Inspection Report by the Agency\'s Authorized Engineer'.
                            "\n".'>○    Results of Test Analysis, if applicable'.
                            "\n".'>○    Statement of Time Elapsed'.
                            "\n".'>○    Monthly Certificate of Payment'.
                            "\n".'>○    Contractor\'s Affidavit on payment of laborers and materials'.
                            "\n".'>○    Pictures, before, during and after construction of items of work especially the embedded items'.
                            "\n".'>○    Photocopy of vouchers of all previous payments'.
                            "\n".'>○    Certificate of completion',
                            ]);
                            DB::table('related_document_list_entries')->insert([
                            'related_document_list_id'=> 3,
                            'related_document_list_entry'=> 'Direct Contracting'.
                            "\n".'<Specific requirements to be submitted within (5) working days from the execution of the contract as required under COA Circular No. 2009-001 dated February 12, 2009:'.
                            "\n".'>○    Copy of letter to selected manufacturer/supplier/distributor to submit a price quotation and conditions of sale'.
                            "\n".'>○    Certificate of Exclusive Distributorship issued by the principal under oath and authenticated by the embassy/consulate nearest the place of the principal, in case of foreign supplier'.
                            "\n".'>○    Certification from the agency authorized official that there are no sub-dealers selling at lower prices and for which no suitable substitute can be obtained at more advantageous terms to the government'.
                            "\n".'>○    Certification of the BAC in case of procurement of critical plant components and/or to maintain certain standards',
                            ]);
                            DB::table('related_document_list_entries')->insert([
                                'related_document_list_id'=> 3,
                                'related_document_list_entry'=> 'Study/survey done to determine that there are no sub-dealers selling at lower prices and for which no suitable substitute can be obtained at more advantageous terms of government',
                                ]);
                            DB::table('related_document_list_entries')->insert([
                                'related_document_list_id'=> 3,
                                'related_document_list_entry'=> 'Such other documents peculiar to the contract and/or to the mode of procurement and considered necessary in the auditorial review and in technical evaluation thereof',
                                ]);
                            DB::table('related_document_list_entries')->insert([
                            'related_document_list_id'=> 3,
                            'related_document_list_entry'=> 'Negotiated Procurement'.
                            "\n".'<Specific requirements to be submitted within (5) working days from the execution of the contract as required under COA Circular No. 2009-001 dated February 12, 2009:'.
                            "\n".'>    In cases of two failed biddings, emergency cases, take-over of contract and small value procurement'.
                            "\n".'   -  Price quotation/bids/final offers from at least be three invited suppliers'.
                            "\n".'   -  Abstract of submitted Price Quotation'.
                            "\n".'   -  BAC Resolution recommending award of contract to Lowest Calculated Responsive Bid(LCRB)'.
                            "\n".'<Additional requirements for each case:'.
                            "\n".'>    In cases of two failed biddings:'.
                            "\n".'   -  Agency\'s offer for negotiations with selected suppliers, contractors or consultants'.
                            "\n".'   -  Certification of BAC on the failure of competetive bidding for the second time'.
                            "\n".'   -  Evidence of invitation of observers in all stages of the negotiation'.
                            "\n".'   -  Eligibility documents in case of infrastructure projects'.
                            "\n".'>    In cases of emergency cases:'.
                            "\n".'   -  Justification as the necessity'.
                            "\n".'>    In case of take-over contracts'.
                            "\n".'   -  Copy of terminated contract'.
                            "\n".'   -  Reasons for the termination'.
                            "\n".'   -  Negotiation documents with the second lowest calculated bidder or the third lowest calculated bidder in case of failure of negotiation with the second lowest bidder. If negotiation still fails, invitation to at least three eligible contractors'.
                            "\n".'   -  Approval by the Head of the Procuring Agency to negotiate contracts for projects under exceptional cases'.
                            "\n".'>    In case of small value procurement'.
                            "\n".'   -  Letter/invitation to submit proposals'.
                            "\n".'>    For adjacent or contiguous projects'.
                            "\n".'   -  Original contract and any document indicating that the same resulted from competetive bidding'.
                            "\n".'   -  Scope of work which should be related or similar to the scope of work of the original contract'.
                            "\n".'   -  Latest Accomplishment Report of the original contract showing that there was no negative slippage/delay',
                            ]);
                            
                            DB::table('related_docs')->insert([
                                'd_v_type_sorter_id'=> 8,]);
                                    DB::table('related_document_lists')->insert([
                                    'related_docs_id'=> 4,
                                    ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 4,
                                        'related_document_list_entry'=> 'Certified true copy of duly approved Appointment',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 4,
                                        'related_document_list_entry'=> 'Assignment Order, if applicable',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 4,
                                        'related_document_list_entry'=> 'Certified true copy of Oath of Office',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 4,
                                            'related_document_list_entry'=> 'Certificate of Assumption',
                                            ]);  
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 4,
                                        'related_document_list_entry'=> 'Statement of Assets, Liabilities and Net Worth',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 4,
                                            'related_document_list_entry'=> 'Approved DTR',
                                        ]);  
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 4,
                                        'related_document_list_entry'=> 'Bureu of Internal Revenue (BIR) withholding certificate (Forms 1902 and 2305)',
                                        ]);                                    
                                        DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 4,
                                            'related_document_list_entry'=> 'Payroll Information on New Employee (PINE) (for agencies with computerized payroll systems)',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 4,
                                            'related_document_list_entry'=> 'Authority from the claimant and identification documents, if claimed by person other than the payee',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 4,
                                            'related_document_list_entry'=> 'Clearace from money, property and legal accountabilities from the previous office',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 4,
                                            'related_document_list_entry'=> 'Certified true copy of pre-audited disbursement voucher of last salary from previous agency and/or Certification by the Chief Accountant of last salary received from previous office duly verified by the assigned auditor thereat',
                                        ]); 
                                        DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 4,
                                            'related_document_list_entry'=> 'BIR Form 2316 (Certificate of Compensation Payment/Tax Withheld)',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 4,
                                            'related_document_list_entry'=> 'Certificate of Available Leave Credits',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 4,
                                            'related_document_list_entry'=> 'Service Record',
                                        ]);
                                        
                                        
                            DB::table('related_docs')->insert([
                                    'd_v_type_sorter_id'=> 9,]);
                                        DB::table('related_document_lists')->insert([
                                        'related_docs_id'=> 5,
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 5,
                                        'related_document_list_entry'=> 'Certified true copy of duly approved Appointment',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 5,
                                        'related_document_list_entry'=> 'Assignment Order, if applicable',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 5,
                                        'related_document_list_entry'=> 'Certified true copy of Oath of Office',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 5,
                                        'related_document_list_entry'=> 'Certificate of Assumption',
                                            ]);  
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 5,
                                        'related_document_list_entry'=> 'Statement of Assets, Liabilities and Net Worth',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 5,
                                        'related_document_list_entry'=> 'Approved DTR',
                                        ]);  
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 5,
                                        'related_document_list_entry'=> 'Bureu of Internal Revenue (BIR) withholding certificate (Forms 1902 and 2305)',
                                        ]);                                    
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 5,
                                        'related_document_list_entry'=> 'Payroll Information on New Employee (PINE) (for agencies with computerized payroll systems)',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 5,
                                        'related_document_list_entry'=> 'Authority from the claimant and identification documents, if claimed by person other than the payee',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 5,
                                        'related_document_list_entry'=> 'Clearace from money, property and legal accountabilities from the previous office',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 5,
                                        'related_document_list_entry'=> 'Certified true copy of pre-audited disbursement voucher of last salary from previous agency and/or Certification by the Chief Accountant of last salary received from previous office duly verified by the assigned auditor thereat',
                                        ]); 
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 5,
                                        'related_document_list_entry'=> 'BIR Form 2316 (Certificate of Compensation Payment/Tax Withheld)',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 5,
                                        'related_document_list_entry'=> 'Certificate of Available Leave Credits',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 5,
                                        'related_document_list_entry'=> 'Service Record',
                                        ]);
                                                    
                            DB::table('related_docs')->insert([
                                    'd_v_type_sorter_id'=> 12,]);
                                        DB::table('related_document_lists')->insert([
                                        'related_docs_id'=> 6,
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 6,
                                        'related_document_list_entry'=> 'Teaching Personnel [Department of Education (DepEd), TESDA, SUCs and other educational institutions]<Certification from the Registrar/Dean of College that the load is in excess of the regular load or outside the regular office hours',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 6,
                                        'related_document_list_entry'=> 'Teaching Personnel [Department of Education (DepEd), TESDA, SUCs and other educational institutions]<Schedule of classes indicating the designated teaching personnel',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 6,
                                        'related_document_list_entry'=> 'Teaching Personnel [Department of Education (DepEd), TESDA, SUCs and other educational institutions]<Certificate of actual conduct of classes and/or Accomplishment Report',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 6,
                                        'related_document_list_entry'=> 'Teaching Personnel [Department of Education (DepEd), TESDA, SUCs and other educational institutions]<Approved DTR/Service Report',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 6,
                                        'related_document_list_entry'=> 'Overtime Pay*Overtime authority stating the necessity and urgency of the work to be done, and the duration of overtime work',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 6,
                                        'related_document_list_entry'=> 'Overtime work program',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 6,
                                        'related_document_list_entry'=> 'Quantified Overtime accomplishment duly signed by the employee and supervisor',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 6,
                                        'related_document_list_entry'=> 'Certificate of service or duly approved DTR',
                                        ]);
                                        
                            DB::table('related_docs')->insert([
                                    'd_v_type_sorter_id'=> 13,]);
                                        DB::table('related_document_lists')->insert([
                                        'related_docs_id'=> 7,
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 7,
                                        'related_document_list_entry'=> 'Teaching Personnel [Department of Education (DepEd), TESDA, SUCs and other educational institutions]<Certification from the Registrar/Dean of College that the load is in excess of the regular laod or outside the regular office hours',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 7,
                                        'related_document_list_entry'=> 'Teaching Personnel [Department of Education (DepEd), TESDA, SUCs and other educational institutions]<Schedule of classes indicating the designated teaching personnel',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 7,
                                        'related_document_list_entry'=> 'Teaching Personnel [Department of Education (DepEd), TESDA, SUCs and other educational institutions]<Certificate of actual conduct of classes and/or Accomplishment Report',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 7,
                                        'related_document_list_entry'=> 'Teaching Personnel [Department of Education (DepEd), TESDA, SUCs and other educational institutions]<Approved DTR/Service Report',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 7,
                                        'related_document_list_entry'=> 'Overtime Pay<Overtime authority stating the necessity and urgency of the work to be done, and the duration of overtime work',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 7,
                                        'related_document_list_entry'=> 'Overtime work program',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 7,
                                        'related_document_list_entry'=> 'Quantified Overtime accomplishment duly signed by the employee and supervisor',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 7,
                                        'related_document_list_entry'=> 'Certificate of service or duly approved DTR',
                                        ]);
                                        
                            DB::table('related_docs')->insert([
                                    'd_v_type_sorter_id'=> 14,]);
                                        DB::table('related_document_lists')->insert([
                                        'related_docs_id'=> 8,
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 8,
                                        'related_document_list_entry'=> 'Certified true copy of duly approved Appointment',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 8,
                                        'related_document_list_entry'=> 'Assignment Order, if applicable',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 8,
                                        'related_document_list_entry'=> 'Certified true copy of Oath of Office',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 8,
                                        'related_document_list_entry'=> 'Certificate of Assumption',
                                            ]);  
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 8,
                                        'related_document_list_entry'=> 'Statement of Assets, Liabilities and Net Worth',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 8,
                                        'related_document_list_entry'=> 'Approved DTR',
                                        ]);  
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 8,
                                        'related_document_list_entry'=> 'Bureu of Internal Revenue (BIR) withholding certificate (Forms 1902 and 2305)',
                                        ]);                                    
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 8,
                                        'related_document_list_entry'=> 'Payroll Information on New Employee (PINE) (for agencies with computerized payroll systems)',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 8,
                                        'related_document_list_entry'=> 'Authority from the claimant and identification documents, if claimed by person other than the payee',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 8,
                                        'related_document_list_entry'=> 'Clearace from money, property and legal accountabilities from the previous office',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 8,
                                        'related_document_list_entry'=> 'Certified true copy of pre-audited disbursement voucher of last salary from previous agency and/or Certification by the Chief Accountant of last salary received from previous office duly verified by the assigned auditor thereat',
                                        ]); 
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 8,
                                        'related_document_list_entry'=> 'BIR Form 2316 (Certificate of Compensation Payment/Tax Withheld)',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 8,
                                        'related_document_list_entry'=> 'Certificate of Available Leave Credits',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 8,
                                        'related_document_list_entry'=> 'Service Record',
                                        ]);
                                        
                            DB::table('related_docs')->insert([
                                    'd_v_type_sorter_id'=> 15,]);
                                        DB::table('related_document_lists')->insert([
                                        'related_docs_id'=> 9,
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 9,
                                        'related_document_list_entry'=> 'Salary Payroll',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 9,
                                        'related_document_list_entry'=> 'Payroll Register (hard and soft copy)',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 9,
                                        'related_document_list_entry'=> 'Letter to the Bank to credit employees\' account of their salaries or other claims',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 9,
                                        'related_document_list_entry'=> 'Validated deposit slips',
                                        ]);
                                        
                            DB::table('related_docs')->insert([
                                    'd_v_type_sorter_id'=> 16,]);
                                        DB::table('related_document_lists')->insert([
                                        'related_docs_id'=> 10,
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 10,
                                        'related_document_list_entry'=> 'Office Order',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 10,
                                        'related_document_list_entry'=> 'Coordinator\'s report on lecturer\'s schedule',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 10,
                                        'related_document_list_entry'=> 'Course Syllabus/Program of Lectures',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 10,
                                        'related_document_list_entry'=> 'Duly approved DTR in case of claims by the coordinator and facilitators',
                                        ]);
                                        
                            DB::table('related_docs')->insert([
                                    'd_v_type_sorter_id'=> 17,]);
                                        DB::table('related_document_lists')->insert([
                                        'related_docs_id'=> 11,
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 11,
                                        'related_document_list_entry'=> 'Office Order',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 11,
                                        'related_document_list_entry'=> 'Coordinator\'s report on lecturer\'s schedule',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 11,
                                        'related_document_list_entry'=> 'Course Syllabus/Program of Lectures',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 11,
                                        'related_document_list_entry'=> 'Duly approved DTR in case of claims by the coordinator and facilitators',
                                        ]);
                                        
                            DB::table('related_docs')->insert([
                                    'd_v_type_sorter_id'=> 18,]);
                                        DB::table('related_document_lists')->insert([
                                        'related_docs_id'=> 12,
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 12,
                                        'related_document_list_entry'=> 'Invoices/receipts for GOCCs/GFIs and LGUs',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 12,
                                        'related_document_list_entry'=> 'Receipts and/or other documents evidencing disbursement, if there are available, or in lieu thereof, certification executed by the official concerned that the expense sought to be reimbursed have been incurred for any of the purposes contemplated under the provisions of the GAA in relation to or by reasons of his position, in case of NGAs',
                                        ]);
                                        DB::table('related_document_list_entries')->insert([
                                        'related_document_list_id'=> 12,
                                        'related_document_list_entry'=> 'Other supporting documents as are necessary depending on the nature of expense charged',
                                        ]);
                                        
                            DB::table('related_docs')->insert([
                                    'd_v_type_sorter_id'=> 19,]);
                                        DB::table('related_document_lists')->insert([
                                        'related_docs_id'=> 13,
                                        ]);
                                            DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 13,
                                            'related_document_list_entry'=> 'Invoices/receipts for GOCCs/GFIs and LGUs',
                                            ]);
                                            DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 13,
                                            'related_document_list_entry'=> 'Receipts and/or other documents evidencing disbursement, if there are available, or in lieu thereof, certification executed by the official concerned that the expense sought to be reimbursed have been incurred for any of the purposes contemplated under the provisions of the GAA in relation to or by reasons of his position, in case of NGAs',
                                            ]);
                                            DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 13,
                                            'related_document_list_entry'=> 'Other supporting documents as are necessary depending on the nature of expense charged',
                                            ]); 
                                            
                             DB::table('related_docs')->insert([
                                    'd_v_type_sorter_id'=> 28,]);
                                        DB::table('related_document_lists')->insert([
                                        'related_docs_id'=> 14,
                                        ]);
                                            DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 14,
                                            'related_document_list_entry'=> 'Travel Order',
                                            ]);
                                            DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 14,
                                            'related_document_list_entry'=> 'Request Letter',
                                            ]);
                                            DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 14,
                                            'related_document_list_entry'=> 'Other supporting documents',
                                            ]); 

                             DB::table('related_docs')->insert([
                                    'd_v_type_sorter_id'=> 29,]);
                                        DB::table('related_document_lists')->insert([
                                        'related_docs_id'=> 15,
                                        ]);
                                            DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 15,
                                            'related_document_list_entry'=> 'Travel Order',
                                            ]);
                                            DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 15,
                                            'related_document_list_entry'=> 'Request Letter',
                                            ]);
                                            DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 15,
                                            'related_document_list_entry'=> 'Other supporting documents',
                                            ]); 
                                            
                             DB::table('related_docs')->insert([
                                    'd_v_type_sorter_id'=> 33,]);
                                        DB::table('related_document_lists')->insert([
                                        'related_docs_id'=> 16,
                                        ]);
                                            DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 16,
                                            'related_document_list_entry'=> 'Travel Order',
                                            ]);
                                            DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 16,
                                            'related_document_list_entry'=> 'Request Letter',
                                            ]);
                                            DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 16,
                                            'related_document_list_entry'=> 'Other supporting documents',
                                            ]); 

                             DB::table('related_docs')->insert([
                                    'd_v_type_sorter_id'=> 34,]);
                                        DB::table('related_document_lists')->insert([
                                        'related_docs_id'=> 17,
                                        ]);
                                            DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 17,
                                            'related_document_list_entry'=> 'Travel Order',
                                            ]);
                                            DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 17,
                                            'related_document_list_entry'=> 'Request Letter',
                                            ]);
                                            DB::table('related_document_list_entries')->insert([
                                            'related_document_list_id'=> 17,
                                            'related_document_list_entry'=> 'Other supporting documents',
                                            ]); 
    }
}
