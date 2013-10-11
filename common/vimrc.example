"hoyoung vim setting
set nu
syntax on
set ts=4
set shiftwidth=4
set cindent
set smartindent
set autoindent

" for python
autocmd BufRead *.py set smartindent cinwords=if,elif,else,for,while,try,except,finally,def,class
autocmd BufRead *.py set nocindent
autocmd BufWritePre *.py normal m`:%s/\s\+$//e ``
filetype plugin indent on

" for encoding
set fencs=ucs-bom,utf-8,cp949

" filename display
set modeline
set ls=2

" Open and close the taglist.vim separately 
nmap <F8>  :TrinityToggleTagList<CR> 

" Open and close the NERD_tree.vim separately 
nmap <F9>  :TrinityToggleNERDTree<CR> 

" For java
autocmd BufNewFile,BufRead *.java :source ~/.vim/myjava.vim
