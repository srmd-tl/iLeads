<?php

namespace App\DataTables;

use App\User;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
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
            ->addColumn('action', function (User $user) {
                return '<td > <div class="d-flex"> <a href="' . route('user.edit', $user->id) . '" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                     <i class="la la-edit"></i>
                     </a>
                     <form method="POST" action="' . route('user.destroy', $user->id) . '">
                     '.csrf_field().
                     method_field('DELETE').'
                     <button class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                     <i class="la la-trash-o"></i>
                     </button>
                     <form>
                     </div></td> ';
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
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
            ->setTableId('users-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->pageLength(5)
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
            Column::make('name'),
            Column::make('email'),
            Column::make('phone'),
            Column::make('business_name'),
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
        return 'Users_' . date('YmdHis');
    }
}
