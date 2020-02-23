<?php

namespace App\DataTables;

use App\Contractors;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ContractorsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
             ->addColumn('action', function(Contractors $contractors) {
                    return '<td nowrap> <a href="'.route('contractors.edit',$contractors->id).'" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                     <i class="la la-edit"></i>
                     </a>
                     <a href="" data-toggle="modal" data-target="#deletePopuop" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-trash-o"></i>
                     </a></td> ';
                });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Contractor $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Contractors $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('contractors-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('print')
                      
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
            Column::make('id'),
            Column::make('name'),
            Column::make('created_at'),
            Column::make('updated_at'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Contractors_' . date('YmdHis');
    }
}
