<?php

	class Files
	{
		private $extensions;
    	private $types;
    	private $size;
    	private $errors;
    	private $hash;
    
    public function __construct( Array $extensions = array(), Array $types = array(), $size = 100000000 )
    {
        $this->errors = array();
        $this->extensions = $extensions;
        $this->types = $types;
        $this->size = $size;
    }

    public function upload( $file, $path )
    {
        if( $this->checkFile( $file ) ) {
            if( $this->isAllowed( $file ) && $this->pathExists( $path ) ) {
                // Extension of file
                $ext = strtolower( strrchr( $file['name'], '.' ) );
                // Make a final hash
                $hash = new hash();
                $hash->createHash();
                $this->hash = $hash->getHash();
                // Upload the file to the final folder
                if( !move_uploaded_file( $file['tmp_name'], $path.$this->hash.$ext ) ) {
                    $this->errors[] = 'Verplaats fout';
                }
            }
        }
    }
    
    public function isAllowed( $file )
    {
        $allowed = true;
        foreach( array( 'mime', 'extension', 'size' ) as $check ) {
            $method = sprintf( 'check%s', ucfirst( $check ) );
            $allowed = ( $this->$method( $file ) ) && $allowed;
        }
        return $allowed;
    }
    
    public function checkFile( $file )
    {
        if( empty( $file['tmp_name'] ) ) {
            $this->errors[] = 'Select bestand';
            return false;
        }
        return true;
    }

    public function checkMime( $file )
    {
        if( count( $this->types ) > 0 ) {
            if( !in_array( $file['type'], $this->types ) ) {
                $this->errors[] = 'MIME type fout';
                return false;
            }
            return true;
        }
        return true;
    }
    
    public function checkExtension( $file )
    {
        if( count ( $this->extensions ) > 0 ) {
            // Check extension
            $ext = strtolower( strrchr( $file['name'], '.' ) );
                // Control if extension is allowed
                if( !in_array( $ext, $this->extensions ) ) {
                    $this->errors[] = 'Extensie fout';
                    return false;
                }
            return true;
        }
        return true;
    }
    
    public function checkSize( $file )
    {
        if( ctype_digit( $this->size ) ) {
            // Controle file size
            if( $file['size'] > $this->size ) {
                $this->errors[] = 'Grote bestand';
                return false;
            }
        }
        return true;
    }
    
    public function pathExists( $path )
    {
        if( !empty( $path ) ) {
            if( !is_dir( $path ) ) {
                $this->errors[] = 'Upload map';
                return false;
            }
        }
        return true;
    }
    
    public function hash( ) 
    {
        return $this->hash;
    }

    public function errors( $css )
    {
        if( sizeof( $this->errors ) > 0 ) {
            $html = '<ul class="' .$css. '">';
                // Foreach array to string
                foreach( $this->errors as $error ) {
                    $html .= '<li> ' .$error. ' </li>';
                }
            $html .= '</ul>';
            return $html;
        }
    }
}

?>