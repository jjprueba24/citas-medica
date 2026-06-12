<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: DejaVu Sans, Arial, sans-serif;
            font-size: 11px;
            color: #1e293b;
        }

        .header {
            background: #1d4ed8;
            color: #fff;
            padding: 18px 24px;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 18px;
            font-weight: 700;
        }

        .header p {
            font-size: 11px;
            opacity: 0.8;
            margin-top: 4px;
        }

        .meta {
            padding: 0 24px 16px;
            display: flex;
            gap: 20px;
            font-size: 10px;
            color: #64748b;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead tr {
            background: #1e40af;
            color: #fff;
        }

        thead th {
            padding: 8px 10px;
            text-align: left;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: .5px;
        }

        tbody tr {
            border-bottom: 1px solid #e2e8f0;
        }

        tbody tr:nth-child(even) {
            background: #f8fafc;
        }

        tbody td {
            padding: 7px 10px;
        }

        .badge {
            padding: 2px 7px;
            border-radius: 10px;
            font-size: 9px;
            font-weight: 600;
        }

        .m {
            background: #dbeafe;
            color: #1e40af;
        }

        .f {
            background: #fce7f3;
            color: #9d174d;
        }

        .o {
            background: #f3f4f6;
            color: #374151;
        }

        .footer {
            margin-top: 20px;
            text-align: right;
            font-size: 9px;
            color: #94a3b8;
            padding: 0 24px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1><?php echo e(config('settings.clinic_name', 'CitasMédicas')); ?> — Listado de Pacientes</h1>
        <p>Generado el <?php echo e(now()->format('d/m/Y H:i')); ?> &nbsp;|&nbsp; Total: <?php echo e($patients->count()); ?> paciente(s)</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Género</th>
                <th>F. Nacimiento</th>
                <th>Tipo Sangre</th>
                <th>Alergias</th>
                <th>Registro</th>
            </tr>
        </thead>
        <tbody>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php
                    $gMap = ['male' => ['Masculino', 'm'], 'female' => ['Femenino', 'f'], 'other' => ['Otro', 'o']];
                    [$gLabel, $gClass] = $gMap[$p->gender] ?? ['—', 'o'];
                ?>
                <tr>
                    <td><?php echo e($p->id); ?></td>
                    <td><strong><?php echo e($p->user->name); ?></strong></td>
                    <td><?php echo e($p->user->email); ?></td>
                    <td><?php echo e($p->phone ?? '—'); ?></td>
                    <td>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($p->gender): ?>
                            <span class="badge <?php echo e($gClass); ?>"><?php echo e($gLabel); ?></span>
                        <?php else: ?> —
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </td>
                    <td><?php echo e($p->dob ? \Carbon\Carbon::parse($p->dob)->format('d/m/Y') : '—'); ?></td>
                    <td><?php echo e($p->blood_type ?? '—'); ?></td>
                    <td><?php echo e($p->allergies ? \Str::limit($p->allergies, 30) : '—'); ?></td>
                    <td><?php echo e($p->created_at->format('d/m/Y')); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="9" style="text-align:center;padding:16px;color:#94a3b8;">Sin resultados</td>
                </tr>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </tbody>
    </table>

    <div class="footer"><?php echo e(config('settings.clinic_name', 'CitasMédicas')); ?> &copy; <?php echo e(date('Y')); ?></div>
</body>

</html><?php /**PATH C:\Webs\PHP\citasmedicas\resources\views\patients\pdf.blade.php ENDPATH**/ ?>