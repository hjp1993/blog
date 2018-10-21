<?php

namespace App\Admin\Controllers;

use App\Model\invoice;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class invoiceController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new invoice);

        $grid->id('Id');
        $grid->user_id('用户id');
        $grid->invoice_type('Invoice type');
        $grid->company_name('Company name');
        $grid->taxpayer_code('Taxpayer code');
        $grid->invoice_content('Invoice content');
        $grid->register_addr('Register addr');
        $grid->register_phone('Register phone');
        $grid->bank_name('Bank name');
        $grid->bank_account('Bank account');
        $grid->modify_time('Modify time');
        $grid->add_time('Add time');
        $grid->mark('Mark');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(invoice::findOrFail($id));

        $show->id('Id');
        $show->user_id('User id');
        $show->invoice_type('Invoice type');
        $show->company_name('Company name');
        $show->taxpayer_code('Taxpayer code');
        $show->invoice_content('Invoice content');
        $show->register_addr('Register addr');
        $show->register_phone('Register phone');
        $show->bank_name('Bank name');
        $show->bank_account('Bank account');
        $show->modify_time('Modify time');
        $show->add_time('Add time');
        $show->mark('Mark');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new invoice);

        $form->text('user_id', 'User id')->default(' ');
        $form->number('invoice_type', 'Invoice type');
        $form->text('company_name', 'Company name')->default(' ');
        $form->text('taxpayer_code', 'Taxpayer code')->default(' ');
        $form->number('invoice_content', 'Invoice content');
        $form->text('register_addr', 'Register addr')->default(' ');
        $form->text('register_phone', 'Register phone')->default(' ');
        $form->text('bank_name', 'Bank name')->default(' ');
        $form->text('bank_account', 'Bank account')->default(' ');
        $form->datetime('modify_time', 'Modify time')->default(date('Y-m-d H:i:s'));
        $form->datetime('add_time', 'Add time')->default(date('Y-m-d H:i:s'));
        $form->number('mark', 'Mark')->default(1);

        return $form;
    }
}
