<tbody>
    @foreach ($documents as $key => $document)
        <tr>
            <th scope="row">{{ $documents->firstItem() + $key }}</th>
            <td>{!! $document->title !!}</td>
            <td>{!! $document->document_no !!}</td>
            <td>
                <span class=""> {!! $document->division->name ?? '' !!} </span><br>
                <span class="badge bg-secondary text-light">{{ $document->section->name ?? '' }}</span>
            </td>
            <td>{{ $document->document_category->category_title ?? 'Uncategorized' }}</td>

            <td>


                <x-file-info file_type="{{ $document->file_type }}" file_size="{{ $document->file_size }}" />
            </td>
            <td>{{ $document->user->name }}</td>


            <td>{{ $document->created_at->format('d-m-Y') }}</td>

            <td class="text-right ">
                <div class="action-button-container d-flex justify-content-evenly">
                    <x-view-button href=" {{ route('documents.single', $document) }} " />
                    @can('update', $document)
                    <x-edit-button href=" {{ route('documents.edit', $document) }} " />
                    @endcan
                    @can('delete', $document)
                        <x-delete-button :model="$document" :modelId="$document->id" :modelName="$document->title"
                            action=" {{ route('documents.destroy', $document) }} " type="document" />
                    @endcan
                </div>
            </td>
        </tr>
    @endforeach
</tbody>
