@props(['value', 'value_update'])

<select {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}>
    @foreach ( $value ?? $slot as $values)
        <option value='{{ $values["name"] }}' {{ isset($value_update) && $value_update == $values["name"] ? 'selected' : ''}}>{{ $values["name"] }}</option>
    @endforeach
</select>

