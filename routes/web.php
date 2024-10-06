    <?php

    use App\Http\Controllers\ComunaController;
    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/comunas', [ComunaController::class, 'index'])->name('comunas.index');
    Route::get('/comunas/create', [ComunaController::class, 'create'])->name('comunas.create');
    Route::post('/comunas', [ComunaController::class, 'store'])->name('comunas.store');
    Route::get('/comunas/create', [ComunaController::class, 'create'])->name('comunas.create');
    Route::delete('/comunas/{comuna}', [ComunaController::class, 'destroy'])->name('comunas.destroy');
    Route::put('/comunas/{comuna}', [ComunaController::class, 'update'])->name('comunas.update');
    Route::get('/comunas/{comuna}/edit', [ComunaController::class, 'edit'])->name('comunas.edit');
    Route::delete('/comunas/{comuna}', [ComunaController::class, 'destroy'])->name('comunas.destroy');
    
    Route::get('/municipios', [MunicipioController::class, 'index'])->name('municipios.index');
    Route::get('/municipios/create', [MunicipioController::class, 'create'])->name('municipios.create');
    Route::post('/municipios', [MunicipioController::class, 'store'])->name('municipios.store');
    Route::get('/municipios/{municipio}/edit', [MunicipioController::class, 'edit'])->name('municipios.edit');
    Route::delete('/municipios/{municipio}', [MunicipioController::class, 'destroy'])->name('municipios.destroy');
    Route::put('/municipios/{municipio}', [MunicipioController::class, 'update'])->name('municipios.update');
    
    Route::get('/departamentos', [DepartamentoController::class, 'index'])->name('departamentos.index');
    Route::get('/departamentos/create', [DepartamentoController::class, 'create'])->name('departamentos.create');
    Route::post('/departamentos', [DepartamentoController::class, 'store'])->name('departamentos.store');
    Route::get('/departamentos/{departamento}/edit', [DepartamentoController::class, 'edit'])->name('departamentos.edit');
    Route::put('/departamentos/{departamento}', [DepartamentoController::class, 'update'])->name('departamentos.update');
    Route::delete('/departamentos/{departamento}', [DepartamentoController::class, 'destroy'])->name('departamentos.destroy');
