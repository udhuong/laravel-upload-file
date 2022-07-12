<?php

namespace Udhuong\LaravelUploadFile\Facades;
use Illuminate\Support\Facades\Facade;
use Udhuong\LaravelUploadFile\FileUploader as Uploader;
/**
 * Facade for Media Uploader.
 *
 * @method static Uploader fromSource(mixed $source)
 * @method static Uploader fromString(string $source)
 * @method static Uploader toDestination(string $disk, string $directory)
 * @method static Uploader toDisk(string $disk)
 * @method static Uploader toDirectory(string $directory)
 * @method static Uploader useFilename(string $filename)
 * @method static Uploader useHashForFilename()
 * @method static Uploader useOriginalFilename()
 * @method static Uploader setMaximumSize(int $size)
 * @method static Uploader onDuplicateError()
 * @method static Uploader onDuplicateIncrement()
 * @method static Uploader onDuplicateReplace()
 * @method static Uploader setStrictTypeChecking(bool $strict)
 * @method static Uploader setAllowUnrecognizedTypes(bool $allow)
 * @method static Uploader setTypeDefinition(string $type, array $mime_types, array $extensions)
 * @method static Uploader setAllowedMimeTypes(array $allowed_mimes)
 * @method static Uploader setAllowedExtensions(array $allowed_extensions)
 * @method static Uploader setAllowedAggregateTypes(array $allowed_types)
 * @method static Uploader makePublic()
 * @method static Uploader makePrivate()
 * @method static string inferAggregateType(string $mime_type, string $extension)
 * @method static string[] possibleAggregateTypesForMimeType(string $mime)
 * @method static string[] possibleAggregateTypesForExtension(string $extension)
 * @method static Uploader upload()
 * @method static Uploader populateModel(object $model)
 * @method static void verifyFile()
 */
class FileUploader extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'upload_file.uploader';
    }

    public static function getFacadeRoot()
    {
        // prevent the facade from behaving like a singleton
        if (!self::isMock()) {
            self::clearResolvedInstance('upload_file.uploader');
        }
        return parent::getFacadeRoot();
    }
}
