@props(['status'])

<span {{ $attributes->class([
    'inline-flex w-fit items-center gap-1.5 rounded-full px-2.5 py-1 text-xs font-medium ring-1',
    'bg-emerald-50 text-emerald-700 ring-emerald-200' => $status === 'termine',
    'bg-amber-50 text-amber-700 ring-amber-200' => $status === 'en_cours',
]) }}>
    <span @class([
        'size-1.5 rounded-full',
        'bg-emerald-500' => $status === 'termine',
        'bg-amber-500' => $status === 'en_cours',
    ])></span>
    {{ $status === 'termine' ? 'Terminé' : 'En cours' }}
</span>
