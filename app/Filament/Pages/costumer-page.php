<?php

use App\Models\ContactPerson;
use Filament\Resources\Forms\Form;
use Filament\Resources\Tables\Table;
use Filament\Resources\Tables\Columns;


class ContactPersonScreen
{
    public static string $model = ContactPerson::class;

    public function form(Form $form): void
    {
        $form->schema([

        ]);
    }

    public function table(Table $table): void
    {
        $table->columns([
            Columns\TextColumn::make('name'),
            Columns\TextColumn::make('customer.name')->label('Customer')->sortable()->searchable(),
        ]);
    }

    protected function getQuery()
    {
        return parent::getQuery()->with('customer');
    }

}
